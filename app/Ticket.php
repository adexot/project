<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'unique_id',
        'user_id',
        'title',
        'status',
        'priority',
        'description',
        'category_id'
    ];

    public function category()
    {
      return $this->hasOne('App\Category', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'ticket_id');
    }

    public function user()
    {
        return $this->hasOne('App\TicketUser', 'id');
    }

    public function response()
    {
        return $this->hasOne('App\Response', 'ticket_id');
    }
}
