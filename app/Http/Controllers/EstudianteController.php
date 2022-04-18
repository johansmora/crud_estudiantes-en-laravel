<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facade\Storage;
class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['estudiantes']=Estudiante::paginate(5);
        return view('estudiante.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosEstudiante = $request->except('_token');
if($request->hasFile('foto')){
    $datosEstudiante['foto']=$request->file('foto')->store('uploads','public');
}


        Estudiante::insert($datosEstudiante);
        return response()->json($datosEstudiante);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit',compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $datosEstudiante = $request->except(['_token','_method']);
        if($request->hasFile('foto')){
            $estudiante=Estudiante::findOrFail($id);
            Storage::delete('public/',$estudiante->foto);
            $datosEstudiante['foto']=$request->file('foto')->store('uploads','public');}
        Estudiante::where('id','=',$id)->update($datosEstudiante);

        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit',compact('estudiante'));   
        
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        
            Estudiante::destroy($id);
        

        return redirect('estudiante');
    }
}
