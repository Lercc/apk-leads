<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function createLead()
   {
        return view('public.leads.create');
   }
}
