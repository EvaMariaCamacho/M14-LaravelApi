<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarPaitingRequest;
use App\Http\Requests\ActualizarPaintingRequest;

class PaintingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Painting::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPaintingRequest $request)
    {
        Painting::create($request->all());

        return response()->json([
            'res' => true,
            'msg' => 'Painting guardado correctamente'
        ]);
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function edit(Painting $painting)
    {
        return response()->json([
            'res' => true,
            'painting' => $painting
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPaintingRequest $request, Painting $painting)
    {
        $painting-> update($request ->all());
        return response()->json([
            'res' =>true,
            'mensaje' =>'Painting Actualizado correctamente'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painting $painting)
    {
        $painting ->delete();

        return response()->json([
            'res' =>true,
            'mensaje' =>'Shop eliminado correctamente'
        ],200);
    }
}
