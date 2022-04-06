@extends('layouts.app')

@section('nav-header')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">SIMCARDS</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection


@section('content')

                    <!-- end page title -->

                    <div class="row">
                            {{-- coluna fantasma  --}}
                            <div class="col-md-12 col-xl-3">                               
                            </div>

                            <div class="col-12 col-xl-6 mx-8">                              
                                
                                <div class="card">
                                    <div class="card-body">        
                                        {{-- <h1 class="card-title font-size-20"><strong>CRIACÃO DE USUÁRIO</strong></h1> --}}
                                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;">EDIÇÂO DE SIMCARD</h4>
                                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                                        @if(session('success'))
                                          <div class="alert alert-success">
                                              {{session('success')}}
                                          </div>
                                         @endif
        
                                        <form id="form-create-simcard" action="{{route('simcard.edit')}}" method="POST"> 
                                         @csrf
                                            <div class="mb-3 row">
                                                <label for="company" class="col-md-3 col-form-label">Empresa</label>
                                                <div class="col-md-9">
                                                    <input  name="company" type="text" value="empresa"
                                                    id="create-simcard-company" class="form-control  @error('company') is-invalid @enderror"  required>

                                                    @error('company')                                           
                                                      <div class="invalid-feedback"> 
                                                          {{$message}}                                          
                                                      </div>
                                                    @enderror

                                                </div>
                                            </div>                                           
                                            
                                            
                                            
                                            <div class="mb-3 row" readonly>
                                                <label class="col-md-3 col-form-label" for="status">Status</label>
                                                <div class="col-md-9">                                               
                                                    <input id="create-simcard-status" name="status" value="estoque"
                                                    class="form-control @error('status') is-invalid @enderror" readonly>  

                                                    @error('status')                                           
                                                      <div class="invalid-feedback"> 
                                                          {{$message}}                                          
                                                      </div>
                                                    @enderror                                                                                                                                                               
                                                </div>
                                            </div>
                                                                                                                                                                    
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label" for="provider">Fornecedor</label>
                                                <div class="col-md-9">
                                                  <div id="provider">
                                                    <select id="create-simcard-provider"  name="provider" class="form-select" aria-label="Default select example"   class="@error('provider') is-invalid @enderror">
                                                        <option value="Allcom" selected>Allcom</option>
                                                        <option value="Vivo">Vivo</option>
                                                        <option value="Claro">Claro</option>
                                                        <option value="Tim">Tim</option>
                                                        <option value="Oi">OI</option>
                                                        <option value="Arqia">Arqia</option> 
                                                        <option value="Sierra">Sierra</option>
                                                        <option value="semResultado" class="text-danger">Outros</option>                                                       
                                                      </select>
                                                  </div>
                                                  @error('brand') <p class="text-danger">{{$message}}</p>  @enderror
                                                </div>
                                            </div>
                                        
                                            <div class="mb-3 row">
                                              <label class="col-md-3 col-form-label" for="brand">Marca</label>
                                              <div class="col-md-9">                                                
                                                <div id="brand">
                                                  <select id="create-simcard-provider"  name="brand" class="form-select" aria-label="Default select example"   class="@error('brand') is-invalid @enderror">                                                      
                                                      <option value="Vivo" selected>Vivo</option>
                                                      <option value="Claro">Claro</option>                                                      
                                                      <option value="Tim">Tim</option>
                                                      <option value="Oi">OI</option>
                                                      <option value="Arqia">Arqia</option> 
                                                      <option value="Sierra">Sierra</option>
                                                      <option value="semResultado" class="text-danger">Outros</option>                                                         
                                                  </select>                                                 
                                                </div>
                                                @error('brand') <p class="text-danger">{{$message}}</p>  @enderror
                                              </div>
                                          
                                          </div>

                                            <div class="mb-3 row">
                                                <label for="iccid" class="col-md-3 col-form-label">ICCID</label>
                                                <div class="col-md-9">
                                                    <input name="iccid" type="text" 
                                                        id="user-simcard-iccid" class="form-control @error('iccid') is-invalid @enderror" value="{{old('iccid')}}" >

                                                      @error('iccid')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                      @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label  class="col-md-3 col-form-label" for="numberLine">Numero da Linha</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="numberLine" value="Sobrenome" 
                                                        id="user-simcard-lineNumber" class="form-control @error('numberLine') is-invalid @enderror">
                                                        
                                                        @error('numberLine')                                           
                                                          <div class="invalid-feedback"> 
                                                              {{$message}}                                          
                                                          </div>
                                                        @enderror
                                                </div>
                                            </div>
                                                                                  
                                           
                                            <div style="text-align: right;">
                                                <button class="btn btn-info waves-effect waves-light px-5 my-2">Editar</button>
                                            </div>

                                        </form>

                                    </div>
                                    {{-- end card body --}}
                                    
                                </div> 
                                {{-- end card --}}

                                {{-- coluna fantasma  --}}
                                <div class="col-md-12 col-xl-3">
                                </div>

                            </div>
                            <!-- end col -->
                    </div>
                        <!-- end row -->

@endsection


@push('script-js')

 

{{-- <script src="assets/js/app.js"></script> --}}
       
@endpush

@push('customized-js')

<script>
   let provider = document.getElementById('provider')
    
    provider.addEventListener('change', function(){

        if(provider.children[0].value == "semResultado")
        {  
          provider.innerHTML = `<div>
            <span class="text-danger">Insira o nome do fornecedor<span> 
            <input type="text" name="provider" class="form-control @error('provider') is-invalid @enderror"  placeholder="Insira o nome do fornecedor" required>            
          </div>`
            
        }    
    })


    let brand = document.getElementById('brand')
    
    brand.addEventListener('change', function(){

        if(brand.children[0].value == "semResultado")
        {  
          brand.innerHTML = `<div>
            <span class="text-danger">Insira o nome da Marca<span> 
            <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror" placeholder="Insira o nome do marca" required>            
          </div>`
            
        }    
    })
    


</script>

@endpush