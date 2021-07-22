<?php

namespace App\Http\Controllers\API;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\GuardarShopRequest;
use App\Http\Requests\ActualizarShopRequest;
use App\Http\Resources\ShopResource;

class ShopVueController extends Controller
{
    // all shops
    public function index()
    {
        $shops = Shop::all()->toArray();
        return array_reverse($shops);
    }

    // add shop
    public function add(Request $request)
    {
        $shop = new Shop([
            'nombre' => $request->nombre,
            'capacidad' => $request->capacidad
        ]);
        $shop->save();

        return response()->json('La tienda ha sido creada');
    }

    // edit shop
    public function edit($id)
    {
        $shop = Shop::find($id);
        return response()->json($shop);
    }

    // update shop
    public function update($id, Request $request)
    {
        $shop = Shop::shop($id);
        $shop->update($request->all());

        return response()->json('La tienda ha sido modificada');
    }

    // delete shop
    public function delete($id)
    {
        $shop = Shop::find($id);
        $shop->delete();

        return response()->json('La tienda ha sido eliminada');
    }
}