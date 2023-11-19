<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingDetail extends Model
{
    use HasFactory;
    
    protected $table = 'training_detail';
    
    protected $fillable = [
        'image',
        'training_id'
    ];
    public function trainings(){
        return $this->belongsTo(Training::class);
    }
}
