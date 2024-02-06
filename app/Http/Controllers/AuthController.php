<?php

namespace App\Http\Controllers;

use App\Services\Auth\AuthService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            $authService = new AuthService();
            $authData = $authService->login($credentials);
            return sendSuccessResponse(
                "Logged in Successfully",
                200,
                $authData
            );
        } catch (Exception $exception) {
            Log::info('Something went wrong'  . $exception->getMessage());
            return sendErrorResponse('Something went wrong');
        }
    }

    public function logout(): JsonResponse
    {
        try {
            auth()->logout();
            return sendSuccessResponse('User logged out Successfully');

        } catch (Exception $exception) {
            return sendErrorResponse('Something went wrong');
        }
    }

    public function register(Request $request): JsonResponse
    {

        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
            $authService = new AuthService();
            $authData = $authService->register($validatedData);

            return sendSuccessResponse('User registered successfully', 201, $authData);

        } catch (ValidationException $exception) {
            return sendErrorResponse($exception->errors());
        } catch (Exception $exception) {
            Log::error('Registration failed: ' . $exception->getMessage());
            return sendErrorResponse('Something went wrong during registration');
        }
    }
}
