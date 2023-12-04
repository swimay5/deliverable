<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;
use App\Models\TrainingKind;
use App\Models\TrainingDetail;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

class TrainingController extends Controller
{
    public function store($date, TrainingKind $training_kind, Request $request ,Event $event, TrainingDetail $trainig_detail)
    {
        $training = new Training();
        $input_kind = $request['training_kind'];
        $input = $request['training'];
    
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input_detail = ['image' => $image_url];
        }else{
            $input_detail = [];
        }
    
        if($input_kind['name'] && isset($input['training_kind_id'])){
            $training_kind->fill($input_kind)->save();
            $input['training_kind_id']=$training_kind->id;
        }else if($input_kind['name']){
            $training_kind->fill($input_kind)->save();
            $input += ['training_kind_id'=>$training_kind->id];
        }
        
        $input += ['user_id'=>Auth::id()];
        $input += ['date'=>$date];
        $training->fill($input)->save();
        
        $input_detail += ['training_id' => $training->id];
        $trainig_detail->fill($input_detail)->save();
        
        $input = [
            'event_title'=>'TRAINING', 
            'start_date'=>$date, 
            'end_date'=>$date, 
            'event_color'=>'#ffadff', 
            'event_border_color'=>'#ffadff', 
            'user_id'=>Auth::id()
            ];
        $event -> fill($input) -> save();
        return redirect('/home');
    }

}
