<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealTime extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'breakfast',
        'lunch',
        'dinner',
        'snack'
        ];
        
    public function meal(){
        return $this->belongsTo(Meal::class);
    }
}
