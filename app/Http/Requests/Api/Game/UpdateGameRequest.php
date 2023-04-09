<?php

namespace App\Http\Requests\Api\Game;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
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
            'location_url' => 'required|url',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
