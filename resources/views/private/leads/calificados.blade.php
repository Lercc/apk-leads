
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($leads->count() != 0)
                        <div class="table-responsive">
                            <table class="table">
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
                                        <th colspan="2">&nbsp;</th>
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
                                            <td class="text-nowrap">{{ $lead->schedule }}</td>
                                            <td class="text-nowrap">{{ $lead->commentary }}</td>
                                            <td class="text-nowrap">{{ $lead->profile }}</td>
                                            <td>
                                                <a 
                                                    href="{{ route('leads.edit', $lead) }}"
                                                    class="btn btl-sm btn-primary"    
                                                >Editar</a>
                                            </td>
                                            <td>
                                                <form 
                                                    action="{{ route('leads.destroy') }}"
                                                    ></form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
