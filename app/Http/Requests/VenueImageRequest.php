<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VenueImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'image' => ['required', 'image']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
