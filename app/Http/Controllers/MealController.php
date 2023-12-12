<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\MealTime;
use App\Models\MealFb;
use App\Models\MealDetail;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

class MealController extends Controller
{
    public function store($date, Request $request, Event $event, MealDetail $meal_detail)
    {
        $event_flag = true;
        $input = $request['meals'];
        
        //dd($date.' '.$input['breakfast_time']);
        
        if($input['breakfast_time'] || $input['breakfast_red_ingredient'] || $input['breakfast_yellow_ingredient'] || $input['breakfast_green_ingredient']){
            $meal_time = new MealTime();
            $meal_time->fill(['meal_kind'=>0,'user_id'=>Auth::id()])->save();
            
            $meals = new Meal();
            $meals->fill([
                'date_time'=>$date.' '.$input['breakfast_time'], 
                'red_ingredient'=>$input['breakfast_red_ingredient'],
                'yellow_ingredient'=>$input['breakfast_yellow_ingredient'],
                'green_ingredient'=>$input['breakfast_green_ingredient'],
                'meal_time_id'=>$meal_time->id
                ])->save();
                
            if($request->file('breakfast_image')){ //画像ファイルが送られた時だけ処理が実行される
                $image_url = Cloudinary::upload($request->file('breakfast_image')->getRealPath())->getSecurePath();
                $meal_detail = new MealDetail();
                $meal_detail->fill(['image'=>$image_url,'meal_id'=>$meals->id])->save();
            }
                
            if($event_flag){
                $event->fill([
                    'event_title'=>'MEAL',
                    'start_date'=>$date,
                    'end_date'=>$date,
                    'event_color'=>'#60A5FA',
                    'event_border_color'=>'#60A5FA',
                    'user_id'=>Auth::id()
                    ])->save();
                    
                $event_flag = false;
            }
        }
        
        if($input['lunch_time'] || $input['lunch_red_ingredient'] || $input['lunch_yellow_ingredient'] || $input['lunch_green_ingredient']){
            $meal_time = new MealTime();
            $meal_time->fill(['meal_kind'=>1,'user_id'=>Auth::id()])->save();
            
            $meals = new Meal();
            $meals->fill([
                'date_time'=>$date.' '.$input['lunch_time'], 
                'red_ingredient'=>$input['lunch_red_ingredient'],
                'yellow_ingredient'=>$input['lunch_yellow_ingredient'],
                'green_ingredient'=>$input['lunch_green_ingredient'],
                'meal_time_id'=>$meal_time->id
                ])->save();
                
            if($request->file('lunch_image')){ //画像ファイルが送られた時だけ処理が実行される
                $image_url = Cloudinary::upload($request->file('lunch_image')->getRealPath())->getSecurePath();
                $meal_detail = new MealDetail();
                $meal_detail->fill(['image'=>$image_url,'meal_id'=>$meals->id])->save();
            }
                
            if($event_flag){
                $event->fill([
                    'event_title'=>'MEAL',
                    'start_date'=>$date,
                    'end_date'=>$date,
                    'event_color'=>'#60A5FA',
                    'event_border_color'=>'#60A5FA',
                    'user_id'=>Auth::id()
                    ])->save();
                    
                $event_flag = false;
            }
        }
        
        
        if($input['dinner_time'] || $input['dinner_red_ingredient'] || $input['dinner_yellow_ingredient'] || $input['dinner_green_ingredient']){
            $meal_time = new MealTime();
            $meal_time->fill(['meal_kind'=>2,'user_id'=>Auth::id()])->save();
            
            $meals = new Meal();
            $meals->fill([
                'date_time'=>$date.' '.$input['dinner_time'], 
                'red_ingredient'=>$input['dinner_red_ingredient'],
                'yellow_ingredient'=>$input['dinner_yellow_ingredient'],
                'green_ingredient'=>$input['dinner_green_ingredient'],
                'meal_time_id'=>$meal_time->id
                ])->save();
                
            if($request->file('dinner_image')){ //画像ファイルが送られた時だけ処理が実行される
                $image_url = Cloudinary::upload($request->file('dinner_image')->getRealPath())->getSecurePath();
                $meal_detail = new MealDetail();
                $meal_detail->fill(['image'=>$image_url,'meal_id'=>$meals->id])->save();
            }
                
            if($event_flag){
                $event->fill([
                    'event_title'=>'MEAL',
                    'start_date'=>$date,
                    'end_date'=>$date,
                    'event_color'=>'#60A5FA',
                    'event_border_color'=>'#60A5FA',
                    'user_id'=>Auth::id()
                    ])->save();
                    
                $event_flag = false;
            }
        }
        
        if($input['snack_time'] || $input['snack_red_ingredient'] || $input['snack_yellow_ingredient'] || $input['snack_green_ingredient']){
            $meal_time = new MealTime();
            $meal_time->fill(['meal_kind'=>3,'user_id'=>Auth::id()])->save();
            
            $meals = new Meal();
            $meals->fill([
                'date_time'=>$date.' '.$input['snack_time'], 
                'red_ingredient'=>$input['snack_red_ingredient'],
                'yellow_ingredient'=>$input['snack_yellow_ingredient'],
                'green_ingredient'=>$input['snack_green_ingredient'],
                'meal_time_id'=>$meal_time->id
                ])->save();
                
            if($request->file('snack_image')){ //画像ファイルが送られた時だけ処理が実行される
                $image_url = Cloudinary::upload($request->file('snack_image')->getRealPath())->getSecurePath();
                $meal_detail = new MealDetail();
                $meal_detail->fill(['image'=>$image_url,'meal_id'=>$meals->id])->save();
            }
                
            if($event_flag){
                $event->fill([
                    'event_title'=>'MEAL',
                    'start_date'=>$date,
                    'end_date'=>$date,
                    'event_color'=>'#60A5FA',
                    'event_border_color'=>'#60A5FA',
                    'user_id'=>Auth::id()
                    ])->save();
                    
                $event_flag = false;
            }
        }
        return redirect('/home');
    }

}
