<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Devuelve todos los productos
        // return view('admin.productos.index')->with('productos', Producto::all());
        $productos = Producto::where('vigente', 1)->simplePaginate(5);
        // $productos = Producto::where('vigente', 1);
        return view('admin.productos.index', ['productos' => $productos]);
        }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novigente()
    {
        // Devuelve todos los productos
        // return view('admin.productos.index')->with('productos', Producto::all());
        $productos = Producto::where('vigente', 0)->simplePaginate(5);
        // $productos = Producto::where('vigente', 1);
        return view('admin.productos.index', ['productos' => $productos]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductoRequest $request)
    {
        //Guarda los valores del formulario en las variables
        $producto = Producto::create([
            'nombre' => $request->nombre,
            'SKU' => $request->SKU,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'stock_minimo' => $request->stock_minimo,
            'descripcion' => $request->descripcion,
            'codigo_barras' => $request->codigo_barras,
            'proveedor' => $request->proveedor,
            'fecha_adq' => $request->fecha_adq,
            'fecha_exp' => $request->fecha_exp,
            'familia' => $request->familia,
            'categoria' => $request->categoria,
            'vigente' => $request->vigente,
            'presentacion' => $request->presentacion,
            'receta' => $request->receta,
            'slug' => str_slug($request->nombre)
        ]);
        //Guarda los datos en la BD

        //Mensaje de éxito
        session()->flash('succes', 'Producto agregado correctamente.');
        //Volver al index
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('admin.productos.show', [
            'producto' => $producto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        // return view('productos.edit');
        return view('admin.productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request,Producto $producto)
    {
        // $data = $request->only([
        //     'nombre',
        //     'SKU',
        //     'precio',
        //     'stock',
        //     'stock_minimo',
        //     'descripcion',
        //     'proveedor',
        //     'fecha_adq',
        //     'fecha_exp',
        //     'familia',
        //     'categoria',
        //     'vigente',
        //     'presentacion',
        //     'receta'
        // ]);
        $data = $request->all();

        $producto->update($data);

        session()->flash('success', 'El producto ha sido actualizado correctamente.');

        return view('admin.productos.show', [
            'producto' => $producto
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrfail($id);

        $producto->delete();

        session()->flash('success', 'Producto eliminado de la base de datos.');

        return redirect()->route('productos.index');
    }
}
