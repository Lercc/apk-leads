<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    
    public function indexCalificados()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'calificados')
            ->with('program', 'institution', 'career')
            ->get();
        return view('private.leads.calificados', compact('leads'));
    }
    
}
