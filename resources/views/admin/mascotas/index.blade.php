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
                <h3>Listado de Mascotas</h3>
                <div class="btn-group">
                    <a href="{{ route('mascotas.create') }}" class="btn btn-success">Agregar Mascota</a>
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
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Fecha Nacimiento</th>
                        <th>En Tratamiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                        <tr>
                            <td>
                                {{ $mascota->id }}
                            </td>
                            <td>
                                {{ $mascota->nombre }}
                            </td>
                            <td>
                                {{ $mascota->especie }}
                            </td>
                            <td>
                                {{ $mascota->raza }}
                            </td>
                            <td>
                                {{ $mascota->fecha_nacimiento }}
                            </td>
                            <td>
                                {{ $mascota->tratamiento ? 'Sí' : 'No' }}
                            </td>
                            <td>
                                <a href="{{ route('mascotas.show', $mascota->id) }}" style="color: white" class="btn btn-info btn-sm">Ver Más</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
