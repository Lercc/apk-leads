<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    public function leads()
    {
        // una institución tiene muchos leads
        // 1 ---------------------> *
        
        // un lead tiene una institución 
        // 1 <--------------------- 1
        return $this->hasMany(Lead::class);
    }
}
