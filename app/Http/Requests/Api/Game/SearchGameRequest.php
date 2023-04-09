<?php

namespace App\Http\Requests\Api\Game;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SearchGameRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'city_id' => ['required' , Rule::exists('cities' , 'id')],

            'area_id' => ['nullable' , Rule::exists('areas' , 'id')]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
