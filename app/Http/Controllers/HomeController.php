<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\TrainingKind;

class HomeController extends Controller
{
    public function show(){
        return view("home");
    }
    
    public function post(){
        return view('trainings.training');   
    }
    
    public function create(Request $request){
        return view('menu')->with(['date'=>$request['date']]);   
    }
    
    public function menu($date, $menu, TrainingKind $trainingKind){
        if($menu === 'training'){
            return view('Trainings.training')->with(['date'=>$date, 'trainingKind'=>$trainingKind->get()]);
        }
        return view('menu')->with(['date'=>$request['date']]);   
    }
    
}
