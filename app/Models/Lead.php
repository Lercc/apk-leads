<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    public function program()
    {
        // un lead pertenece a un programa
        // 1 ---------------------> 1
        
        // un programa tiene muchos leads 
        // * <--------------------- 1
        return $this->belongsTo(Program::class);
    }

    public function institution()
    {
        // un lead pertenece a un programa
        // 1 ---------------------> 1
        
        // un programa tiene muchos leads 
        // * <--------------------- 1
        return $this->belongsTo(Institution::class);
    }
   
    public function career()
    {
        // un lead pertenece a una carrera
        // 1 ---------------------> 1
        
        // una carrera tiene muchos leads 
        // * <--------------------- 1
        return $this->belongsTo(Career::class);
    }
}
