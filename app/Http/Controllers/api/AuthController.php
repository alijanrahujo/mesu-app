<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    function login(Request $request)
    {
        $user= User::where('mesu_code', $request->mesu_code)->first();
        // print_r($data);
            if (!$user || $request->nric != $user->nric) {
                return response([
                    'status' => false,
                    'message' => 'These credentials do not match our records.',
                    'data' => []
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'status' => true,
                'message' => 'Success',
                'token' => $token,
                'data' => $user,
            ];
        
             return response($response, 201);
    }
}
