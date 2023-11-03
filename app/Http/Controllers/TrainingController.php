<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\TrainingKind;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class TrainingController extends Controller
{
    public function show()
{
    return view('trainings.training');
}
    public function create()
{
    return view('trainings.training-create');
}

    public function store($date, Training $training, TrainingKind $training_kind, Request $request ,Event $event)
{
    $input_kind = $request['training_kind'];
    $input = $request['training'];
    
    if($input_kind['name'] && isset($input['training_kind_id'])){
        $training_kind->fill($input_kind)->save();
        $input['training_kind_id']=$training_kind->id;
    }else if($input_kind['name']){
        $training_kind->fill($input_kind)->save();
        $input += ['training_kind_id'=>$training_kind->id];
    }
    $input +=['user_id'=>Auth::id()];
    $input +=['date'=>$date];
    $training->fill($input)->save();
    
    $input = ['event_title'=>'TRAINING', 'start_date'=>$date, 'end_date'=>$date, 'event_color'=>'pink', 'event_border_color'=>'pink', 'user_id'=>Auth::id()];
    $event -> fill($input) -> save();
    return redirect('/home');
}

}
