<?php

namespace App\Http\Controllers;

use App\Models\Painting;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarPaintingRequest;
use App\Http\Requests\ActualizarPaintingRequest;
use App\Http\Resources\PaintingResource;

class PaintingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //return Painting::all();

      return PaintingResource::collection(Painting::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPaintingRequest $request)
    {
        //Painting::create($request->all());

       // return response()->json([
      //      'res' => true,
      //     'msg' => 'Painting guardado correctamente'
       // ]);
        return (new PaintingResource(Painting::create($request->all())))
            ->additional(['msg'=>'Guardado correctamente'])
            ->response()
            ->setStatusCode(202);
       
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function show(Painting $painting)
    {
      //  return response()->json([
      //      'res' => true,
      //      'painting' => $painting
      //  ],200);
        return new PaintingResource($painting);
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
        //$painting-> update($request ->all());
        //return response()->json([
        //    'res' =>true,
       //     'mensaje' =>'Painting Actualizado correctamente'
       // ],200);
      
       $painting->update($request->all());
        
        return (new PaintingResource($painting))
        ->additional(['msg'=>'Actualizado correctamente'])
        ->response()
        ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painting $painting)
    {
       // $painting ->delete();

        //return response()->json([
        //    'res' =>true,
        //    'mensaje' =>'Shop eliminado correctamente'
        //],200);

         $painting->delete();
        return (new PaintingResource($painting))
            ->additional(['msg'=>'Eliminado correctamente'])
            ->response()
            ->setStatusCode(202);
    }
}
