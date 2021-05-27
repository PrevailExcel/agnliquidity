<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use App\Package;
use App\PaymentMethod;
use Illuminate\Support\Facades\DB;


class OneTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@agnliquidity.com',
            'password' => bcrypt('@AgnLiquidity2021'),
            'affiliate_id' => '109999999',
            'phone' => '08091827374',
            'country' => 'Nigeria'
        ]);
        if ($createAdmin) {
            DB::table('roles')->insert([
                'name' => 'superadmin',
                'guard_name' => 'web'
            ]);
            DB::table('roles')->insert([
                'name' => 'writer',
                'guard_name' => 'web'
            ]);
            DB::table('model_has_roles')->insert([
                'role_id' => 1,
                'model_type' => 'App\User',
                'model_id' => 1
            ]);
            DB::table('model_has_roles')->insert([
                'role_id' => 2,
                'model_type' => 'App\User',
                'model_id' => 1
            ]);

            Post::create([
                'title' => 'This is the default post',
                'postbody' => "I would have used lorem postem, but I'll keep this simple and short.
                                you have to delete this post immediately you login and create a new one. There must be
                                a sponsored post available at all times. alright, goodbye.",
                'image' => 'default.jpg',
            ]);

            
            Package::create([
                'name' => 'Starter',
                'price' => '20',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/95da7f03-b8b7-4001-b48d-1c8dc9d7c2ff'
            ]);
            Package::create([
                'name' => 'Basic',
                'price' => '40',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/8084940b-3827-4226-8281-0656664fba90'
            ]);
            Package::create([
                'name' => 'Standard',
                'price' => '100',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/57b4fccd-1bf3-4b6d-a19e-4200862e1e1d'
            ]);
            Package::create([
                'name' => 'Master',
                'price' => '140',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/6dc3e9f1-5a6e-4ae6-a400-fd7f39b468c4'
            ]);
            Package::create([
                'name' => 'Elite',
                'price' => '200',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/4e0badc5-ba8e-47ae-94ee-ef5e0d7766f8'
            ]);
            Package::create([
                'name' => 'Ultra',
                'price' => '400',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/50345db2-36a0-463a-9905-c2d07dd1770b'
            ]);
            Package::create([
                'name' => 'Legend',
                'price' => '1000',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/882dca6b-0e7c-424b-9218-e548d0243603'
            ]);
            Package::create([
                'name' => 'Premium',
                'price' => '2000',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/0bda17e8-9f80-4da2-a8d0-f923fc8a6d11'
            ]);
            Package::create([
                'name' => 'Ultimate',
                'price' => '4000',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/ddb1a6d6-e3ec-4e72-9d63-f3cae453e64a'
            ]);
            Package::create([
                'name' => 'Deluxe',
                'price' => '10000',
                'coinbase_link' => 'https://commerce.coinbase.com/checkout/1bd2673e-6a30-4485-bc25-1e4d5c33db3d'
            ]);

            
            PaymentMethod::create([
                'name' => 'Naira',
                'roi' => 30
            ]);
            PaymentMethod::create([
                'name' => 'Bitcoin',
                'roi' => 30
            ]);
            PaymentMethod::create([
                'name' => 'Agricoin',
                'roi' => 50
            ]);
                }

    }
}
