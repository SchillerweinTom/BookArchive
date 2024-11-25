<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:800',
            'pages' => 'nullable|integer|min:1',
            'image' => 'nullable|image|max:4096|mimes:jpg,jpeg,png',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'title.required' => 'The title is required.',
            'title.string' => 'The title must be a valid string.',
            'title.max' => 'The title must not exceed 255 characters.',

            'description.string' => 'The description must be a valid string.',
            'description.max' => 'The description must not exceed 800 characters.',

            'pages.integer' => 'The number of pages must be a valid integer.',
            'pages.min' => 'The number of pages must be at least 1.',

            'image.image' => 'The uploaded file must be an image.',
            'image.max' => 'The image size must not exceed 4MB.',
            'image.mime' => 'The image must be png, jpg or jpeg.',

            'author_id.required' => 'The author is required.',
            'author_id.exists' => 'The selected author does not exist.',

            'category_id.required' => 'The category is required.',
            'category_id.exists' => 'The selected category does not exist.',
        ];
    }
}
