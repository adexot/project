<?php
namespace App\Repositories;

use App\Ticket;
use App\Category;
use App\Repositories\TicketUserRepository;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

class TicketRepository {
  public function addNew($data)
  {
    // We create the TicketUser first
    $user_data = [
      'email' => $data['email'],
      'name' => $data['owner'],
      'phone' => $data['phone'],
    ];

    $userRepo = new TicketUserRepository;
    $user = $userRepo->addUser($user_data);

    // Get the category
    $category = Category::find($data['category']);
    $ticket_data = [
      'user_id' => $user->id,
      'unique_id' => $this->genUuid(),
      'title' => $data['title'],
      'status' => 'pending',
      'priority' => $data['priority'],
      'description' => $data['description'],
      'category_id' => isset($category->id) ? $category->id : 0,
    ];
    // We create the Ticket
    return Ticket::create($ticket_data);
  }

  public function getTicketByUniqueId($unique_id)
  {
    $ticket = Ticket::with('comments')->where('unique_id', $unique_id)->firstOrFail();
    return $ticket;
  }

  public function getAllInfo()
  {
    $data['tickets'] = Ticket::where('status', 'pending')->get();
    $data['pending'] = Ticket::where('status', 'pending')->count();
    $data['opened'] = Ticket::where('status', 'opened')->count();
    $data['closed'] = Ticket::where('status', 'closed')->count();

    return $data;
  }

  public function addComment($data)
  {
    $ticket = Ticket::where('id', $data['ticket_id'])->with('comments')->first();
    // Email is sent to the user as soon as this comment is created
    return $ticket->comments()->create([
      'ticket_id' => $data['ticket_id'],
      'message' => $data['message'],
    ]);
  }

  public function addResponse($data)
  {
    $ticket = Ticket::where('id', $data['ticket_id'])->first();
    $response = $ticket->response()->where('ticket_id', $data['ticket_id'])->update($data);
    if($response == 0) $response = $ticket->response()->where('ticket_id', $data['ticket_id'])->create($data);
    return $response;
  }


  private function genUuid($length = 36)
  {
      return $uuid = Uuid::uuid5(Uuid::NAMESPACE_DNS, str_random(5));
  }
}
