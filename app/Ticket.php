<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //

    public function comments(){
        return $this->hasMany(\App\Comment::class);
    }

    public function users(){
        return $this->hasOne(\App\User::class);
    }

    public function response(){
        return $this->hasMany(\App\response::class);
    }
}
