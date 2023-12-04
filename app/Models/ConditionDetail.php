<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionDetail extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'movie',
        'document',
        'condition_id'
        ];
        
    public function condition(){
      return $this->belongsTo(Condition::class);
    }
}
