<?php

namespace App\Http\Controllers;

use App\Package;
use App\PaymentMethod;
use App\Post;
use App\Connect;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:superadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::all()->take(5);
        $count = count(User::all());
        $countC = count(Connect::all());
        $withdraw = Connect::where('want_to_withdraw', 1)->count();
        $mainuser = User::all();
        $totalPrice = 0;
        foreach ($mainuser as $pro){
            $profit = $pro->package;
            $price = 1 * (Package::where('id', $profit)->value('price'));
            $totalPrice += $price;
        }
        $users = User::where('want_to_withdraw', 1)->orderBy('paid_on', 'DESC')->take(10);
        $newusers = User::orderBy('id', 'DESC')->get()->take(5);
        return view('admin.index', compact('users','totalPrice', 'withdraw', 'newusers', 'posts', 'countC', 'count'));
    }

    public function makeVendor()
    {
        $users = User::where('is_vendor', 0)->where('is_admin', 0)->get()->all();
        return view('admin.createvendor', compact('users'));
    }

    public function generateVoucher()
    {
        $packages = Package::all();
        $payM = PaymentMethod::all();
        return view('admin.createvendor', compact('packages', 'payM'));
    }

    public function generateVouch(Request $request)
    {
        $package = $request->input('package');
        $payM = $request->input('pay');
        $code = strtoupper(bin2hex(random_bytes(4)). date('ms'));

        DB::table('vouchers')->insert([
           'voucher' => $code,
           'package' => $package,
           'payment_method' => $payM,
           'created_at' => Carbon::now(),
        ]);
        return redirect()->route('voucher.list');
    }

    public function approveUsers(Request $request)
    {
        $user = $request->input('id');

        User::where('id', $user)->update([
           'is_approved' => 1,
        ]);
        Session::flash('done', 'Approved successfully');
        return redirect()->route('verify.users');
    }

    public function listVoucher(){
        $vouchers = DB::table('vouchers')->orderBy('id', 'DESC')->get()->all();
        return view("admin.listvoucher", compact('vouchers'));
    }

    public function verifyUsers(){
        $newuser = User::orderBy('id', 'DESC')->where('is_validated', 1)->where('have_pop', 1)->where('is_approved', 0)->get()->all();
        return view("admin.listunverified", compact('newuser'));
    }

    public function viewUsers()
    {
        $users = User::all();
        return view('admin.listusers', compact('users'));
    }
    public function viewSingleUsers(Request $request)
    {
        $id = $request->input('id');
        $users = User::find($id);
        if($users->payment_method == 1)
            $payadd = $users->account_number;
        else if($users->payment_method == 2)
            $payadd = $users->bitcoin_add;
        else {
            $payadd = $users->agricoin_add;
        }
        if($users->want_to_withdraw == 1)
            $applied = "Yes";
        else{$applied = "No"; }
        if($users->is_eligible == 1)
            $eligible = "Yes";
        else{$eligible = "No"; }
        $dt = Carbon::parse($users->paid_on)->format('d M, Y');
        $user1 = array(
            'username' => $users->name,
            'email' => $users->email,
            'phone' => $users->phone,
            'payment' => $users->pay->name,
            'package' => $users->pack->name,
            'payadd' => $payadd,
            'regdate' => $dt,
            'applied' => $applied,
            'eligible' => $eligible,
            'referral' => $users->ref_earnings,
            'activity' => $users->act_earnings,
            'down' => count($users->myRefs),
            'affiliate_id' => $users->affiliate_id
        );
        return json_encode($user1);
    }
}
