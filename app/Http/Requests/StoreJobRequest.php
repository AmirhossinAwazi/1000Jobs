<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:45',
            'experience-years' => 'required|integer',
            'job-datisfaction' => 'required|in:1,2,3',
            'min-income-range' => 'required|integer',
            'max-income-range' => 'required|integer',
            'revenue-model' => 'required',
            'company' => 'nullable|string|max:50',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:45',
            'needs-advice' => 'nullable|boolean',
            'Phone-number' => 'required|string|regex:/^(0|98|\+98)?(9\d{9}$)/',
        ];
    }
}

