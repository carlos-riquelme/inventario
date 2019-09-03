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
                    <h3>Listado de Clientes</h3>
                    <div class="btn-group">
                        <a href="{{ route('clientes.create') }}" class="btn btn-success">Agregar Cliente</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Email</th>
                            <th>Mascotas</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>
                                    {{ $cliente->id }}
                                </td>
                                <td>
                                    {{ $cliente->nombre . ' ' . $cliente->apellidos }}
                                </td>
                                <td>
                                    {{ $cliente->direccion }}
                                </td>
                                <td>
                                    {{ $cliente->email }}
                                </td>
                                <td>
                                    4
                                </td>
                                <td>
                                        <a href="{{ route('clientes.show', $cliente->id) }}" style="color: white" class="btn btn-info btn-sm">Ver Más</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
