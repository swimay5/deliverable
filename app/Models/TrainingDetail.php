<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingDetail extends Model
{
    use HasFactory;
    
    public function trainings(){
        return $this->belongsTo(Training::class);
    }
}
