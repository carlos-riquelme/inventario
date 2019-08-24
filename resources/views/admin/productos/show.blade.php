@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h3>Producto: {{ $producto->nombre }}</h3>
                <div class="btn-group">
                    <button class="btn btn-primary btn-sm">Editar</button>
                </div>
            </div>
        </div>

        <div class="card-body">
                <form class="">
                        <div class="form-row d-flex justify-content-center">
                            <div class="input-group col-md-5">
                                <label for="nombre">Nombre</label>
                                <div class="input-group">
                                    <input type="text" readonly class="form-control" name="nombre" id="nombre" value="{{ $producto->nombre }}">
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <label for="SKU">SKU</label>
                                <div class="input-group">
                                    <input type="text" readonly class="form-control" name="SKU" id="SKU" value="{{ $producto->SKU }}">
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <label for="precio">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <input type="number" readonly class="form-control" name="precio" id="precio" value="{{ $producto->precio }}">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="stock">Stock</label>
                                <div class="input-group">
                                    <input type="text" readonly class="form-control" name="stock" id="stock" value="{{ $producto->stock }}">
                                </div>
                            </div>
                            <div class="input-group col-sm-2">
                                <label for="stock_minimo">Stock Mínimo</label>
                                <div class="input-group">
                                    <input type="number" readonly class="form-control" name="stock_minimo" id="stock_minimo" value="{{ $producto->stock_minimo }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between py-2">
                            <div class="input-group col-md-6">
                                <div class="input-group">
                                    <label for="descripcion">Descripción</label>
                                </div>
                                <div class="input-group">
                                    <textarea type="text" name="descripcion" id="descripcion" readonly class="form-control">{{ $producto->descripcion }}</textarea>
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <div class="input-group">
                                    <label for="fecha_adq">Fecha adquisición</label>
                                </div>
                                <div class="input-group">
                                    <input type="date" name="fecha_adq" id="fecha_adq" readonly class="form-control" value="{{ $producto->fecha_adq }}">
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <div class="input-group">
                                    <label for="fecha_exp">Fecha expiración</label>
                                </div>
                                <div class="input-group">
                                    <input type="date" name="fecha_exp" id="fecha_exp" readonly class="form-control" value="{{ $producto->fecha_exp }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="input-group col-md-3">
                                <label for="familia">Familia</label>
                                <div class="input-group">
                                    <input type="text" name="familia" id="familia" readonly class="form-control" value="{{ $producto->familia }}">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="categoria">Categoria</label>
                                <div class="input-group">
                                    <input type="text" name="categoria" id="categoria" readonly class="form-control" value="{{ $producto->categoria }}">
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="vigente">Vigencia</label>
                                <div class="input-group">
                                    <input type="text" name="vigente" id="vigente" readonly class="form-control" value="{{ $producto->vigente ? 'Sí' : 'No'}}">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="presentacion">Presentación</label>
                                <div class="input-group">
                                    <input type="text" name="presentacion" id="presentacion" readonly class="form-control" value="{{ $producto->presentacion }}">
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="receta">Receta</label>
                                <div class="input-group">
                                    <input type="text" name="receta" id="receta" readonly class="form-control" value="{{ $producto->receta ? 'Sí' : 'No'}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between py-2">
                            <div class="input-group col-md-6">
                                <label for="proveedor">Proveedor</label>
                                <div class="input-group">
                                    <input type="text" name="proveedor" id="proveedor" readonly class="form-control" value="{{ $producto->proveedor }}">
                                </div>
                            </div>
                        </div>
                </form>
        </div>

    </div>

</div>
@endsection
