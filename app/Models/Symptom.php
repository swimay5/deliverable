<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fever',
        'headache',
        'stomach_ache',
        'neck_pain',
        'shoulder_pain',
        'elbow_pain',
        'waist_pain',
        'knee_pain',
        'ankle_pain',
        'wrist_pain',
        'menstruation',
        'others'
        ];
        
    public function condition(){
      return $this->belongsTo(Condition::class);
    }
}
