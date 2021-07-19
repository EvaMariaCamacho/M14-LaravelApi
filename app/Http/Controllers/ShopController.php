<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarShopRequest;
use App\Http\Requests\ActualizarShopRequest;
use App\Http\Resources\ShopResource;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Shop::all();

        //return ShopResource::collection(Shop::all());

        $shops = Shop::all();
        return response()->json($shops, 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarShopRequest $request)
    {
       // Shop::create($request->all());

        //return response()->json([
       //     'res' => true,
       //     'msg' => 'Shop guardado correctamente'
       // ],200);

       return (new ShopResource(Shop::create($request->all())))
            ->additional(['msg'=>'shop guardado correctamente'])
            ->response()
            ->setStatusCode(202);
       ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
      //  return response()->json([
      //      'res' => true,
      //      'shop' => $shop
      //  ],200);

      return new ShopResource($shop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarShopRequest $request, Shop $shop)
    {
       // $shop -> update($request ->all());
        //return response()->json([
       //     'res' =>true,
       //     'mensaje' =>'Shop Actualizado correctamente'
       // ],200);

       $shop->update($request->all());
       return (new ShopResource($shop))
        ->additional(['msg'=>'shop actualizado correctamente'])
        ->response()
        ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
       // $shop ->delete();

        //return response()->json([
        //    'res' =>true,
        //    'mensaje' =>'Shop eliminado correctamente'
        //],200);

        $shop->delete();
        return (new ShopResource($shop))
            ->additional(['msg'=>'shop eliminado correctamente'])
            ->response()
            ->setStatusCode(202);
    }

    public function spa(){
        return view('welcome');
    }
}
