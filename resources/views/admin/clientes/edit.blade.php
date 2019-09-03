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
                    <h3>Editar Cliente</h3>
                </div>
            </div>
            <div class="card-body">
                @include('partials.error')
                <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row d-flex justify-content-between">
                        <div class="input-group col-md-3">
                            <label for="nombre"><h5><strong>Nombre</strong></h5></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $cliente->nombre }}">
                            </div>
                        </div>
                        <div class="input-group col-md-4">
                            <label for="apellidos"><h5><strong>Apellidos</strong></h5></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ $cliente->apellidos }}">
                            </div>
                        </div>
                        <div class="input-group col-md-4">
                            <label for="email"><h5><strong>Email</strong></h5></label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" id="email" value="{{ $cliente->email }}">
                            </div>
                        </div>
                        </div>
                        <div class="form-row d-flex justify-content-between my-5">
                            <div class="input-group col-md-5">
                                <label for="direccion"><h5><strong>Dirección</strong></h5></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $cliente->direccion }}">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="comuna"><h5><strong>Comuna</strong></h5></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="comuna" id="comuna" value="{{ $cliente->comuna }}">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="telefono"><h5><strong>Teléfono</strong></h5></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+56</span>
                                    </div>
                                    <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $cliente->telefono }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                            </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
