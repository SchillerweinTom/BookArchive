<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'birthday' => 'nullable|date',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The author name is required.',
            'name.string' => 'The author name must be a valid string.',
            'name.max' => 'The author name may not be greater than 255 characters.',
            'birthday.date' => 'The birthday must be a valid date.',
        ];
    }
}
