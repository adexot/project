<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Repositories\TicketRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Ticket;
use App\Category;

class ExternalPagesController extends Controller {
    private $user;

    public function __construct(UserRepository $user, TicketRepository $ticket){
        $this->user = $user;
        $this->ticket = $ticket;
    }

    public function home() {
        return view('admin.dashboard');
    }

    public function index(){
        $tickets = Ticket::all();
        // dd($tickets);
        return view('admin.dashboard', compact('tickets'));
    }

    

    public function getTicket($unique_id)
    {
        $ticket = $this->ticket->getTicketByUniqueId($unique_id);
        $body = $ticket->comments->first();
        return view('client.new-ticket-details', compact('ticket', 'body'));
    }

    public function pending(){
        $ticket = Ticket::with('comments')->where('state_id',1)->get();
        return view('admin.show', compact('ticket'));
    }

    public function closed() {
        $ticket = Ticket::with('comments')->where('state_id',3)->get();
        return view('admin.show', compact('ticket'));
    }

    public function opened() {
        $ticket = Ticket::with('comments')->where('state_id',2)->get();
        return view('admin.show', compact('ticket'));
    }

    public function front ()
    {
        return view('client.front');
    }

    public function new()
    {
        $data['categories'] = Category::all();
        return view('client.new_ticket', $data);
    }

    public function existing()
    {
        return view('client.existing_ticket');
    }

}
