<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSchedule extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'location' => 'required|string',
            'service' => 'required|string',
            'quantity' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'message' => 'required|string'
        ];
    }
}
