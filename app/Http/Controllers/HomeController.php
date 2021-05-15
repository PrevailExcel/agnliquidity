<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Package;
use App\PaymentMethod;
use App\Post;
use App\Connect;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
            $dt = Carbon::parse($user->paid_on);
            $cashOutDate = $dt->addDays(30)->format('d M, Y');
            $sPost = Post::latest()->limit(1)->get();
                if($user->act != null) {
                    $actstot = $user->act->total;
                    $actscom = $user->act->completed;
                    $actsper = round((($actscom / $actstot) * 100));
                } else{
                    $actstot = 0;
                    $actscom = 0;
                    $actsper = 0;
                }
                $allRef = count(User::where('referred_by', $user->affiliate_id)->get());
                $package = $user->connect;
            return view('dashboard', compact('user', 'package', 'allRef', 'sPost','actscom','actsper', 'actstot', 'cashOutDate'));
    }

    public function activity()
    {
                $user = auth()->user();
                    if ($user->have_shared != 1 && $user->is_approved == 1) {
                        $actEarn3 =0;
                        foreach($user->connect as $pac){
                            if($pac->is_eligible === 0){
                            $roi = PaymentMethod::where('id',$pac->payment_id)->value('roi');
                            $price = Package::where('id',$pac->package_id)->value('price');
                            $actEarn = (( $roi / 100) * $price );
                            $actEarn2 = round(($actEarn + $price) / 30, 2);
                            $actEarn3 += $actEarn2;
                            Connect::where('id', $pac->id)->update(array('act_earnings' => $pac->act_earnings + $actEarn2));
                            }
                        };
                        User::where('id', $user['id'])->update(array('have_shared' => 1));
                        User::where('id', $user->id)->update(array('act_earnings' => $user->act_earnings + $actEarn3));
                        if (Activity::where('user_id', $user->id)->get('id')->first() != null) {
                            Activity::where('user_id', $user->id)->update(array('completed' => $user->act->completed + count($user->connect)));
                            Activity::where('user_id', $user->id)->update(array('total' => (count($user->connect) * 30)));
                        }
                        return response()->json(['done', 'Done'], 200);
                    } else {
                        return redirect()->back()->with('Notactive'. "You can't access this");
                    }
    }

    public function addBankDetails(Request $request){
        $validated = $request->validate([
            'bank' => 'required',
            'bank_name'=> 'required',
            'account_number'=> 'required',
        ]);

        $user = auth()->user();
        User::where('id', $user->id)->update([
            'bank' => $validated['bank'],
            'bank_name'=> $validated['bank_name'],
            'account_number'=> $validated['account_number'],
        ]);
            Session::flash('bankAd', "Your Account details have been added or edited Succesfully");
            return redirect()->route('home');
    }
    public function addProfile(Request $request){

        $user = auth()->user();
        User::where('id', $user->id)->update([
            'name' => $request->input('name'),
            'phone'=> $request->input('phone'),
            'gender'=> $request->input('gender'),
        ]);
            Session::flash('profileAd', "Your Profile details have been updated Succesfully");
            return redirect()->route('home');
    }
    public function addBitcoinAddress(Request $request){
        $user = auth()->user();
        if($request->input('bitcoin') != null and $request->input('agricoin') != null){
        User::where('id', $user->id)->update([
            'bitcoin_add' => $request->input('bitcoin'),
            'agricoin_add' => $request->input('agricoin'),
        ]);
        Session::flash('coin', "Your wallet addresses have been updated");
        return redirect()->route('home');
        } elseif ($request->input('bitcoin') != null and $request->input('agricoin') == null) {
            User::where('id', $user->id)->update([
                'bitcoin_add' => $request->input('bitcoin'),
            ]);
            Session::flash('Bcoin', "Your Bitcoin wallet address have been updated");
            return redirect()->route('home');
                } elseif ($request->input('bitcoin') == null and $request->input('agricoin') != null) {
                    User::where('id', $user->id)->update([
                        'agricoin_add' => $request->input('agricoin'),
                    ]);
                    Session::flash('Acoin', "Your Agricoin wallet address have been updated");
                    return redirect()->route('home');
                        }elseif ($request->input('bitcoin') == null and $request->input('agricoin') == null) {
                                        
                            Session::flash('nocoin', "There's no wallet address provided");
                            return redirect()->route('home');
                                }
    }

    public function withdraw(Request $request){
        $id = $request->input('id');
        $user = auth()->user();
        $payer = Connect::where('id', $id)->value('payment_id');
        $bank = User::where('id', $user->id)->value('bank');
        $bankName = User::where('id', $user->id)->value('bank_name');
        $bankNumber = User::where('id', $user->id)->value('account_number');
        $bitcoin = User::where('id', $user->id)->value('bitcoin_add');
        $agricoin = User::where('id', $user->id)->value('agricoin_add');
        if($payer == 1){
            if($bank != null && $bankName != null && $bankNumber != null){
                Connect::where('id', $id)->update([
                    'want_to_withdraw' => 1,
                ]);
                Session::flash('withdraw', "You've successfully applied for withdrawal");
                return back();
            } else {
                Session::flash('no_withdraw', "Update your bank details properly and apply again");
                return back();
            }
        } else if($payer == 2){
            if($bitcoin != null){
                Connect::where('id', $id)->update([
                    'want_to_withdraw' => 1,
                ]);
                Session::flash('withdraw', "You've successfully applied for withdrawal");
                return back();
            } else {
                Session::flash('no_withdraw', "Update your wallet address and apply again");
                return back();
            }

        } else if($payer == 3){
            if($agricoin != null){
                Connect::where('id', $id)->update([
                    'want_to_withdraw' => 1,
                ]);
                Session::flash('withdraw', "You've successfully applied for withdrawal");
                return back();
            } else {
                Session::flash('no_withdraw', "Update your wallet address and apply again");
                return back();
            }

        }
    }

    public function addAgricoinAddress(Request $request){
        $validated = $request->validate([
            'agricoin_add' => 'required',
        ]);

        $user = auth()->user();
        User::where('id', $user->id)->update([
            'agricoin_add' => $validated['agricoin_add'],
        ]);
        return back();
    }

    public function referrer()
    {
        return auth()->user()->myRef;
    }

    public function referrals()
    {
        return auth()->user()->myRefs;
    }

    public function confirm($ref){
        $curl = curl_init();
        if(!$ref){
            die('No reference supplied');
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer sk_test_65761f009e9bc95ca535a6913f6acf90274dc967",
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $result = json_decode($response, true);
            $deposit = $result['data']['amount'] / 100;
            $user = auth()->user();
            $bal = $user->point + $deposit;
            if($deposit >= 0)
            {
                DB::table('payments')->insert([
                    'user_id' => $user->id,
                    'amount' => $deposit,
                    'reference' => $ref,
                ]);
                //$user->save();

                $user->have_paid = 1;
                $user->paid_on = Carbon::today();
                $user->update();
                return redirect(route('home'));
            } else {
                return 'nothing here';
            }
        }
    }

    public function buyPackages()
    {
        $user = auth()->user();
        if ($user->is_approved == 1) {
            # code...
        $packages = Package::all();
        return view('website.package', compact('packages', 'user'));
        }else{
            Session::flash('not_app', "You account have not been approved yet");
            return redirect()->route('home');
        }
    }
}
