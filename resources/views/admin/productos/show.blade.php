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
                <h3>Producto: {{ $producto->nombre }}</h3>
                <div class="btn-group">
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                </div>
            </div>
        </div>

        <div class="card-body">
                <form class="">
                        <div class="form-row d-flex justify-content-center">
                            <div class="input-group col-md-5">
                                <label for="nombre"><h5><strong>Nombre</strong></h5></label>
                                <div class="input-group">
                                        {{ $producto->nombre }}
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <label for="SKU"><h5><strong>SKU</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->SKU }}
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <label for="precio"><h5><strong>Precio</strong></h5></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        $ {{  number_format($producto->precio) }}
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="stock"><h5><strong>Stock</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->stock }}
                                </div>
                            </div>
                            <div class="input-group col-sm-2">
                                <label for="stock_minimo"><h5><strong>Stock Mínimo</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->stock_minimo }}
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between py-4">
                            <div class="input-group col-md-6">
                                <label for="proveedor"><h5><strong>Proveedor</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->proveedor }}
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <div class="input-group">
                                    <label for="fecha_adq"><h5><strong>Fecha Adquisición</strong></h5></label>
                                </div>
                                <div class="input-group">
                                    {{ $producto->fecha_adq }}
                                </div>
                            </div>
                            <div class="input-group col-md-2">
                                <div class="input-group">
                                    <label for="fecha_exp"><h5><strong>Fecha Expiración</strong></h5></label>
                                </div>
                                <div class="input-group">
                                    {{ $producto->fecha_exp }}
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="input-group col-md-3">
                                <label for="familia"><h5><strong>Familia</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->familia }}
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="categoria"><h5><strong>Categoria</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->categoria }}
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="vigente"><h5><strong>Vigencia</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->vigente ? 'Sí' : 'No'}}
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="presentacion"><h5><strong>Presentación</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->presentacion }}
                                </div>
                            </div>
                            <div class="input-group col-md-1">
                                <label for="receta"><h5><strong>Receta</strong></h5></label>
                                <div class="input-group">
                                    {{ $producto->receta ? 'Sí' : 'No'}}
                                </div>
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-between py-4">
                            <div class="input-group col-md-6">
                                <div class="input-group">
                                    <label for="descripcion"><h5><strong>Descripción</strong></h5></label>
                                </div>
                                <div class="input-group">
                                    {!! $producto->descripcion !!}
                                </div>
                            </div>
                        </div>
                </form>
        </div>

    </div>

</div>
@endsection
