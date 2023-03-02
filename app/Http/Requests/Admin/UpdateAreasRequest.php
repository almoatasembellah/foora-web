<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAreasRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'city_id' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
