<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }

    public function user()
    {
        return $this->hasOne(\App\TicketUser::class);
    }

    public function responses()
    {
        return $this->hasMany(\App\response::class);
    }
}
