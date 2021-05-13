<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connect extends Model
{
    protected $table = 'user_package_payment';

    protected $fillable = ['user_id', 'package_id', 'payment_id'];
}
