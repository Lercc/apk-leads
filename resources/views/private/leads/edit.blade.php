@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>
                                {{ session('status') }}
                            </strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Verifica los campos del formulario.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('leads.update', $lead) }}" method="POST"
                    >
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dni">DNI</label>
                                <input type="number" name="dni" class="form-control @error('dni') is-invalid @enderror" placeholder="Ingese su número de dni" value="{{old('dni', $lead->dni)}}">
                                @error('dni')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Ingese sus nombres" value="{{old('name', $lead->name)}}">
                                @error('name')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="surnames">Apellidos</label>
                                <input type="text" name="surnames" class="form-control @error('surnames') is-invalid @enderror" placeholder="Ingese su apellido paterno y materno" value="{{old('surname', $lead->surnames)}}">
                                @error('surnames')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="mobile">Celular</label>
                                <input type="number" name="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="Ingese su número de celular" value="{{old('mobile', $lead->mobile)}}">
                                @error('mobile')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Correo</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingese su correo de contacto" value="{{old('email', $lead->email)}}">
                                @error('email')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="career_id">Carrera</label>
                                {{-- ACTIVAR DESACTIVAR CLASE EN RELACIÓN A LA EXISTENCIA DE ALGÚN ERROR --}}
                                <select name="career_id" class="form-control @error('career_id') is-invalid @enderror">
                                    @foreach ($careers as $career)
                                        <option value="{{$career->id}}" @if($lead->career->id == $career->id) selected @endif >{{$career->name}}</option>
                                    @endforeach
                                </select>
                                @error('career_id')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="semester">Semestre</label>
                                <select name="semester" class="form-control @error('semester') is-invalid @enderror">
                                    <option value="I" @if($lead->semester == 'I') selected @endif>I</option>
                                    <option value="II" @if($lead->semester == 'II') selected @endif>II</option>
                                    <option value="III" @if($lead->semester == 'III') selected @endif>III</option>
                                    <option value="IV" @if($lead->semester == 'IV') selected @endif>IV</option>
                                    <option value="V" @if($lead->semester == 'V') selected @endif>V</option>
                                    <option value="VI" @if($lead->semester == 'VI') selected @endif>VI</option>
                                    <option value="VII" @if($lead->semester == 'VII') selected @endif>VII</option>
                                    <option value="VIII" @if($lead->semester == 'VIII') selected @endif>VIII</option>
                                    <option value="IX" @if($lead->semester == 'IX') selected @endif>IX</option>
                                    <option value="X" @if($lead->semester == 'X') selected @endif>X</option>
                                    <option value="XI" @if($lead->semester == 'XI') selected @endif>XI</option>
                                    <option value="XII" @if($lead->semester == 'XII') selected @endif>XII</option>
                                    <option value="terminado" @if($lead->semester == 'terminado') selected @endif>terminado</option>
                                </select>
                                @error('semester')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="institution_id">Universidad / Instituto</label>
                                <select name="institution_id" class="form-control @error('institution_id') is-invalid @enderror">
                                    @foreach ($institutions as $institution)
                                        <option value="{{$institution->id}}" @if($lead->institution->id == $institution->id) selected @endif >{{$institution->name}}</option>
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
                                <label for="english_level">Inglés</label>
                                <select name="english_level" class="form-control @error('english_level') is-invalid @enderror">
                                    <option value="básico" @if($lead->english_level == 'básico') selected @endif>Básico</option>
                                    <option value="intermedio" @if($lead->english_level == 'intermedio') selected @endif>Intermedio</option>
                                    <option value="avanzado" @if($lead->english_level == 'avanzado') selected @endif>Avanzado</option>
                                    <option value="ninguno" @if($lead->english_level == 'ninguno') selected @endif>Ninguno</option>
                                </select>
                                @error('english_level')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="program_id">Programa</label>
                                <select name="program_id" class="form-control @error('program_id') is-invalid @enderror">
                                    @foreach ($programs as $program)
                                        <option value="{{$program->id}}" @if($lead->program->id == $program->id) selected  @endif  >{{$program->name}}</option>
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
                                <label for="communication_channel">Canal de comunicación preferente</label>
                                <select name="communication_channel" class="form-control @error('communication_channel') is-invalid @enderror">
                                    <option value="facebook/messenger" @if($lead->communication_channel == 'facebook/messenger') selected @endif" >Facebook/Messenger</option>
                                    <option value="whatsapp" @if($lead->communication_channel == 'whatsapp') selected @endif >Whatsapp</option>
                                    <option value="instragram" @if($lead->communication_channel == 'instragram') selected @endif >Instragram</option>
                                    <option value="correo" @if($lead->communication_channel == 'correo') selected @endif >Correo electrónico</option>
                                    <option value="teléfono" @if($lead->communication_channel == 'teléfono') selected @endif >Teléfono</option>
                                </select>
                                @error('communication_channel')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    Seleccione el medio de comunicación por el cual desea ser contactado.
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Horario de contácto preferente</label>
                                <div class="input-group">
                                    <input 
                                        type="number" 
                                        name="schedule_start"
                                        min="1" 
                                        max="11" 
                                        value="{{old('schedule_start', $lead->schedule_start)}}"
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
                                        value="{{old('schedule_end', $lead->schedule_end)}}"
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
                                    <textarea name="commentary" rows="3" class="form-control" placeholder="Ingrese un comentario...">{{old('commentary', $lead->commentary)}}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="profile">Perfil</label>
                                    <textarea name="profile" rows="3" class="form-control" placeholder="Ingrese el perfil de ..." >{{old('profile', $lead->profile)}}</textarea>
                                </div>
                            </div>
                        @endguest

                        <br>

                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <button class="form-control btn btn-lg btn-primary">
                                    Actualizar
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
