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
                <h3>Agregar Proveedor</h3>
            </div>
        </div>

        <div class="card-body">
            @include('partials.error')
            <form action="{{ route('proveedores.store') }}" method="POST">
                @csrf
                <div class="form-row justify-content-between">
                    <div class="form-group col-md-4">
                        <label for="nombre">Nombre o Razón Social</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="contacto">Nombre de Contacto</label>
                        <input type="text" name="contacto" id="contacto" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telefono">Teléfono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">
                    </div>
                </div>
                <div class="form-row justify-content-between">
                    <div class="form-group col-md-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="direccion">Dirección</label>
                        <input type="text" name="direccion" id="direccion" class="form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="comuna">Comuna</label>
                        <input type="text" name="comuna" id="comuna" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-success" >Agregar Proveedor</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
@endsection
