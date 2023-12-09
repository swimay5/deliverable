<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\TrainingKind;
use App\Models\Training;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function show(){
        return view("home");
    }
    
    public function create(Request $request){
        return view('menu')->with(['date'=>$request['date']]);   
    }
    
    public function displayT(Request $request, TrainingKind $trainingKind){
        $id = $request['id'];
        $event = Event::find($id);
        $date = $event->start_date;
        $training = Training::where('user_id', Auth::id())->where('date', $date.' 00:00:00')->first();
        
        return view('Trainings.edit')->with(['date'=>$date, 'training'=>$training, 'trainingKind'=>$trainingKind->get()]);
    }
    
    public function displayM(Request $request, Meal $meal){
        $id = $request['id'];
        $event = Event::find($id);
        $date = $event->start_date;
        $meal = Meal::where('user_id', Auth::id())->where('date', $date.' 00:00:00')->first();
        
        return view('Meals.edit')->with(['date'=>$date, 'meal'=>$meal->get()]);
    }
    
    public function menu($date, $menu, TrainingKind $trainingKind){
        if($menu === 'training'){
            return view('Trainings.training')->with(['date'=>$date, 'trainingKind'=>$trainingKind->get()]);
        }else if($menu === 'meal'){
            return view('Meals.meal')->with(['date'=>$date]);
        }else if($menu === 'condition'){
            return view('Conditions.condition')->with(['date'=>$date]);
        }
    }
    
}
