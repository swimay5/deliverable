<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionFb extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'condition_id',
        'user_id'
        ];
        
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function meal(){
        return $this->belonsTo(Condition::class);
    }
}
