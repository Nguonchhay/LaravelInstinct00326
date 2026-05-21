<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return $this->sendSuccess([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ], 'Login successful');
        }

        return $this->sendError('Invalid credentials', 401);
    }
}
