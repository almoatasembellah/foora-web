<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddHoursRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'stadium_id' => ['required' , Rule::exists('stadiums' , 'id')],
            'day' => ['required', 'date'],
            'from' => ['required', 'string'],
            'to' => ['required', 'string'],
            'price' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
