<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $email = User::where('email', $request->input('email'))->first();
        if ($email != null) {
            if ($email['email'] == $request->input('email')) {
                return response()->json([
                    'message' => 'Этот emai уже используется',
                ], 401);
            }
        }

        $name = User::where('name', $request->input('name'))->first();
        if ($name != null) {
            if ($name['name'] == $request->input('name')) {
                return response()->json([
                    'message' => 'Этот никнейм уже используется',
                ], 401);
            }
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        Auth::login($user);
        $token = $user->createToken('auth_token');
        return response()->json([
            'message' => 'Вы успешно зарегистрировались',
            'content' => $token->plainTextToken,
        ], 200);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->all())) {
            return response()->json([
                'message' => 'Неверные данные',
            ], 401);
        }
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'Вы успешно вошли',
            'content' => $token,
        ], 200);
    }

    public function me()
    {
        return response()->json([
            'message' => 'Данные о пол-ле',
            'content' => Auth::guard('sanctum')->user()
        ]);
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth('sanctum')->user()->tokens()->delete();
        return response()->json([
            'message' => 'Вы вышли'
        ], 200);
    }
}
