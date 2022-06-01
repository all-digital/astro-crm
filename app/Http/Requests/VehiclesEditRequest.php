<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehiclesEditRequest extends FormRequest
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
            // 'company' => 'required|min:1|max:155',
            // 'status' => 'required|max:20',            
            // 'brand' => 'required|min:2|max:155',
            // 'model' => 'required|min:2|max:155',
            // 'year' => 'required',
            // 'value' => 'required',
            // 'vehicle_plate' => 'required',
            // 'vehicle_plate' => 'required_if:vehicle_plate2,null',
            // 'vehicle_plate2' => 'required_if:vehicle_plate,null',
            
        ];
    }

    public function messages()
    {
        return [
            'company.required' => "Campo Empresa é Obrigatorio",
            'status.required' => 'Campo Status é Obrigatorio',
            'brand.required' => 'Campo Marca é Obrigatorio',
            'model.required' => 'Campo Modelo é Obrigatorio',
            'year.required' => 'Campo Ano é Obrigatorio',
            'value.required' => 'Campo valor é Obrigatorio',

            'required_if' => 'Campo Placa do veiculo obrigatorio',
            
        ];
    }


}
