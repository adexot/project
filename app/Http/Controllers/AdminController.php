<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use Redirect;
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
        $data['comments'] = $data['ticket']->comments()->orderBy('created_at', 'desc')->get();
        return view('admin.show', $data);
    }


    public function pending()
    {
        return view('admin.show', compact('ticket'));
    }

    public function closed()
    {
        return view('admin.show', compact('ticket'));
    }

    public function opened()
    {
        return view('admin.show', compact('ticket'));
    }

    public function addComment(Request $request)
    {
      $comment = $this->ticket->addComment($request->all());
      return redirect()->back()->with('message', 'Comment Added Successfully.');
    }

    public function markResponse(Request $request)
    {
      $resp = $this->ticket->addResponse(['ticket_id' => $request->ticket_id, 'comment_id' => $request->comment_id]);
      if($resp){
        return redirect()->back()->with('message', 'Comment marked as Response Successfully.');
      }

    }
}
