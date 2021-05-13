<?php

namespace App;

use App\Package;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'gender', 'country',  'affiliate_id', 'referred_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function connect(){

        return $this->hasMany(Connect::class, "user_id", "id");
    }
    public function act(){

        return $this->hasOne(Activity::class, "user_id", "id");
    }

    public function myRef(){

        return $this->belongsTo(User::class, 'referred_by', 'affiliate_id' );
    }
    public function myRefs(){

        return $this->hasMany(User::class, 'referred_by', 'affiliate_id' );
    }

}
