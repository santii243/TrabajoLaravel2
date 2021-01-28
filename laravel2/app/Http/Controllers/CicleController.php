<?php

namespace App\Http\Controllers;

use API;
use App\Cicle;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciclos = Cicle::all();
        return API::ok('listado de ciclos', $ciclos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ciclo_creado = Cicle::create($request->all());
        return API::response(201, 'Ciclo creado correctamente', $ciclo_creado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
    public function store(Request $request)
    {
        $this->validate($request,[ 'name'=>'required', 'img'=>'required']);
        Cicle::create($request->all());
        return redirect()->route('Cicles.index')->with('success','Registro creado satisfactoriamente');
    }
    */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try
        {
            $cicle = Cicle::findOrFail($id);
            return API::ok("Detalle de ciclo correcto", $cicle);
        }
        catch(ModelNotFoundException $e)
        {
            return API::notFound("Ciclo no encontrado con id " . $id);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function edit($id)
    {
        $cicles=article::find($id);
        return view('Cicles.edit',compact('cicles'));
    }
    */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function update(Request $request, $id)
    {
        cicle:: find($id)->update(request()->all());
       return redirect()->route('Cicles.index')->with('message',['success','ciclo modificado correctamente']);
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function destroy($id)
    {
        cicle::find($id)->delete();
        return redirect()->route('Cicles.index')->with('success','Registro eliminado satisfactoriamente');
    }*/
}
