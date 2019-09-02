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
                    <h3>Proveedor: {{ $proveedor->nombre }}</h3>
                    <div class="row justify-content-end">
                        <div class="btn-group mx-2">
                            <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                        <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group">
                            <button type="submit" onclick="return confirm('¿Está seguro de eliminar este proveedor?')" class="btn btn-danger">Eliminar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-4">
                            <label for="nombre"><h5><strong>Nombre o Razón Social</strong></h5></label>
                            <div class="input-group">
                                    {{ $proveedor->nombre }}
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="contacto"><h5><strong>Nombre de Contacto</strong></h5></label>
                            <input type="text" name="contacto" id="contacto" class="form-control-plaintext" value="{{ $proveedor->contacto }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telefono"><h5><strong>Teléfono</strong></h5></label>
                            <input type="text" name="telefono" id="telefono" class="form-control-plaintext" value="{{ $proveedor->telefono }}">
                        </div>
                    </div>
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-3">
                            <label for="email"><h5><strong>Email</strong></h5></label>
                            <input type="text" name="email" id="email" class="form-control-plaintext" value="{{ $proveedor->email }}">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="direccion"><h5><strong>Dirección</strong></h5></label>
                            <input type="text" name="direccion" id="direccion" class="form-control-plaintext" value="{{ $proveedor->direccion }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="comuna"><h5><strong>Comuna</strong></h5></label>
                            <input type="text" readonly name="comuna" id="comuna" class="form-control-plaintext" value="{{ $proveedor->comuna }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
