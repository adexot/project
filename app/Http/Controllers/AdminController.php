<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\Repositories\TicketRepository;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TicketRepository $ticket)
    {
        $this->ticket = $ticket;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = $this->ticket->getAllInfo();
      return view('admin.dashboard', $data);
    }


    public function show($unique_id)
    {
        $data['ticket'] = $this->ticket->getTicketByUniqueId($unique_id);
        //$ticket = Ticket::with('comments')->where('unique_id',$id)->firstOrFail();
        //$body = $ticket->comments->first();
        return view('admin.show', $data); //compact('ticket', 'body'));
    }
}
