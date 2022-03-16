<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function criar(){
        return view('events.criar');
    }

    public function entrar(){
        return view('events.entrar');
    }

    public function cadastrar(){
        return view('events.cadastrar');
    }
}
