<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ResgistroRequest;
use App\Http\Requests\AccesoRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AutenticarController extends Controller
{
    public function registro(ResgistroRequest $request)
    {
            $user = new User();
            $user -> name = $request ->name;
            $user -> email = $request ->email;
            $user->password = bcrypt($request ->password);
            $user->save();

            $user->roles()->attach($request->roles);

            return response()->json([
                'res'=> true,
                'msg'=>'Usuario Registrado Correctamente'
            ],200);

    
    }

    public function acceso(AccesoRequest $request)
    {

         $user = User::with('roles')->where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'msg' => ['Las credenciales son incorrectas.'],
        ]);
    }

        $token = $user->createToken($request->email)->plainTextToken;  
        
        return response() ->json([
            'res' => true,
            'token' => $token,
            'usuario' => $user
        ],200);

    }

    public function cerrarSesion(Request $request)
    {
        $request->user ()->CurrentAccessToken() ->delete();

        return response() ->json([
            'res' => true,
            'msg' => 'Token Eliminado Correctamente'
        ],200);
    }
}
