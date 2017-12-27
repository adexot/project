<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\DB;
use App\Ticket;

class HomeController extends Controller{
    private $user;

    public function __construct(UserRepository $user){
        $this->user = $user;
    }

    public function home(){
        return view('admin.dashboard');
    }

    public function index(){
        $tickets = Ticket::all();  
        // dd($tickets);
        return view('admin.dashboard', compact('tickets'));
    }

    public function show($id){
        $ticket = Ticket::with('comments')->where('id',$id)->firstOrFail();
        $body = $ticket->comments->first();
        return view('admin.show', compact('ticket', 'body'));
    }

    public function pending(){
        $ticket = Ticket::with('comments')->where('state_id',1)->get();
        return view('admin.show', compact('ticket'));
    }

    public function closed(){
        $ticket = Ticket::with('comments')->where('state_id',3)->get();
        return view('admin.show', compact('ticket'));
    }

    public function opened(){
        $ticket = Ticket::with('comments')->where('state_id',2)->get();
        return view('admin.show', compact('ticket'));
    }

    public function front () 
    {
        return view('client.front');
    }

    public function new () 
    {
        return view('client.new_ticket');
    }

    public function existing () 
    {
        return view('client.existing_ticket');
    }

}