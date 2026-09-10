<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }
}
