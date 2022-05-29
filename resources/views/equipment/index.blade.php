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

          @inject('listCompany', 'App\Models\Companies')
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
                     
                        <form id="formEquipment" action="{{route('equipment.store')}}" method="POST"> 
                          @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>


                                      @if (in_array('Super Admin',$permission))
                                            <div class="mb-3 mb-4">
                                              <label class="form-label" for="company">Empresa</label>
                                              <select id="company" name="company" class="form-select" aria-label="Default select example">
                                                @foreach ($listCompany->all()->toArray() as $item)

                                                    <option value="{{$item['id']}}">{{$item['social_Reason']}}</option>
                                                    
                                                @endforeach   
                                              </select>  
                                            </div> 
                                      @else
                                            <div class="mb-3 mb-4">
                                                <label class="form-label" for="company">Empresa</label>
                                                <input type="text" name="company" class="form-control  @error('company') is-invalid @enderror"
                                                value="{{ Auth::user()->company->social_Reason}}" readonly>                                             
                                                
                                                @error('company')                                           
                                                      <div class="invalid-feedback">
                                                      {{$message}}                                          
                                                      </div>
                                                @enderror

                                            </div>                                          
                                      @endif
                                      

                                        <div class="mb-3 mb-4">
                                            <label class="form-label" for="status">Status</label>
                                            <select name="status" class="form-control">
                                              <option value="estoque">Estoque</option>
                                              <option value="vinculado">Vinculado</option>
                                              <option value="manutenção">Manutenção</option>
                                              <option value="cancelado">Cancelado</option>
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

                                        {{-- 
                                          <div class="mb-3 mb-4">
                                          <label for="value" class="form-label">Simcards</label>
                                          <input type="text" name="simcards" class="form-control @error('simcards') is-invalid @enderror" value="{{ old('simcards') }}">   
                                          
                                          @error('simcards')                                           
                                            <div class="invalid-feedback">
                                              {{$message}}                                          
                                            </div>
                                          @enderror
                                        </div> 
                                           --}}
                                          <div class="mb-3 mb-4">
                                            <label for="value" class="form-label">Simcards</label>                                           
                                            
                                            <select id="simcards" name="simcards" class="form-select select-2-simcards " aria-label="Default select example">
                                              <option value="" selected ></option>
                                              <option value=""  >Iccid - numero da linha</option>
                                                @foreach ($simcards as $item)
      
                                                    <option value="{{$item['id']}}">{{ $item['number_of_line'] }} - {{ $item['iccid'] }}</option>
                                                    
                                                @endforeach                                                        
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
  <script>

    $(document).ready(function() {
        $('.select-2-simcards').select2();
    });

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
