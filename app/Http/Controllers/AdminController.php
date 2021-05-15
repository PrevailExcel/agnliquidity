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
        $all = Connect::all();
        $posts = Post::all()->take(5);
        $count = count(User::all());
        $countC = count(Connect::all());
        $withdraw = Connect::where('want_to_withdraw', 1)->where('is_paid', 0)->count();
        $mainuser = User::all();
        $totalPrice = 0;
        $totalPrice2 = 0;
        foreach ($all as $proo){
            $profit = $proo->package_id;
            $price = 1 * (Package::where('id', $profit)->value('price'));
            $totalPrice += $price;
        }
        foreach ($all as $pro){
            $price = 1 * (Connect::where('act_earnings', $pro->act_earnings)->where('is_paid', 1)->value('act_earnings'));
            $totalPrice2 += $price;
        }
        $users = Connect::where('want_to_withdraw', 1)->where('is_paid', 0)->orderBy('id', 'DESC')->get()->take(10);
        $newusers = User::orderBy('id', 'DESC')->get()->take(5);
        $package1 = count(Connect::where('package_id', 1)->get());
        $package2 = count(Connect::where('package_id', 2)->get());
        $package3 = count(Connect::where('package_id', 3)->get());
        $package4 = count(Connect::where('package_id', 4)->get());
        $package5 = count(Connect::where('package_id', 5)->get());
        $package6 = count(Connect::where('package_id', 6)->get());
        $package7 = count(Connect::where('package_id', 7)->get());
        $package8 = count(Connect::where('package_id', 8)->get());
        $package9 = count(Connect::where('package_id', 9)->get());
        $package10 = count(Connect::where('package_id', 10)->get());
        
        $payment1 = count(Connect::where('payment_id', 1)->get());
        $payment2 = count(Connect::where('payment_id', 2)->get());
        $payment3 = count(Connect::where('payment_id', 3)->get());
        return view('admin.index',  compact('users',
                                            'totalPrice', 
                                            'totalPrice2', 
                                            'withdraw', 
                                            'newusers', 
                                            'posts', 
                                            'package1',
                                            'package2',
                                            'package3',
                                            'package4',
                                            'package5',
                                            'package6',
                                            'package7',
                                            'package8',
                                            'package9',
                                            'package10',
                                            'payment1',
                                            'payment2',
                                            'payment3',
                                            'countC', 
                                            'count'));
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
        $vouchers = DB::table('vouchers')->where('is_used', 0)->orderBy('id', 'DESC')->get()->all();
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

    public function payInNaira()
    {
        $posts = Connect::where('want_to_withdraw', 1)->where('payment_id', 1)->where('is_paid', 0)->get();
        return view('admin.payinnaira', compact('posts'));
    }
    

    public function assignWriter()
    {
        $posts = User::all();
        return view('admin.assignwriter', compact('posts'));
    }
    


    public function allWriters()
    {
        $posts = User::all();
        return view('admin.allwriters', compact('posts'));
    }
    


    public function assignWriterNow(Request $request)
    {
        $user = $request->input('id');
        if(Db::table('model_has_roles')->where('model_id',$user)->first() == null){
        Db::table('model_has_roles')->insert([
            'role_id' => 2,
            'model_type' => 'App\User',
            'model_id' => $user
        ]);
        Session::flash('assigned', 'Successful assigned user as a writer');
        return redirect()->route('all.writers');
        } else {
        Session::flash('not_assigned', 'User Already assigned as writer');
        return redirect()->route('assign.writer');
        }
    }
    



    public function assignWriterDelete(Request $request)
    {
        $user = $request->input('id');
        $removed = Db::table('model_has_roles')->where('role_id', 2)->where('model_id', $user)->update([
            'role_id' => 2,
            'model_type' => 'App\User',
            'model_id' => rand(99999999, 999999999), 
        ]);
        if($removed){
        Session::flash('assigned', 'Removed user as a writer');
        return redirect()->route('all.writers');
        } else {
        Session::flash('not_assigned', 'Not Successful');
        return redirect()->route('all.writers');
        }
    }
    

    public function payAsap(Request $request){
        $id = $request->input('id');
        $user = Connect::where('id', $id)->value('user_id');
        $amount = $request->input('amount');
        $done = Connect::where('id', $id)->update([
            'is_paid' => 1,
            'paid' => $amount,
            'was_paid_on' => Carbon::now()
         ]);
         $vvv = User::where('id', $user)->value('ref_earnings');
         $vvvv = User::where('id', $user)->value('act_earnings');
         $done2 = User::where('id', $user)->update([
            'act_earnings' => $vvvv - ($amount - $vvv),
            'ref_earnings' => 0,
         ]);
         if($done && $done2){
         Session::flash('paid', 'User have been confirmed paid and Package nullified');
         return redirect()->back();
         }
    }

    public function payInBitcoin()
    {
        $posts = Connect::where('want_to_withdraw', 1)->where('payment_id', 2)->where('is_paid', 0)->get();
        return view('admin.payinbitcoin', compact('posts'));
    }
    

    public function payInAgricoin()
    {
        $posts = Connect::where('want_to_withdraw', 1)->where('payment_id', 3)->where('is_paid', 0)->get();
        return view('admin.payinagricoin', compact('posts'));
    }
    
    public function paymentHistory()
    {
        $posts = Connect::where('is_paid', 1)->orderBy('id', 'DESC')->get();
        return view('admin.paymenthistory', compact('posts'));
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
