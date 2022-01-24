<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Direccion;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = Direccion::where('user_id', auth()->user()->id)->get();
        return view('cliente.direcciones.index', compact('direcciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.direcciones.create');
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
            'calle' => 'required',
            'colonia' => 'required',
            'num_int' => 'required',
            'num_ext' => 'required',
            'cp' => 'required',
            'phone' => 'required',
            'referencias' => 'required',
        ]);

        $direccione = Direccion::create($request->all());
        return redirect()->route('cliente.direcciones.edit', $direccione);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Direccion $direccione)
    {
        return view('cliente.direcciones.show', compact('direccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Direccion $direccione)
    {
        return view('cliente.direcciones.edit', compact('direccione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Direccion $direccione)
    {
        $request->validate([
            'calle' => 'required',
            'colonia' => 'required',
            'num_int' => 'required',
            'num_ext' => 'required',
            'cp' => 'required',
            'phone' => 'required',
            'referencias' => 'required',
        ]);

        $direccione->update($request->all());
        return redirect()->route('cliente.direcciones.edit', $direccione);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Direccion $direccione)
    {
        //
    }
}
