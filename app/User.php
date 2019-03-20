<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

    public function mails(){
        return $this->hasMany(Mail::class);
    }

    public function avatars(){
        return $this->hasMany(Avatar::class);
    }
}
