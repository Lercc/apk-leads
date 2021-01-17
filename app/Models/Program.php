<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function leads()
    {
        // un programa tiene muchos leads
        // 1 ---------------------> *
        
        // un lead tiene un programa 
        // 1 <--------------------- 1
        return $this->hasMany(Lead::class);
    }
}
