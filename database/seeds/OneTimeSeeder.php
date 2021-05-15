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
                'price' => '20'
            ]);
            Package::create([
                'name' => 'Basic',
                'price' => '40'
            ]);
            Package::create([
                'name' => 'Standard',
                'price' => '100'
            ]);
            Package::create([
                'name' => 'Master',
                'price' => '140'
            ]);
            Package::create([
                'name' => 'Elite',
                'price' => '200'
            ]);
            Package::create([
                'name' => 'Ultra',
                'price' => '400'
            ]);
            Package::create([
                'name' => 'Legend',
                'price' => '1000'
            ]);
            Package::create([
                'name' => 'Premium',
                'price' => '2000'
            ]);
            Package::create([
                'name' => 'Ultimate',
                'price' => '4000'
            ]);
            Package::create([
                'name' => 'Deluxe',
                'price' => '10000'
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
