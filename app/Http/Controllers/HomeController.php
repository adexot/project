<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
// use App\User;

class HomeController extends Controller{
    private $user;

    public function __construct(UserRepository $user){
        $this->user = $user;
    }

    public function index(){
        // $user = new User();
        // $name =$this->user->getName('Adekunle');
        $name = \App::getCachedServicesPath();
        return view('home', compact('name'));
    }

}