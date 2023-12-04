<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'date',
        'wake_up_time',
        'bed_time',
        'body_temperature',
        'weight',
        'subjective_score',
        'comment',
        'symptom_id'
        ];
        
    public function user(){
      return $this->belongsTo(User::class);
    }
    public function condition_fb(){
      return $this->hasMany(ConditionFb::class);
    }
    public function condition_detail(){
      return $this->hasMany(ConditionDetail::class);
    }
    public function symptoms(){
      return $this->hasMany(Symptoms::class);
    }
}
