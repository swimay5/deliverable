<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'movie',
        'document',
        'meal_id'
        ];
        
    public function meal(){
        return $this->belongsTo(Meal::class);
    }
}
