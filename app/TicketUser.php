<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketUser extends Model
{
    protected $table = 'ticket_users';

    public function tickets()
    {
      return $this->hasMany('App\Ticket');
    }
}
