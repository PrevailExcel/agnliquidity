<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('country');
            $table->string('gender')->nullable();
            $table->string('image')->nullable();
            $table->string('affiliate_id')->unique();
            $table->unsignedBigInteger('referred_by')->nullable();
            $table->string('act_earnings')->nullable();
            $table->string('ref_earnings')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->boolean('is_validated')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->boolean('have_pop')->default(false);
            $table->string('bank')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bitcoin_add')->nullable();
            $table->string('agricoin_add')->nullable();
            $table->string('payment_code')->nullable();
            $table->boolean('have_shared')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
