<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Mock de autenticação
        if ($request->email === 'usuario@teste.com' && $request->password === '123456') {
            return response()->json(['message' => 'Login realizado com sucesso', 'token' => 'mock-token-123']);
        }

        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }
}
