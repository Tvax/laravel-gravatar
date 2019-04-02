<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
    */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];

    public function mails(){
        return $this->hasMany(Mail::class);
    }

    public function avatars(){
        return $this->hasMany(Avatar::class);
    }
}
