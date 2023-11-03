<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //calender
    public function show(){
        return view("calendars.calendar");
    }
    
}
