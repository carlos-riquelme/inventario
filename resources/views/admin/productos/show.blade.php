@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Producto: {{ $producto->nombre }}</div>

        <div class="card-body">
                <form>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" reandonly class="form-control-plaintext" name="nombre" id="nombre" value="{{ $producto->nombre }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="codigo_barra">Código de Barra</label>
                                <input type="text" readonly class="form-control-plaintext" name="codigo_barra" id="codigo_barra" value="{{ $producto->codigo_barra }}">
                            </div>
                        </div>
                    </form>
        </div>

    </div>

</div>
@endsection
