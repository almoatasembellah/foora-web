<?php

namespace App\Http\Requests\Api\Stadium;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StadiumRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'location_url' => 'required|url',
            'facebook_url' => 'required|url',
            'instagram_url' => 'required|url',
            'image' => ['nullable', 'image', 'mimes:png.jpg,jpeg,gif', 'max:2096']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
