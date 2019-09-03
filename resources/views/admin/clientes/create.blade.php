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
                    <h3>Agregar Cliente</h3>
                </div>
            </div>
            <div class="card-body">
                @include('partials.error')
                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf
                    <div class="form-row d-flex justify-content-between">
                        <div class="input-group col-md-3">
                            <label for="nombre">Nombre</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="input-group col-md-4">
                            <label for="apellidos">Apellidos</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="apellidos" id="apellidos">
                            </div>
                        </div>
                        <div class="input-group col-md-4">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="input-group col-md-5">
                                <label for="direccion">Dirección</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="direccion" id="direccion">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="comuna">Comuna</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="comuna" id="comuna">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="telefono">Teléfono</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+56</span>
                                    </div>
                                    <input type="number" class="form-control" name="telefono" id="telefono">
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                                <button type="submit" class="btn btn-success">Crear Cliente</button>
                            </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
