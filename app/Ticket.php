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
      return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'ticket_id');
    }

    public function user()
    {
        return $this->belongsTo('App\TicketUser');
    }

    public function response()
    {
        return $this->hasOne('App\Response');
    }
}
