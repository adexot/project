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

    public function index(){
        $tickets = Ticket::with('comments')->where('state_id', 1)->get();  
        foreach($tickets as $ticket){
            var_dump($ticket->title);
            echo "<ul>";
            foreach($ticket->comments as $comment){
                echo "<li>$comment->message)</li>";
            }
            echo "</ul>";
        }
        // return view('home', compact('$ticket'));
    }

    public function show($id){
        $ticket = Ticket::with('comments')->where('id',$id)->firstOrFail();
        dd($ticket, count($ticket->comments));

    }

}