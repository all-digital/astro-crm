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

          @inject('listCompany', 'App\Models\Companies')

          <div class="row">

            <div class="col-lg-2"></div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;">VEÍCULOS</h4>
                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                     
                        <form id="formVehicles" action="{{route('vehicles.create')}}" method="POST">
                          @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                       
                                        {{-- super admin  --}}
                                        @if (in_array('Super Admin',$permission))
                                          <div class="mb-3 mb-4">
                                            <label for="company" class="form-label">Empresa</label>
                                              
                                              
                                                <select id="company" name="company" class="form-select" aria-label="Default select example">
                                                    @foreach ($listCompany->all()->toArray() as $item)

                                                        <option value="{{$item['social_Reason']}}">{{$item['social_Reason']}}</option>
                                                        
                                                    @endforeach                                                        
                                                    
                                                </select>
                                                 
                                              
                                          </div>                                                
                                        @else
                                            <div class="mb-3 mb-4">
                                                <label for="company" class="form-label">Empresa</label>
                                               
                                                    <input class="form-control @error('company') is-invalid @enderror"  type="text" readonly
                                                    id="company" name="company" value="{{auth()->user()->company->social_Reason }}">

                                                    @error('company')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                
                                            </div>                                                 
                                        @endif

                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="client">Cliente</label>
                                          <select name="client" class="form-control">

                                            <option value="null">Sem vínculo</option>
                                            @foreach ($client as $item)
                                              <option value="{{$item['id']}}">{{$item['name']}}</option>                                                
                                            @endforeach
                                                                                    
                                          </select>                                          
                                        </div>     

                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control">
                                              <option value="Ativo">Ativo</option>
                                              <option value="Inativo">Inativo</option>
                                            </select>                                          
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="type_vehicles">Veículo</label>
                                          <select name="type_vehicles" class="form-control">
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
                                          <label class="form-label" for="brand">Marca</label>
                                          <select name="brand" class="form-control">
                                            <option value="CHEVROLET">CHEVROLET</option>
                                            <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                            <option value="FIAT">FIAT</option>
                                            <option value="CITROEN">CITROEN</option>
                                            <option value="HONDA">HONDA</option>
                                          </select>                                          
                                        </div>                                                                                                                 

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">  

                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="model">Modelo</label>
                                          <select name="model" class="form-control">
                                            <option value="Marca">Marca</option>
                                            <option value="Marca">Marca</option>
                                            <option value="Marca">Marca</option>
                                            <option value="Marca">Marca</option>
                                            <option value="Marca">Marca</option>
                                          </select>                                          
                                        </div> 
                                      
                                        <div class="mb-3 mb-4">
                                          <label class="form-label" for="year">Ano</label>
                                          <select name="year" class="form-control">
                                            <option value="year">year</option>
                                            <option value="year">year</option>
                                            <option value="year">year</option>
                                            <option value="year">year</option>
                                            <option value="year">year</option>
                                          </select>                                          
                                        </div> 
                                       

                                        <div class="mb-3 mb-4">
                                          <label for="vehicle_plate" class="form-label">Placa</label>
                                          <input type="text" name="vehicle_plate" class="form-control @error('vehicle_plate') is-invalid @enderror" value="{{ old('vehicle_plate') }}">

                                          @error('vehicle_plate')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                          @enderror
                                        </div>
                                        
                                        <div class="mb-3 mb-4">
                                          <label for="value" class="form-label">Value</label>
                                          <input type="text" name="value" class="form-control @error('value') is-invalid @enderror" value="{{ old('value') }}">   
                                          
                                          @error('value')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                          @enderror
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="equipment" class="form-label">Equipamento</label>                                         
                                          <select name="equipment" class="form-control" >                                                                                                                                 
                                            <option value="equipamentos 1">equipamentos</option>
                                            <option value="equipamentos 2">equipamentos 2</option>
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
