<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::get();
        
        return view('event.index', [
            'events' => $events,
        ]);
    }

    public function item($id){
        $event = Event::findOrFail($id);
        
        return view('event.item', [
            'event' => $event,
        ]);
    }
}
