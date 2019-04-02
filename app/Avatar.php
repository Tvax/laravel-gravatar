<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'uri', 'default'
    ];


    public function user(){
        return $this->belongsTo(App\User::class);
    }
}
