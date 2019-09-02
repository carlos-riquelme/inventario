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

                </div>
            </div>
            <div class="card-body">
                    @include('partials.error')
                <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-4">
                            <label for="nombre"><h5><strong>Nombre o Razón Social</strong></h5></label>
                            <input type="text" readonly name="nombre" id="nombre" class="form-control-plaintext" value="{{ $proveedor->nombre }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="contacto"><h5><strong>Nombre de Contacto</strong></h5></label>
                            <input type="text" name="contacto" id="contacto" class="form-control" value="{{ $proveedor->contacto }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telefono"><h5><strong>Teléfono</strong></h5></label>
                            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $proveedor->telefono }}">
                        </div>
                    </div>
                    <div class="form-row justify-content-between">
                        <div class="form-group col-md-3">
                            <label for="email"><h5><strong>Email</strong></h5></label>
                            <input type="text" name="email" id="email" class="form-control" value="{{ $proveedor->email }}">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="direccion"><h5><strong>Dirección</strong></h5></label>
                            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $proveedor->direccion }}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="comuna"><h5><strong>Comuna</strong></h5></label>
                            <input type="text" name="comuna" id="comuna" class="form-control" value="{{ $proveedor->comuna }}">
                        </div>
                    </div>
                    <div class="form-group my-4">
                        <button type="submit" class="btn btn-success">Actualizar Proveedor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
