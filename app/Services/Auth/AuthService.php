<?php

namespace App\Services\Auth;

use App\Models\User;
use Exception;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login(array $credentials): ?Authenticatable
    {
        if (Auth::attempt($credentials) && auth()->user()->is_active) {
            return auth()->user();
        } else {
            auth()->logout();
            throw new Exception('Invalid credentials');
        }
    }

    public function register($validatedData): ?Authenticatable
    {
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $user->createToken('auth_token')->plainTextToken;

        return $user;
    }
}
