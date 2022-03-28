@extends('layouts.app')

@section('nav-header')

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">VEÍCULOS</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    
@endsection

@section('content')


          <div class="row">

            <div class="col-lg-2"></div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2">VEÍCULOS</h4>
                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="company">Empresa</label>
                                            <input type="text" name="company" class="form-control">
                                        </div>
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control">
                                              <option value="Ativo">Ativo</option>
                                              <option value="Inativo">Inativo</option>
                                            </select>                                          
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="vehicles">Veículo</label>
                                          <select name="vehicles" class="form-control">
                                            <option value="Carro">Carro</option>
                                            <option value="Moto">Moto</option>
                                            <option value="Caminhão">Caminhão</option>
                                            <option value="Onibus">Ônibus</option>
                                            <option value="Microonibus">Microônibus</option>
                                            <option value="Bicicleta">Bicicleta</option>
                                            <option value="Pessoa">Pessoa</option>
                                            <option value="Pet">Pet</option>
                                          </select>                 
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="brand" class="form-label">Marca</label>
                                          <input type="text" name="brand" class="form-control">
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="model" class="form-label">Modelo</label>
                                          <input type="text" name="model" class="form-control">                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">                                       
                                        <div class="mb-3 mb-4">
                                          <label for="year" class="form-label">Ano</label>
                                          <input type="text" name="year" class="form-control">                                            
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="vehicle_plate" class="form-label">Placa</label>
                                          <input type="text" name="vehicle_plate" class="form-control">
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="value" class="form-label">Value</label>
                                          <input type="text" name="value" class="form-control">                                        
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="equipment" class="form-label">Equipamento</label>                                         
                                          <select name="status" class="form-control">
                                            <option value="Ativo">equipamentos</option>
                                            <option value="Inativo">equipamentos 2</option>
                                          </select>  
                                        </div>
                                    </div>
                                </div>
                            </div>                                                                                 

                            <div style="text-align: right;">
                              <button class="btn btn-info waves-effect waves-light px-5 my-2">Cadastrar</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2"></div>

          </div>


@endsection

@push('script-js')

@endpush



@push('customized-js')
   
@endpush
