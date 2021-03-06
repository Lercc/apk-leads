
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">TABLA INGLÉS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if ($leads->count() != 0)
                        <div class="table-responsive">
                            <table class="table" style="min-height: 250px">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>DNI</th>
                                        <th>NOMBRES</th>
                                        <th>APELLIDOS</th>
                                        <th>CELULAR</th>
                                        <th>CORREO</th>
                                        <th>CARRERA</th>
                                        <th>SEMESTRE</th>
                                        <th class="text-nowrap">UNIVERSIDAD / INSTITUTO</th>
                                        <th>INGLÉS</th>
                                        <th>PROGRAMA</th>
                                        <th>COMUNICACIÓN</th>
                                        <th>HORARIO</th>
                                        <th>COMENTARIOS</th>
                                        <th>PERFIL</th>
                                        <th colspan="1">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($leads as $lead)
                                        <tr>
                                            <td>{{ $lead->id }}</td>
                                            <td>{{ $lead->dni }}</td>
                                            <td class="text-nowrap">{{ $lead->name }}</td>
                                            <td class="text-nowrap">{{ $lead->surnames }}</td>
                                            <td>{{ $lead->mobile }}</td>
                                            <td>{{ $lead->email }}</td>
                                            <td class="text-nowrap">{{ $lead->career->name }}</td>
                                            <td class="text-nowrap">{{ $lead->semester }}</td>
                                            <td class="text-nowrap">{{ $lead->institution->name }}</td>
                                            <td>{{ $lead->english_level }}</td>
                                            <td class="text-nowrap">{{ $lead->program->name }}</td>
                                            <td class="text-nowrap">{{ $lead->communication_channel }}</td>
                                            <td class="text-nowrap">{{ $lead->schedule_duration }}</td>
                                            <td class="text-nowrap">{{ $lead->commentary }}</td>
                                            <td class="text-nowrap">{{ $lead->profile }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                                        &#x2022;&#x2022;&#x2022;
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <form 
                                                            action="{{ route('leads.updateAceptedTable', $lead) }}" method="POST"">
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="dropdown-item">
                                                                Enviar a <b>PERFILES ACEPTADOS</b>
                                                            </button>
                                                        </form>
                                                        <form 
                                                            action="{{ route('leads.updateAgeTable', $lead) }}" method="POST" >
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="dropdown-item">
                                                                Enviar a <b>EDAD</b>
                                                            </button>
                                                        </form>
                                                        <form 
                                                            action="{{ route('leads.updateQualifiedTable', $lead) }}" method="POST" >
                                                            @csrf
                                                            @method('PUT')
                                                            <button class="dropdown-item">
                                                                Enviar a <b>CALIFICADOS</b>
                                                            </button>
                                                        </form>
                                                        <hr class="dropdown-divider"></li>
                                                        <a class="dropdown-item text-primary " href="{{ route('leads.edit', $lead) }}">Editar</a>
                                                        <form 
                                                            action="{{ route('leads.destroy', $lead) }}" method="POST" class="dropdown-item">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input 
                                                                type="submit" 
                                                                value="Eliminar" 
                                                                class="text-danger text-left border-0 bg-transparent p-0 w-100"
                                                                onclick="return confirm('¿Estás seguro de eliminar este registro?')"
                                                            >
                                                        </form>
                                                    </div>
                                                  </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4">
                            {{ $leads->links('pagination::bootstrap-4') }}
                        </div>
                    @else
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>No existen registros en esta tabla.</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
