<?php

namespace App\Http\Requests\Game;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GameRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'phone' => 'required|min:11',
            'players_number' => 'required|numeric',
            'price' => 'required|numeric',
            'date'  => 'required|date|date_format:Y-m-d',
            'time' => 'required',
            'city_id' => ['required' , Rule::exists('cities' , 'id')],
            'area_id' => ['required' , Rule::exists('areas' , 'id')],
            'location_url' => 'required|url',
            'type' => ['required' , 'numeric' , Rule::in([1,2])]
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
