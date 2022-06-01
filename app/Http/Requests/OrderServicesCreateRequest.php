<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderServicesCreateRequest extends FormRequest
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
            // 'company' => 'required',            
            // 'status' => 'required',
            // 'vehicles' => 'required',
            // 'equipment' => 'required',
            // 'simcard' => 'required',
            // 'services' => 'required',
            // 'subType' => 'required',
            // 'MonthlyPayment' => 'required',
            // 'user_insert' => 'required',
            // 'client' => 'required',
            // 'addressClient' => 'required',
            // 'zipCode' => 'required',
            // 'cityClient' => 'required',
            // 'countryClient' => 'required',
            // 'AdhesionFee' => 'required',
            // 'recurrence' => 'required',
            // 'typeOS' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'company.required' => 'Campo Empresa Obrigatorio',
            'status.required' => 'Campo Status Obrigatorio',
            'vehicles.required' => 'Campo Veículo Obrigatorio',
            'equipment.required' => 'Campo Equipamento Obrigatorio',
            'simcard.required' => 'Campo Simcard Obrigatorio',
            'services.required' => 'Campo Serviço Obrigatorio',
            'subType.required' => 'Campo Sub Tipo Obrigatorio',        
            'user_insert.required' => 'Campo Usuário de Inserção Obrigatorio',
            'client.required' => 'Campo Cliente Obrigatorio',
            'addressClient.required' => 'Campo Endereço do Cliente Obrigatorio',
            'zipCode.required' => 'Campo Cep do Cliente Obrigatorio',
            'cityClient.required' => 'Campo Cidade do Cliente Obrigatorio',
            'countryClient.required' => 'Campo Estado do Cliente Obrigatorio',
            'typeOS.required' => 'Campo Tipo de O . S  Obrigatorio',
           
            // 'MonthlyPayment.required' => 'Campo Mensalidade Obrigatorio',
            // 'AdhesionFee.required' => 'Campo Empresa Obrigatorio',
            // 'recurrence.required' => 'Campo Empresa Obrigatorio',

            // 'cost.required',
            // 'newSimcard.required',
            // 'newEquipment.required'

        ];
    }
}
