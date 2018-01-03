<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'ticket_id', 'message'
    ];

    public function ticket()
    {
      return $this->belongsTo('App\Ticket', 'ticket_id');
    }
}
