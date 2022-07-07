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
        if(request('type_vehicles') == "Bicicleta" || request('type_vehicles') == "Pessoa" || request('type_vehicles') == "Pet")
        {
            return [
                'company' => 'required|min:1|max:155',
                'status' => 'required|max:20', 
                'type_vehicles'=> 'required',          
                
                'model' => 'required|min:2|max:155',
                // 'year' => 'required',
                // 'value' => 'required',
               
                
            ];
        }//end if      


        return [
            'company' => 'required|min:1|max:155',
            'status' => 'required|max:20',   
            'type_vehicles'=> 'required',          
            'brand' => 'required|min:2|max:155',
            'model' => 'required|min:2|max:155',
            'year' => 'required',
            // 'value' => 'required',
            'vehicle_plate' => 'required',
            'vehicle_plate' => 'required_if:vehicle_plate2,null',
            'vehicle_plate2' => 'required_if:vehicle_plate,null',
            
        ];
    }

    public function messages()
    {
        return [
            'company.required' => "Campo Empresa é Obrigatorio",
            'status.required' => 'Campo Status é Obrigatorio',
            'type_vehicles.required' => 'Campo Tipo é Obrigatorio',
            'brand.required' => 'Campo Marca é Obrigatorio',
            'model.required' => 'Campo Modelo é Obrigatorio',
            'year.required' => 'Campo Ano é Obrigatorio',
            'value.required' => 'Campo valor é Obrigatorio',

            'required_if' => 'Campo Placa do veiculo obrigatorio',
            
        ];
    }
}
