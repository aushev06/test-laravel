<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveCarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'img' => ['file', 'required'],
            'car_model_id' => 'required',
            'transmission' => ['required', Rule::in(['mechanics', 'auto'])],
            'release_year' => ['required', 'date'],
            'state_number' => 'required',
            'color' => 'required',
            'rental_price' => 'required',
        ];
    }
}
