<?php

namespace App\Http\Controllers;

use App\Empleado;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EmpleadosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Empleados';
        $empleados = Empleado::all();
 
        return view('empleados.index', compact('empleados','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::orderBy('id')->pluck('id','nombre');

        return view('empleados.create', compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado($request->all());

        $empleado->nombre  = $request->get('nombre');

        $empleado->save();

        return redirect()->route('empleados.show',$empleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::all()
        ->where('id', $id) 
        ->first();

        return view('empleados.show', compact('empleado'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::all()
        ->where('id', $id)
        ->first();

    return view('empleados.edit', compact('empleados'));
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
        $empleado = Empleado::all()
        ->where('id', $id)
        ->first();
    
        $empleado->nombre  = $request->get('nombre');
    
    
    
    // Guarda en la base de datos
    $empleado->save();
    
    return redirect()->route('empleados.show', $empleado);
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
