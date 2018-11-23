<?php

namespace App\Http\Controllers;
use App\Libro;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class LibrosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');//que siempre verifique que este autorizado
    }

    public function index(Request $request)
    {
        $title = 'Libros';
        $libros = Libro::all();//solo movimientos del usuario en secion
        //$propietarios = Propietario::all();

        //$propietarios = $propietarios->orderBy('nombre', 'desc')->paginate(5);//paginado viene 15 pro defecto(numero)
        //$propietarios= Propietario::orderBy('nombre','desc')->get()->paginate();

        return view('libros.index', compact('libros','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libros = Libro::orderBy('id')->pluck('id','nombre');

        return view('libros.create', compact('libros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libro($request->all());

        $libro->nombre  = $request->get('nombre');
        $libro->editorial  = $request->get('editorial');
        $libro->ano  = $request->get('ano');
        $libro->ubicacion  = $request->get('ubicacion');
        $libro->tipo  = $request->get('tipo');
        $libro->autor  = $request->get('autor');
        $libro->area  = $request->get('area');
        $libro->prestamo  = $request->get('prestamo');
        $libro->save();

        return redirect()->route('libros.show',$libro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::all()
        ->where('id', $id) 
        ->first();

        return view('libros.show', compact('libro'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $libro = Libro::all()
            ->where('id', $id)
            ->first();

        return view('libros.edit', compact('libro'));
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
        $libro = Libro::all()
            ->where('id', $id)
            ->first();

            $libro->nombre  = $request->get('nombre');
            $libro->editorial  = $request->get('editorial');
            $libro->ano  = $request->get('ano');
            $libro->ubicacion  = $request->get('ubicacion');
            $libro->tipo  = $request->get('tipo');
            $libro->autor  = $request->get('autor');
            $libro->area  = $request->get('area');
            $libro->prestamo  = $request->get('prestamo');
        

        // Guarda en la base de datos
        $libro->save();

        return redirect()->route('libros.show', $libro);
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
