<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CoinbaseCommerce\ApiClient;
use CoinbaseCommerce\Webhook;
use CoinbaseCommerce\Resources\Checkout;
use CoinbaseCommerce\Resources\Charge;


class ConnectController extends Controller
{
    public function index()
    {
        
        ApiClient::init('017d2ba9-c847-4476-b12b-d9860941ccc6');
        
            $secret = '9cf79275-afbc-41ea-a211-4fdeae93d725';
            $headerName = 'X-Cc-Webhook-Signature';
            $headers = getallheaders();
            $signraturHeader = isset($headers[$headerName]) ? $headers[$headerName] : null;
            $payload = trim(file_get_contents('php://input'));

            try {
                $event = Webhook::buildEvent($payload, $signraturHeader, $secret);
                http_response_code(200);
                echo sprintf('Successully verified event with id %s and type %s.', $event->id, $event->type);
                                    
                    $myfile = fopen("coinbase.txt", "a+") or die("Unable to open file!");
                    $txt = $event->id. "\n";
                    fwrite($myfile, $txt);
                    $txt =  $event->id. "\n";
                    fwrite($myfile, $txt);
                    fclose($myfile);

            } catch (\Exception $exception) {
                http_response_code(400);
                echo 'Error occured. ' . $exception->getMessage();
            }
    //     $checkoutData = [
    //         'name' => 'Standard Package',
    //         'description' => '$100 Package for 30% ROI',
    //         'pricing_type' => 'fixed_price',
    //         'local_price' => [
    //             'amount' => '100.00',
    //             'currency' => 'USD'
    //         ],
    //         'requested_info' => ['name', 'email']
    //     ];
    //     try {
    //         $newCheckoutObj = Checkout::create($checkoutData);
    //         echo sprintf("Successfully created new checkout with id: %s \n", $newCheckoutObj->id);
    //     } catch (\Exception $exception) {
    //         echo sprintf("Enable to create checkout. Error: %s \n", $exception->getMessage());
    //     }

    // } 

    public function getAll()
    {
        ApiClient::init('017d2ba9-c847-4476-b12b-d9860941ccc6');
        try {
            $list = Checkout::getList(["limit" => 10]);
            echo sprintf("Successfully got list of checkouts\n");
        
            if (count($list)) {
                echo sprintf("Checkouts in list:\n");
        
                foreach ($list as $checkout) {
                    echo $checkout;
                    echo "<br>";
                    echo "</ br>";
                }
            }
        
            echo sprintf("List's pagination:\n");
            print_r($list->getPagination());
        
            echo sprintf("Number of all checkouts - %s \n", $list->countAll());
        } catch (\Exception $exception) {
            echo sprintf("Enable to get list of checkouts. Error: %s \n", $exception->getMessage());
        }
    }


}
