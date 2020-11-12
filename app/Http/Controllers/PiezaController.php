<?php

namespace App\Http\Controllers;

use App\Pieza;
use Illuminate\Http\Request;

class PiezaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pieza = Pieza::all();
        return view("index")->with('pieza',$pieza);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'costo' => 'required',
        ]);
  
        Pieza::create($request->all());
   
        return view('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function show(Pieza $pieza)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pieza = Pieza::where('id', $id)->first();
        return view('edit')->with('pieza',$pieza);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pieza = Pieza::where('id', $request->id)->update(['nombre' => $request->nombre, 'descripcion' => $request->descripcion, 'cantidad' => $request->cantidad, 'costo' => $request->costo]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pieza $pieza)
    {
        $product->delete();
  
        return redirect()->route('piezas.index')->with('success','Pieza deleted successfully');
    }
}
