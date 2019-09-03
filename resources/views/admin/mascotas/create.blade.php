@extends('layouts.admin')

@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3>Agregar Mascota</h3>
                </div>
            </div>
            <div class="card-body">
                @include('partials.error')
                <form action="{{ route('mascotas.store') }}" method="POST">
                    @csrf
                    <div class="form-row d-flex justify-content-between">
                        <div class="input-group col-md-3">
                            <label for="nombre"><h5><strong>Nombre</strong></h5></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="input-group col-md-3">
                            <label for="especie"><h5><strong>Especie</strong></h5></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="especie" id="especie">
                            </div>
                        </div>
                        <div class="input-group col-md-3">
                            <label for="raza"><h5><strong>Raza</strong></h5></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="raza" id="raza">
                            </div>
                        </div>
                        </div>
                        <div class="form-row d-flex justify-content-between my-4">
                            <div class="input-group col-md-3">
                                <label for="fecha_nacimiento"><h5><strong>Fecha de Nacimiento</strong></h5></label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="sexo"><h5><strong>Sexo</strong></h5></label>
                                <div class="input-group">
                                    <select name="sexo" id="sexo" class="form-control">
                                        <option selected>Seleccionar</option>
                                        <option value="0">Macho</option>
                                        <option value="1">Hembra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="tratamiento"><h5><strong>Tratamiento</strong></h5></label>
                                <div class="input-group">
                                    <input type="checkbox" class="form-control" name="tratamiento" id="tratamiento" value="1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                                <button type="submit" class="btn btn-success">Crear Mascota</button>
                            </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
