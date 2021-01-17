<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Institution;
use App\Models\Program;

class PageController extends Controller
{
   public function createLead()
   {
      $careers = Career::all(); 
      $institutions = Institution::all(); 
      $programs = Program::all(); 

        return view('public.leads.create', compact('careers', 'institutions', 'programs'));
   }
}
