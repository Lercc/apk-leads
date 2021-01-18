<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LeadRequest;
use App\Models\Career;
use App\Models\Institution;
use App\Models\Lead;
use App\Models\Program;

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
            ->with(['program', 'institution', 'career'])
            ->paginate(10);
        return view('private.leads.calificados', compact('leads'));
    }
    public function indexAceptados()
    {
        $leads = Lead::where('table_name', '=', 'aceptados')
            ->orderBy('id','desc')
            ->with(['program', 'institution', 'career'])
            ->paginate(10);

        $pipeline = 'todos';

        return view('private.leads.aceptados', compact('leads','pipeline'));
    }
    public function indexAceptadosEnviado()
    {
        $leads = Lead::where([
            ['table_name', '=', 'aceptados'],
            ['pipeline_dispatch', '=', 'si'],
            ])
            ->orderBy('id','desc')
            ->with(['program', 'institution', 'career'])
            ->paginate(10);

        $pipeline = 'si';

        return view('private.leads.aceptados', compact('leads','pipeline'));
    }
    public function indexAceptadosNoEnviado()
    {
        $leads = Lead::where([
            ['table_name', '=', 'aceptados'],
            ['pipeline_dispatch', '=', 'no'],
            ])
            ->orderBy('id','desc')
            ->with(['program', 'institution', 'career'])
            ->paginate(10);
        
        $pipeline = 'no';

        return view('private.leads.aceptados', compact('leads','pipeline'));
    }
    public function indexEdad()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'edad')
            ->orderBy('id','desc')
            ->with(['program', 'institution', 'career'])
            ->paginate(10);
        return view('private.leads.edad', compact('leads'));
    }
    public function indexIngles()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'ingles')
            ->orderBy('id','desc')
            ->with(['program', 'institution', 'career'])  // (carga ansiosa)(eager loading) - las relaciones se cargan junto con el modelo principal
            ->paginate(10);
        return view('private.leads.ingles', compact('leads'));
    }
    
    /**
     * EDIT AND UPDATE GENERAL
     */
    public function edit(Lead $lead)
    {
        $careers = Career::all();
        $institutions = Institution::all();
        $programs = Program::all();

        // Recibimos por parámetro la variable $lead con sus respectivas relaciones, pero
        // Como es pasado por parametro se realiza una autoconsulta y no se cargaron las relaciones:
        // return dd($lead);

        // para este caso podemos usar la carga (ansiosa perezosa) (Lazy Eager Loading)
        // el cual se realiza después de la consulta, cuando esta a sido alojada en una variable:

        // comentado porque defiinimos en el modelo Lead que siempre se cargue la relacion con 'career'
        // protected $with = ['career'];
        // $lead->load('career');

        //carga de relacion por lazy eager loading
        $lead->load('program');

        // carga de relación solo cuando aún no se ha cargado
        $lead->loadMissing('institution');  // -> recomendado a usar cuando el objeto se pasa por parametro, asi la relacion se cargará si esque no se ha cargado
 
        // return dd($lead);

        return view('private.leads.edit', compact('lead', 'careers', 'institutions', 'programs'));
    }

    public function update(Request $request, Lead $lead)
    {
        $more_rules = [
                'name'                      => ['required', 'string', 'max:40'],
                'surnames'                  => ['required', 'string', 'max:60'],
                'mobile'                    => ['required', 'digits:9', 'numeric'],
                'career_id'                 => ['required'],
                'semester'                  => ['required', 'string', 'max:9'],
                'institution_id'            => ['required'],
                'english_level'             => ['required', 'string', 'max:20'],
                'program_id'                => ['required'],
                'communication_channel'     => ['required', 'string', 'max:20'],
                'schedule_start'            => ['required', 'min:1', 'max:11', 'numeric'],
                'schedule_start_meridiem'   => ['required', 'string', 'max:2'],
                'schedule_end'              => ['required', 'min:1', 'max:11', 'numeric'],
                'schedule_end_meridiem'     => ['required', 'string', 'max:2'],

                'commentary'                => ['nullable'],
                'profile'                   => ['nullable'],
        ];

        // TRIGGER: cambio en DNI 
        if($request->dni == $lead->dni){
            $rules = ['dni' => ['required','digits:8', 'numeric']];

            if($request->email == $lead->email){
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255']];
           
            } else if ($request->email != $lead->email) {
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255', 'unique:leads,email']];
                
            }

            $rules = $rules + $more_rules;
            $this->validate($request,$rules);
        
        } else if($request->dni != $lead->dni) {
            $rules = [ 'dni' => ['required','digits:8', 'numeric', 'unique:leads,dni']];

            if($request->email != $lead->email){
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255', 'unique:leads,email']];
            
            } else if($request->email == $lead->email){
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255']];
            }
            $rules = $rules + $more_rules;
            $this->validate($request,$rules);
        }

        // return dd($request->all());
        $lead->update($request->all());
        return back()->with('status','Registro actualizado correctamente.');
    }

    
    /**
     * UPDATE PARTICULARS
     */
    public function updateQualifiedTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'calificados';
        $lead->save();

        return back()->with('status','Registro enviado correctamente a la TABLA CALIFICADOS');
    }
    public function updateAceptedTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'aceptados';
        $lead->save();

        return back()->with('status','Registro enviado correctamente a la TABLA PERFILES ACEPTADOS');
    }
    public function updatePipeline(Request $request, Lead $lead, $pPipe)
    {
        // dd($pPipe);

        $lead->update($request->all());
        $lead->pipeline_dispatch = $pPipe;
        $lead->save();

        if($pPipe == 'si') {
            return back()->with('status','El estado del registro fue cambiado a ENVIADO');
        } else {
            return back()->with('status','El estado del registro fue cambiado a NO ENVIADO');
        }
    }
    public function updateAgeTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'edad';
        $lead->save();

        return back()->with('status','Registro enviado correctamente a la TABLA EDAD');
    }
    public function updateEnglishTable(Request $request, Lead $lead)
    {
        $lead->update($request->all());
        $lead->table_name = 'ingles';
        $lead->save();

        return back()->with('status','Registro enviado correctamente a la TABLA INGLÉS');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return back();
    }
    
    /**
     * Store no protegido por el middleware auth
     */
    public function store(LeadRequest $request)
    {
        // dd($request->validated());
        // $lead = Lead::save($request->validated());
        // $post->update($request->validated());
        $lead = new Lead($request->validated());
        $lead->pipeline_dispatch = 'no';
        $lead->table_name = 'calificados';
        $lead->save();

        return back()->with('status','Registro realizado correctamente.');
        // dd($lead);
        // $lead->update($request->validated);

    }     
}
