<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    use HasFactory;
    
    protected $table = 'meal_time';
    
    protected $fillable = [
        'meal_kind',
        'user_id',
        ];
        
    public function meal(){
        return $this->belongsTo(Meal::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
