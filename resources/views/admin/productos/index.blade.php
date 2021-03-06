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
                <h3>Listado de Productos Vigentes</h3>
                <div class="btn-group">
                    <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar Producto</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        {{-- <th>Código de Barras</th> --}}
                        <th>Proveedor</th>
                        <th>Familia</th>
                        <th>Categoría</th>
                        {{-- <th>Stock Mínimo</th> --}}
                        <th>Stock</th>
                        {{-- <th>Vigente</th> --}}
                        {{-- <th>Presentación</th> --}}
                        <th>SKU</th>
                        {{-- <th>Descripción</th> --}}
                        {{-- <th>Detalles</th> --}}
                        <th>Precio</th>
                        <th>Receta</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td>
                                {{ $producto->id }}
                            </td>
                            <td>
                                {{ $producto->nombre }}
                            </td>
                            <td>
                                {{ $producto->proveedor }}
                            </td>
                            <td>
                                {{ $producto->familia }}
                            </td>
                            <td>
                                {{ $producto->categoria }}
                            </td>
                            <td>
                                {{ $producto->stock }}
                            </td>
                            <td>
                                {{ $producto->SKU }}
                            </td>
                            <td>
                                ${{ number_format($producto->precio) }}
                            </td>
                            <td>
                                {{ $producto->receta ? 'Sí' : 'No' }}
                            </td>
                            <td>
                                <a href="{{ route('productos.show', $producto->slug) }}" style="color: white" class="btn btn-info btn-sm">Ver Más</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $productos->links() }}
        </div>

    </div>

</div>
@endsection
