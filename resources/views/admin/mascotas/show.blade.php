@extends('layouts.admin')

@section('content')
<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>Mascota: {{ $mascota->nombre }} / Raza: {{ $mascota->raza }}</h3>
                <div class="row justify-content-end">
                    <div class="btn-group mx-2">
                        <a href="{{ route('mascotas.edit', $mascota->id) }}" class="btn btn-primary"> Editar</a>
                    </div>
                    <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <button type="submit" onclick="return confirm('¿Está seguro de eliminar este producto? Esta acción no se puede deshacer.')" class="btn btn-danger">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="form-row d-flex justify-content-between">
                <div class="input-group col-md-3">
                    <label for="nombre"><h5><strong>Nombre</strong></h5></label>
                    <div class="input-group">
                        <input type="text" readonly class="form-control-plaintext" name="nombre" id="nombre" value="{{ $mascota->nombre }}">
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="especie"><h5><strong>Especie</strong></h5></label>
                    <div class="input-group">
                        <input type="text" readonly class="form-control-plaintext" name="especie" id="especie" value="{{ $mascota->especie }}">
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="raza"><h5><strong>Raza</strong></h5></label>
                    <div class="input-group">
                        <input type="text" readonly class="form-control-plaintext" name="raza" id="raza" value="{{ $mascota->raza }}">
                    </div>
                </div>
            </div>
            <div class="form-row d-flex justify-content-between my-4">
                <div class="input-group col-md-3">
                    <label for="sexo"><h5><strong>Sexo</strong></h5></label>
                    <div class="input-group">
                        <input type="text" readonly class="form-control-plaintext" name="sexo" id="sexo" value="{{ $mascota->sexo }}">
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="fecha_nacimiento"><h5><strong>Fecha de Nacimiento</strong></h5></label>
                    <div class="input-group">
                        <input type="date" readonly class="form-control-plaintext" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $mascota->fecha_nacimiento }}">
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="fecha_deceso"><h5><strong>Fecha de Deceso</strong></h5></label>
                    <div class="input-group">
                        <input type="date" readonly class="form-control-plaintext" name="fecha_deceso" id="fecha_deceso" value="{{ $mascota->fecha_deceso }}">
                    </div>
                </div>
                <div class="input-group col-md-3">
                    <label for="tratamiento"><h5><strong>Tratamiento</strong></h5></label>
                    <div class="input-group">
                        <input type="checkbox" readonly class="form-control" name="tratamiento" id="tratamiento" value="{{ $mascota->tratamiento }}" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
