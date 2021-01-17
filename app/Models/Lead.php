<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'surnames',
        'mobile',
        'email',
        'career_id',
        'semester',
        'institution_id',
        'english_level',
        'program_id',
        'communication_channel',
        'schedule_start',
        'schedule_end',
        'commentary',
        'profile',
        'pipeline_dispatch',
        'table_name',
        'career_id',
        'institution_id',
        'program_id'
    ];

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

    public function getScheduleDurationAttribute(){

        $start = $this->schedule_start;
        $end = $this->schedule_end;

        if ($start > 12) {
            $new_start = $start - 12;
            $new_start = "$new_start pm.";
        } elseif ($start == 12) {
            $new_start = "$start pm.";
        } else {
            $new_start = "$start am.";
        }

        if ($end > 12) {
            $new_end = $end - 12;
            $new_end = "$new_end pm.";
        } elseif ($end == 12) {
            $new_end = "$end pm.";
        } else {
            $new_end = "$end am.";
        }

        return  "$new_start - $new_end ";
    }
}
