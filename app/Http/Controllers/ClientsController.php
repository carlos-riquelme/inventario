<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Client::all();

        return view('admin.clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClientRequest $request)
    {
        $slug = Str::slug($request->nombre . '-' . $request->apellidos);

        $cliente = Client::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'slug' => $slug,
            'email' => $request->email,
            'direccion' => $request->direccion,
            'comuna' => $request->comuna,
            'telefono' => $request->telefono
        ]);

        session()->flash('success', 'Cliente agregado exitosamente.');

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Client::findOrFail($id);

        return view('admin.clientes.show', ['cliente' => $cliente] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Client::findOrFail($id);

        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, $id)
    {
        $data = $request->all();

        $cliente = Client::findOrFail($id)->update($data);

        session()->flash('success', 'Cambios guardados exitosamente.');

        return \redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Client::findOrFail($id);

        $cliente->delete();

        \session()->flash('success', 'Cliente eliminado de la base de datos.');

        return \redirect()->route('clientes.index');
    }
}
