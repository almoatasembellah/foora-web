<?php

namespace App\Http\Requests\Admin;

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
            'type' => 'required|numeric',
            'gross_type' => 'required|numeric'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}