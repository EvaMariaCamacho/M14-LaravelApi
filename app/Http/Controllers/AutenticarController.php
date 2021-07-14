<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ResgistroRequest;

class AutenticarController extends Controller
{
    public function registro(ResgistroRequest $request)
    {
            $user = new User();
            $user -> name = $request ->name;
            $user -> email = $request ->email;
            $user->password = bcrypt($request ->password);
            $user->save();

            return response()->json([
                'res'=> true,
                'msg'=>'Usuario Registrado Correctamente'
            ],200);

    
    }
}
