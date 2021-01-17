@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo Registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- MOSTRAR ERROES DE INPUTS FORMA - I ERRORES GLOBALES --}}
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                             {{-- {{ dd($errors->all()) }} --}}
                             {{-- {{ dd($errors->messages()['career_id']) }} --}}
                            Verifica los campos del formulario.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    
                    {{-- MOSTRAR ERROES DE INPUTS FORMA - II ERRORES PARTICULARES --}}
                    {{-- @error('career_id')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{$message}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror --}}
                        
                    <form action="{{ route('leads.store') }}" method="POST"
                    >
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dni">DNI *</label>
                                <input type="number" name="dni" class="form-control @error('dni') is-invalid @enderror" placeholder="Ingese su número de dni" value="{{old('dni')}}">
                                @error('dni')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre *</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ingese sus nombres" value="{{old('name')}}">
                                @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="surnames">Apellidos *</label>
                                <input type="text" name="surnames" class="form-control @error('surnames') is-invalid @enderror" placeholder="Ingese su apellido paterno y materno" value="{{old('surname')}}">
                                @error('surnames')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobile">Celular</label>
                                <input type="number" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="Ingese su número de celular" value="{{old('mobile')}}">
                                @error('mobile')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Correo *</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingese su correo de contacto" value="{{old('email')}}">
                                @error('email')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="career_id">Carrera *</label>
                                {{-- ACTIVAR DESACTIVAR CLASE EN RELACIÓN A LA EXISTENCIA DE ALGÚN ERROR --}}
                                <select name="career_id" class="form-control @error('career_id') is-invalid @enderror">
                                    <option selected disabled>Seleccione su carrera</option>
                                    @foreach ($careers as $career)
                                        <option value="{{$career->id}}">{{$career->name }}</option>
                                    @endforeach
                                </select>
                                @error('career_id')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror

                                {{-- MOSTRAR ERROR DE INPUT - FORMA III - ACCEDIENDO AL ARRAY DE ERRORES --}}
                                {{-- @if ($errors->any() && $errors->messages()['career_id'])
                                    @foreach ($errors->messages()['career_id'] as $err)
                                        <div class="invalid-feedback">{{$err}}</div>
                                    @endforeach    
                                @endif --}}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="semester">Semestre *</label>
                                <select name="semester" class="form-control @error('semester') is-invalid @enderror">
                                    <option selected disabled>Seleccione su semestre</option>
                                    <option value="I">I</option>
                                    <option value="II">II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                    <option value="IX">IX</option>
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                    <option value="terminado">terminado</option>
                                </select>
                                @error('semester')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="institution_id">Universidad / Instituto *</label>
                                <select name="institution_id" class="form-control @error('institution_id') is-invalid @enderror">
                                    <option selected disabled>Seleccione su universidad o instituto</option>
                                    @foreach ($institutions as $institution)
                                        <option value="{{$institution->id}}">{{$institution->name }}</option>
                                    @endforeach
                                </select>
                                @error('institution_id')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="english_level">Inglés *</label>
                                <select name="english_level" class="form-control @error('english_level') is-invalid @enderror">
                                    <option selected disabled>Seleccione su nivel de inglés</option>
                                    <option value="básico">Básico</option>
                                    <option value="intermedio">Intermedio</option>
                                    <option value="avanzado">Avanzado</option>
                                    <option value="ninguno">Ninguno</option>
                                </select>
                                @error('english_level')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="program_id">Programa *</label>
                                <select name="program_id" class="form-control @error('program_id') is-invalid @enderror">
                                    <option selected disabled>Seleccione el programa que le interesa</option>
                                    @foreach ($programs as $program)
                                        <option value="{{$program->id}}">{{$program->name}}</option>
                                    @endforeach
                                </select>
                                @error('program_id')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="communication_channel">Canal de comunicación preferente *</label>
                                {{-- <input type="text" name="communication_channel" class="form-control @error('communication_channel') is-invalid @enderror"> --}}
                                <select name="communication_channel" class="form-control @error('communication_channel') is-invalid @enderror">
                                    <option selected disabled>Seleccione un medio de comunicación</option>
                                    <option value="facebook/messenger">Facebook/Messenger</option>
                                    <option value="whatsapp">Whatsapp</option>
                                    <option value="instragram">Instragram</option>
                                    <option value="correo">Correo electrónico</option>
                                    <option value="teléfono">Teléfono</option>
                                </select>
                                @error('communication_channel')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    Seleccione el medio de comunicación por el cual desea ser contactado.
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Horario de contácto preferente *</label>
                                <div class="input-group">
                                    <input 
                                        type="number" 
                                        name="schedule_start"
                                        min="1" 
                                        max="11" 
                                        value="{{old('schedule_start')}}"
                                        class="form-control @error('schedule_start') is-invalid @enderror" 
                                        placeholder="Inicio">
                                    <select name="schedule_start_meridiem" class="form-control">
                                        <option value="am" selected>am</option>
                                        <option value="pm">pm</option>
                                    </select>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">a</span>
                                    </div>
                                    <input 
                                        type="number" 
                                        name="schedule_end"
                                        min="1" 
                                        max="11"
                                        value="{{old('schedule_end')}}"
                                        class="form-control @error('schedule_end') is-invalid @enderror"
                                        placeholder="Fin">
                                    <select name="schedule_end_meridiem" class="form-control">
                                        <option value="am" selected>am</option>
                                        <option value="pm" selected>pm</option>
                                    </select>
                                    @error('schedule_start')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                    @error('schedule_end')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                </div>
                        </div>

                        @guest
                        @else
                            <br>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="commentary">Comentario</label>
                                    <textarea name="commentary" rows="3" class="form-control" placeholder="Ingrese un comentario..."></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="profile">Perfil</label>
                                    <textarea name="profile" rows="3" class="form-control" placeholder="Ingrese el perfil de ..."></textarea>
                                </div>
                            </div>
                        @endguest

                        <br>


                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <button class="form-control btn btn-lg btn-primary">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
