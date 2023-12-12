<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;
use App\Models\ConditionFb;
use App\Models\ConditionDetail;
use App\Models\Symptom;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

class ConditionController extends Controller
{
    public function store($date, Request $request, Event $event, ConditionDetail $condition_detail)
    {
        $condition = new Condition();
        $input = $request['conditions'];
        
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input_detail = ['image' => $image_url];
        }
        
        //$condition->fill([
        //    ''
        //    ])->save();
        
        $input = [
            'event_title'=>'CONDITION', 
            'start_date'=>$date, 
            'end_date'=>$date, 
            'event_color'=>'#6EE7B7', 
            'event_border_color'=>'#6EE7B7', 
            'user_id'=>Auth::id()
            ];
        $event -> fill($input) -> save();
        return redirect('/home');
    }
}
