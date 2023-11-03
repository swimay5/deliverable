<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingKind extends Model
{
    use HasFactory;
    
    protected $table='training_kind';
    protected $fillable = ['name'];
    public function trainings(){
        return $this->hasMany(Training::class);
    }
}
