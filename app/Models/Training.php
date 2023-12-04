<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'value',
        'comment',
        'training_kind_id',
        'user_id',
        ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function training_fb(){
        return $this->hasMany(TrainingFb::class);
    }
    
    public function training_detail(){
        return $this->hasMany(TrainingDetail::class);
    }
    
    public function training_kind(){
        return $this->belongsTo(TrainingKind::class);
    }
}
