<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fuero;
use App\Models\Causa;

class CausaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$fueros = Fuero::orderBy('id', 'desc')->select('descripcion', 'id')->get();

        $fueros = Fuero::orderBy('id', 'desc')->get();

        //dd($fueros);

        foreach ($fueros as $fuero) {
            dd($fuero->id . ' pingo ' .  $fuero->descripcion);
        }

            

        

        return view('front.causas.create')
            ->with('fueros', $fueros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $causa = new Causa($request->all());
        $causa->save();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
