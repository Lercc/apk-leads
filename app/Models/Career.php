<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public function leads()
    {
        // una carrera tiene muchos leads
        // 1 ---------------------> *
        
        // un lead tiene una carrera 
        // 1 <--------------------- 1
        return $this->hasMany(Lead::class);
    }
}
