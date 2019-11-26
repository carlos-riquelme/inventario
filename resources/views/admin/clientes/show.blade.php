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
                    <h3>Cliente: {{ $cliente->nombre . ' ' . $cliente->apellidos }}</h3>
                    <div class="row justify-content-end">
                        <div class="btn-group mx-2">
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
                        </div>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="btn-group">
                                <button type="submit" onclick="return confirm('¿Está seguro de eliminar este producto? Esta acción no se puede deshacer.')" class="btn btn-danger">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                    <div class="form-row d-flex justify-content-between">
                        <div class="input-group col-md-3">
                            <label for="nombre"><h5><strong>Nombre</strong></h5></label>
                            <div class="input-group">
                                <input type="text" readonly class="form-control-plaintext" name="nombre" id="nombre" value="{{ $cliente->nombre }}">
                            </div>
                        </div>
                        <div class="input-group col-md-4">
                            <label for="apellidos"><h5><strong>Apellidos</strong></h5></label>
                            <div class="input-group">
                                <input type="text" readonly class="form-control-plaintext" name="apellidos" id="apellidos" value="{{ $cliente->apellidos }}">
                            </div>
                        </div>
                        <div class="input-group col-md-4">
                            <label for="email"><h5><strong>Email</strong></h5></label>
                            <div class="input-group">
                                <input type="text" readonly class="form-control-plaintext" name="email" id="email" value="{{ $cliente->email }}">
                            </div>
                        </div>
                    </div>
                        <div class="form-row d-flex justify-content-between">
                            <div class="input-group col-md-5">
                                <label for="direccion"><h5><strong>Dirección</strong></h5></label>
                                <div class="input-group">
                                    <input type="text" readonly class="form-control-plaintext" name="direccion" id="direccion" value="{{ $cliente->direccion }}">
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <label for="comuna"><h5><strong>Comuna</strong></h5></label>
                                <div class="input-group">
                                    <input type="text" readonly class="form-control-plaintext" name="comuna" id="comuna" value="{{ $cliente->comuna }}">
                                </div>
                            </div>
                            <div class="form-row">
                                    <label for="telefono"><h5><strong>Teléfono</strong></h5></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">+56</span>
                                            <input type="text" class="form-control-plaintext" name="telefono" id="telefono" value="{{ $cliente->telefono }}">
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="d-flex justify-content-between ml-3">
                            <h3>Mascotas</h3>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Sexo</th>
                                <th>Especie</th>
                                <th>Raza</th>
                                <th>En tratamiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simona</td>
                                <td>7 años</td>
                                <td>Hembra</td>
                                <td>Perro</td>
                                <td>Labrador Mixto</td>
                                <td>Sí</td>
                                <td>
                                    <button class="btn btn-primary">Ver más</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>

        </div>
    </div>
@endsection
