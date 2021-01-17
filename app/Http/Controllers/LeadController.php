<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    /**
     * INDEX
     */
    public function indexCalificados()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'calificados')
            ->orderBy('id','desc')
            ->with('program', 'institution', 'career')
            ->paginate(10);
        return view('private.leads.calificados', compact('leads'));
    }
    public function indexAceptados()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'aceptados')
            ->orderBy('id','desc')
            ->with('program', 'institution', 'career')
            ->paginate(10);
        return view('private.leads.aceptados', compact('leads'));
    }
    public function indexEdad()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'edad')
            ->orderBy('id','desc')
            ->with('program', 'institution', 'career')
            ->paginate(10);
        return view('private.leads.edad', compact('leads'));
    }
    public function indexIngles()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'ingles')
            ->orderBy('id','desc')
            ->with('program', 'institution', 'career')
            ->paginate(10);
        return view('private.leads.ingles', compact('leads'));
    }
    
    /**
     * EDIT UPDATE GENERAL
     */
    public function edit(Lead $lead)
    {
        return dd($lead->all());
    }
    public function update(Request $request, Lead $lead)
    {
        return dd($lead);
    }

    
    /**
     * UPDATE
     */
    public function updateQualifiedTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'calificados';
        $lead->save();

        return back();
    }
    public function updateAceptedTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'aceptados';
        $lead->save();

        return back();
    }
    public function updateAgeTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'edad';
        $lead->save();

        return back();
    }
    public function updateEnglishTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'ingles';
        $lead->save();

        return back();
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return back();
    }
    
}
