@extends('layouts.admin')

@section('content')
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>Editar Mascota</h3>
            </div>
        </div>
        <div class="card-body">
            @include('partials.error')
            <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-row d-flex justify-content-between">
                    <div class="input-group col-md-3">
                        <label for="nombre"><h5><strong>Nombre</strong></h5></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $mascota->nombre }}">
                        </div>
                    </div>
                    <div class="input-group col-md-3">
                        <label for="especie"><h5><strong>Especie</strong></h5></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="especie" id="especie" value="{{ $mascota->especie }}">
                        </div>
                    </div>
                    <div class="input-group col-md-3">
                        <label for="raza"><h5><strong>Raza</strong></h5></label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="raza" id="raza" value="{{ $mascota->raza }}">
                        </div>
                    </div>
                </div>
                <div class="form-row d-flex-justify-content-between my-4">
                <div class="input-group col-md-3">
                    <label for="sexo"><h5><strong>Sexo</strong></h5></label>
                    <div class="input-group">
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="0" {{ (isset($mascota->sexo) && $mascota->sexo=='0')?'selected':'' }}>Macho</option>
                            <option value="1" {{ (isset($mascota->sexo) && $mascota->sexo=='1')?'selected':'' }}>Hembra</option>
                        </select>
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="fecha_nacimiento"><h5><strong>Fecha de Nacimiento</strong></h5></label>
                    <div class="input-group">
                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $mascota->fecha_nacimiento }}">
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="fecha_deceso"><h5><strong>Fecha de Deceso</strong></h5></label>
                    <div class="input-group">
                        <input type="date" class="form-control" name="fecha_deceso" id="fecha_deceso" value="{{ $mascota->fecha_deceso }}">
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="tratamiento"><h5><strong>Tratamiento</strong></h5></label>
                    <div class="input-group">
                        <input type="checkbox" class="form-control" name="tratamiento" id="tratamiento" value="{{ $mascota->tratamiento }}" @if ( $mascota->tratamiento === 1 )
                            checked
                        @endif>
                    </div>
                </div>
                </div>
                <div class="form-group my-4">
                    <button type="submit" class="btn btn-success">Actualizar Producto</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
