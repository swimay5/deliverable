<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealFb extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'meal_id',
        'user_id'
        ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function meal(){
        return $this->belongTo(Meal::class);
    }
}