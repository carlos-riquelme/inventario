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
                <h3>Agregar Producto</h3>
            </div>
        </div>

        <div class="card-body">
                @include('partials.error')
                <form action="{{ route('productos.store') }}" method="POST" class="">
                    @csrf
                        <div class="form-row d-flex justify-content-center">
                            <div class="input-group col-md-5">
                                <label for="nombre">Nombre</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nombre" id="nombre">
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <label for="SKU">SKU</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="SKU" id="SKU" >
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <label for="precio">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" name="precio" id="precio">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="stock">Stock</label>
                                <div class="input-group">
                                    <input type="number" min="0" class="form-control" name="stock" id="stock" >
                                </div>
                            </div>
                            <div class="input-group col-sm-2">
                                <label for="stock_minimo">Stock Mínimo</label>
                                <div class="input-group">
                                    <input type="number" min="1" class="form-control" name="stock_minimo" id="stock_minimo">
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between py-2">
                            <div class="input-group col-md-6">
                                <div class="input-group">
                                    <label for="descripcion">Descripción</label>
                                </div>
                                <div class="form-group">
                                    <input id="descripcion" type="hidden" name="descripcion">
                                    <trix-editor input="descripcion"></trix-editor>
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="codigo_barras">Código de Barras</label>
                                <div class="form-group">
                                    <input type="text" name="codigo_barras" id="codigo_barras" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between py-2">
                            <div class="input-group col-md-6">
                                <label for="proveedor">Proveedor</label>
                                <div class="input-group">
                                    <input type="text" name="proveedor" id="proveedor" class="form-control" >
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <div class="input-group">
                                    <label for="fecha_adq">Fecha adquisición</label>
                                </div>
                                <div class="input-group">
                                    <input type="date" name="fecha_adq" id="fecha_adq" class="form-control" >
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <div class="input-group">
                                    <label for="fecha_exp">Fecha expiración</label>
                                </div>
                                <div class="input-group">
                                    <input type="date" name="fecha_exp" id="fecha_exp" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="input-group col-md-3">
                                <label for="familia">Familia</label>
                                <div class="input-group">
                                    <input type="text" name="familia" id="familia" class="form-control" >
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="categoria">Categoria</label>
                                <div class="input-group">
                                    <input type="text" name="categoria" id="categoria" class="form-control" >
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="vigente">Vigencia</label>
                                <div class="input-group">
                                    <input type="checkbox" name="vigente" id="vigente" class="form-control" value="1" >
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="presentacion">Presentación</label>
                                <div class="input-group">
                                    <input type="text" name="presentacion" id="presentacion" class="form-control" >
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="receta">Receta</label>
                                <div class="input-group">
                                    <input type="checkbox" name="receta" id="receta" class="form-control" value="1" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                            <button type="submit" class="btn btn-success">Crear Producto</button>
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
