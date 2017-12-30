<?php
namespace App\Repositories;

use App\TicketUser;

class TicketUserRepository {
  public function addUser($data)
  {
    $user = TicketUser::where('email', $data['email'])->first();
    if(!empty($user)) return $user;

    $user = new TicketUser;
    $user->email = $data['email'];
    $user->phone =  $data['phone'];
    $user->name = $data['name'];
    $user->save();

    return $user;
  }
}
