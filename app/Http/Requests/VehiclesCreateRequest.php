<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiclesCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'company' => 'required|min:2|max:155',
            'status' => 'required|max:20',
            'vehicles' => 'required|min:2|max:155',
            'brand' => 'required|min:2|max:155',
            'model' => 'required|min:2|max:155',
            'year' => 'required',
            'vehicle_plate' => 'required',
            'value' => 'required',
        ];
    }
}
