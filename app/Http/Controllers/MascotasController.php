<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMascotasRequest;
use App\Mascota;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::all();

        return view('admin.mascotas.index', [
            'mascotas' => $mascotas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMascotasRequest $request)
    {
        $mascota = Mascota::create([
            'nombre' => $request->nombre,
            'especie' => $request->especie,
            'raza' => $request->raza,
            'sexo' => $request->sexo,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'tratamiento' => $request->tratamiento
        ]);

        session()->flash('success', 'Mascota agregada exitosamente.');

        return \redirect()->route('mascotas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = Mascota::findOrFail($id);

        return view('admin.mascotas.show', ['mascota'=> $mascota]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota = Mascota::findOrFail($id);

        return view('admin.mascotas.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
