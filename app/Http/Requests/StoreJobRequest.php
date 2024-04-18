<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
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
            'category_id' => ['required', 'exists:categories,id'],
            'experience_years' => ['required', 'integer'],
            'job_datisfaction' => ['nullable', 'in:1,2,3'],
            'min_income_range' => ['required', 'integer'],
            'max_income_range' => ['required', 'integer'],
            'revenue_model' => ['required'],
            'company' => ['nullable', 'string', 'max:50'],
            'description' => ['required', 'string'],
            'photo' => ['array', 'max:4'],
            'photo.*' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'name' => ['required', 'string', 'max:45'],
            'needs_advice' => ['nullable', 'boolean'],
            'phone_number' => ['nullable', 'string', 'regex:/^(\+?98|0)?9\d{9}$/'],
            'audio' => ['required', 'file', 'extension:mp3,wav,ogg'],
        ];
    }
}
