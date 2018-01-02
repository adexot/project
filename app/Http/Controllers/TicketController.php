<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;

class TicketController extends Controller
{
    public function __construct(TicketRepository $ticket)
    {
      $this->ticket = $ticket;
    }

    public function addTicket(Request $request)
    {
      $ticket = $this->ticket->addNew($request->all());
      return redirect('/ticket/'.$ticket->unique_id);
    }

}
