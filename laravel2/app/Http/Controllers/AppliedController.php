<?php

namespace App\Http\Controllers;

use App\Applied;
use Illuminate\Http\Request;

class AppliedController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applieds=Applied::orderBy('id','DESC')->paginate(3);
        return view('Applied.index',compact('applieds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Applied.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'user_id'=>'required', 'offer_id'=>'required']);
        Applied::create($request->all());
        return redirect()->route('applied.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applieds=Applied::find($id);
        return  view('applied.show',compact('applied'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applieds=applieds::find($id);
        return view('applied.edit',compact('applied'));
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
        $this->validate($request,[ 'user_id'=>'required', 'offer_id'=>'required']);

        applied::find($id)->update($request->all());
        return redirect()->route('applied.index')->with('success','Registro actualizado satisfactoriamente');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Applied::find($id)->delete();
        return redirect()->route('applied.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
