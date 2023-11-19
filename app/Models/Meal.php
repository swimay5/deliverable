<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'time',
        'red_ingredient',
        'yellow_ingredient',
        'green_ingredient',
        'comment'
        ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function meal_fb(){
        return $this->hasMany(MealFb::class);
    }
    
    public function meal_detail(){
        return $this->hasMany(MealDetail::class);
    }
    
    public function meal_time(){
        return $this->hasMany(MealTime::class);
    }
}
