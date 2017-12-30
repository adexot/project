<?php
namespace App\Repositories;

use App\Ticket;
use App\Repository\TicketUserRepository;

class TicketRepository {
  public function addNew($data)
  {
    // We create the TicketUser first
    $user_data = [
      'email' => $data['email'],
      'name' => $data['name'],
      'phone' => $data['phone'],
    ];

    $userRepo = new TicketUserRepository;
    $user = $userRepo->addUser($user_data);

    // Get the category
    $category = Category::find($data['category_id']);
    $ticket_data = [
      'unique_id' => str_random(36),
      'title' => $data['title'],
      'status' => 'pending',
      'priority' => $data['priority'],
      'description' => $data['description'],
      'category_id' => isset($category->id) ? $category->id : 0,
    ];

    // We create the Ticket
    return Ticket::create($ticket_data);
  }
}
