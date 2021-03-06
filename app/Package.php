<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Package extends Model
{
    protected $fillable = [
        'name', 'price',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
