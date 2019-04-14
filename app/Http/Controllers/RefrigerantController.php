<?php

namespace Fortics\Http\Controllers;

use Fortics\Refrigerant;
use Illuminate\Http\Request;
use DB;

class RefrigerantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('refri.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \Fortics\Refrigerant  $refrigerant
     * @return \Illuminate\Http\Response
     */
    public function show(Refrigerant $refrigerant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Fortics\Refrigerant  $refrigerant
     * @return \Illuminate\Http\Response
     */
    public function edit(Refrigerant $refrigerant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Fortics\Refrigerant  $refrigerant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refrigerant $refrigerant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Fortics\Refrigerant  $refrigerant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refrigerant $refrigerant)
    {
        //
    }

    public function getAll()
    {
        //return DB::table('refrigerants')->paginate(15);
        return Refrigerant::all();
    }
}
