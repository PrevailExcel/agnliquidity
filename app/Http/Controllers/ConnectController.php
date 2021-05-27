<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CoinbaseCommerce\ApiClient;
use CoinbaseCommerce\Resources\Checkout;
use CoinbaseCommerce\Resources\Charge;


class ConnectController extends Controller
{
    public function index()
    {
        
        ApiClient::init('017d2ba9-c847-4476-b12b-d9860941ccc6');
        $checkoutData = [
            'name' => 'Standard Package',
            'description' => '$100 Package for 30% ROI',
            'pricing_type' => 'fixed_price',
            'local_price' => [
                'amount' => '100.00',
                'currency' => 'USD'
            ],
            'requested_info' => ['name', 'email']
        ];
        try {
            $newCheckoutObj = Checkout::create($checkoutData);
            echo sprintf("Successfully created new checkout with id: %s \n", $newCheckoutObj->id);
        } catch (\Exception $exception) {
            echo sprintf("Enable to create checkout. Error: %s \n", $exception->getMessage());
        }

    } //0.26144813

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
