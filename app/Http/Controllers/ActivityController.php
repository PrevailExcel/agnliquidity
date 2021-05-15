<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Package;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ActivityController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function amIValid(Request $request)
    {
        $username = $request->input('agUsername');
        $string = 'username='.$username; //test username
        $secret = '1530f74e0c394963b27414c8c6cd0592';
        $sig = hash_hmac("sha256", $string, $secret, false);

        // get a cURL resource
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://node.agrichainx.com/api/user?".$string,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            //CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "X-SIGNATURE: $sig ",
                "X-API-KEY: 1618076575888",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $getRes = json_decode($response, true);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            if ($getRes['status'] == "Ok" && $getRes['data']['validated'] == true) {

                $user = auth()->user();
                $checkForUser = User::where('username', $username)->first();
                if($checkForUser == null){
                User::where('id', $user->id)
                    ->update(array('is_validated' => 1,
                                    'username' =>$getRes['data']['username'],
                                    'gender' => $getRes['data']['gender']
                                ));
                $user1 = array(
                    'validated' => $getRes['data']['validated']
                );
                echo json_encode($user1);
                } else {
                    $user1 = array(
                        'validated' => "used"
                    );
                    echo json_encode($user1);
                }
            } else if ($getRes['status'] == "Ok" && $getRes['data']['validated'] == false){
                $user1 = array(
                    'validated' => $getRes['data']['validated']
                );
                return json_encode($user1);
            } else if ($getRes['status'] != "Ok") {
                $user1 = array(
                    'validated' => "notFound"
                );
                return json_encode($user1);
            }
        }

    }

    public function activateVoucher(Request $request)
    {
        $user = auth()->user();
        if ($user->is_approved == 1) {
        $code = $request->input('voucherCode');
        $check = DB::table('vouchers')->where('voucher', $code)->get('id')->first();
        if ($check != null){
           $check2 = DB::table('vouchers')->where('voucher', $code)->value('is_used');
            if ($check2 == 0) {
                DB::table('user_package_payment')->insert([
                    'user_id' => $user->id,
                    'package_id' => DB::table('vouchers')->where('voucher', $code)->value('package'),
                    'payment_id' => DB::table('vouchers')->where('voucher', $code)->value('payment_method'),
                    'created_at' => Carbon::now(),
                ]);
                if($user->referred_by != null){
                $vv = DB::table('vouchers')->where('voucher', $code)->value('package');
                $add = ((5/100) * Package::where('id', $vv)->value('price'));
                User::where('id',$user->myRef->id)->update(['ref_earnings' => $add]);
                }
                if (Activity::where('user_id', $user->id)->get('id')->first() == null) {
                    Activity::create([
                    'user_id' => $user->id
                ]);
                    }
                DB::table('vouchers')->where('voucher', $code)->update(['is_used' => 1]);
            $final = array(
                'checker' => "Successful",
            );
                return json_encode($final);
            } else{
                $final = array(
                    'checker' => "Used",
                );
                return json_encode($final);
            }
        }else{
            $final = array(
                'checker' => "Failed",
            );
            return json_encode($final);
            }
        } else {
            $final = array(
                'checker' => "notActive",
            );
            return json_encode($final);
                }
    }

    public function post($id){
        $post = Post::where('id', $id)->first();
        if($post){
            return view('website.post', compact('post'));
        }   else    {
            return \Response::view('website.errors.404' . array(), 404);
        }
    }

    public function uploadPop(Request $request)
    {
        $user = auth()->user();
        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,pdf' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $file = request()->file('image');
            $file->store('pop', ['disk' => 'public']);
            //$request->file->store('post', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.

            $saved = User::where('id', $user->id)->update([
                'image' => $file->hashName(),
                "have_pop" => 1,
            ]);


            if ($saved) {
                Session::flash('Created', "POP Uploaded Successfully!");
                return redirect()->route('home');
            } else {
                Session::flash('Failed', "Try again");
                return redirect()->back();
            }
        }
    }
}
