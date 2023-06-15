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
            'city_id' => ['required', Rule::exists('cities', 'id')],
            'area_id' => ['required', Rule::exists('areas', 'id')],
            'location_url' => 'required|url',
            'space' => 'required|numeric',
            'facebook_url' => 'required|url',
            'instagram_url' => 'required|url',
            'type' => ['required', 'numeric', Rule::in([0, 1, 2])],
            'gross_type' => ['required', 'numeric', Rule::in([0, 1, 2])],
            'image' => ['nullable', 'image', 'mimes:png.jpg,jpeg,gif', 'max:2096']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
