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
        $pieza = Pieza::latest()->paginate(5);
  
        return view('piezas.index',compact('pieza'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('piezas.create');
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
   
        return redirect()->route('piezas.index')
                        ->with('success','Pieza created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function show(Pieza $pieza)
    {
        return view('piezas.show',compact('pieza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function edit(Pieza $pieza)
    {
        return view('piezas.edit',compact('pieza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pieza $pieza)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'costo' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('piezas.index')
                        ->with('success','Pieza updated successfully');
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
