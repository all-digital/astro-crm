@extends('layouts.app')

@section('nav-header')

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">EQUIPAMENTOS</h4>
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
                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;">EQUIPAMENTOS</h4>
                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                     
                        <form id="formVehicles" action="{{route('equipment.create')}}" method="POST">
                          @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="company">Empresa</label>
                                            <input type="text" name="company" class="form-control  @error('company') is-invalid @enderror" value="{{ old('company') }}">                                             
                                            
                                            @error('company')                                           
                                                  <div class="invalid-feedback">
                                                   {{$message}}                                          
                                                  </div>
                                            @enderror

                                        </div>
                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control">
                                              <option value="Ativo">Ativo</option>
                                              <option value="Inativo">Inativo</option>
                                            </select>                                          
                                        </div>

                                        <div class="mb-3 mb-4" >                                                                                     
                                        <label class="form-label" for="provider">Fornecedor</label>

                                          <div id="provider">
                                            <select name="provider" class="form-control" >
                                              <option value="Allcom">Allcom</option>
                                              <option value="Suntech">Suntech</option>
                                              <option value="PST">PST</option>
                                              <option value="Queclink">Queclink</option>
                                              <option value="X3TECH">X3TECH</option>
                                              <option value="CalAmp">CalAmp</option>
                                              <option value="MXT">MXT</option>
                                              <option value="Teltonika">Teltonika</option>
                                              <option value="Continental">Continental</option>
                                              <option value="Multiportal">Multiportal</option>
                                              <option value="Multilaser">Multilaser</option>
                                              <option value="Quanta">Quanta</option>
                                              <option value="Newtec">Newtec</option>
                                              <option value="Coban">Coban</option>
                                              <option value="TK">TK</option>
                                              <option value="Real Tracker">Real Tracker</option>
                                              <option value="BWS">BWS</option>
                                              <option value="Virtueyes">Virtueyes</option>
                                              <option value="Hinova Conecta">Hinova Conecta</option>
                                              <option value="Transmeet">Transmeet</option>                                            
                                              <option value="semResultado" class="text-danger">Nenhuma das opções</option>
                                            </select>              
                                          </div>                                                                                     
                                       
                                        </div>
                                        <div class="mb-3 mb-4">
                                          <label for="brand" class="form-label">Marca</label>

                                          <div id="brand">
                                            <select name="brand" class="form-control" >
                                              <option value="Allcom">Allcom</option>
                                              <option value="Global Position">Global Position</option>
                                              <option value="PST">PST</option>
                                              <option value="Suntech">Suntech</option>
                                              <option value="Queclink">Queclink</option>
                                              <option value="X3TECH">X3TECH</option>
                                              <option value="CalAmp">CalAmp</option>
                                              <option value="MXT">MXT</option>
                                              <option value="Teltonika">Teltonika</option>
                                              <option value="Continental">Continental</option>
                                              <option value="Multiportal">Multiportal</option>
                                              <option value="Multilaser">Multilaser</option>
                                              <option value="Newtec">Newtec</option>
                                              <option value="Coban">Coban</option>
                                              <option value="TK">TK</option>
                                              <option value="Real Tracker">Real Tracker</option>
                                              <option value="BWS">BWS</option>                                           
                                              <option value="semResultado" class="text-danger">Nenhuma das opções</option>
                                            </select>              
                                          </div>

                                        </div>
                                       
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">   
                                      
                                        <div class="mb-3 mb-4">
                                          <label for="model" class="form-label">Modelo</label>
                                          <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}">  
                                          
                                          @error('model')                                           
                                            <div class="invalid-feedback">
                                                {{$message}}                                          
                                            </div>
                                          @enderror
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <label for="year" class="form-label">IMEI</label>
                                          <input type="text" name="imei" class="form-control @error('imei') is-invalid @enderror" value="{{ old('imei') }}">       

                                          @error('imei')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                          @enderror
                                          
                                        </div>

                                        <div class="mb-3 mb-4">
                                          <label for="value" class="form-label">Simcards</label>
                                          <input type="text" name="simcards" class="form-control @error('simcards') is-invalid @enderror" value="{{ old('simcards') }}">   
                                          
                                          @error('simcards')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                          @enderror
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
  <script>

    let provider = document.getElementById('provider')
    
    provider.addEventListener('change', function(){

        if(provider.children[0].value == "semResultado")
        {  
          provider.innerHTML = `<div>
            <span class="text-danger">Insira o nome do fornecedor<span> 
            <input type="text" name="provider" class="form-control @error('provider') is-invalid @enderror" value="{{ old('provider') }}" placeholder="Insira o nome do fornecedor">            
          </div>`
            
        }    
    })


    let brand = document.getElementById('brand')
    
    brand.addEventListener('change', function(){

        if(brand.children[0].value == "semResultado")
        {  
          brand.innerHTML = `<div>
            <span class="text-danger">Insira o nome da Marca<span> 
            <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" value="{{ old('brand') }}" placeholder="Insira o nome do marca">            
          </div>`
            
        }    
    })

  </script>        
@endpush



@push('customized-js')
   
@endpush
