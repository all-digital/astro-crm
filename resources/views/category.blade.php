@extends('layouts.app')

@section('nav-header')

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">CATEGORIAS</h4>
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
                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;"> Categoria </h4>
                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                     
                        <form id="formVehicles" action="{{route('category.store')}}" method="POST">
                          @method('PUT')
                          @csrf

                            <div class="row">

                                <div class="col-lg-6">
                                    <div>
                                     
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

                                        <div class="mb-3 mb-4">
                                          <label for="name" class="form-label">Nome</label>
                                          <input type="text" name="name" class="form-control class="form-control  @error('name') is-invalid @enderror" value="{{old('name')}}"> 
                                          @error('name')                                           
                                            <div class="invalid-feedback">
                                            {{$message}}                                          
                                            </div>
                                          @enderror                                         
                                        </div>                                                                   

                                        <div class="mb-3 mb-4" >                                                                                     
                                          <label class="form-label" for="description">Descrição</label>
                                          <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" cols="50">
                                          </textarea>
                                          @error('description')                                           
                                            <div class="invalid-feedback">
                                            {{$message}}                                          
                                            </div>
                                          @enderror   
                                        </div>
                                         
                                       
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4 mt-lg-0">  
                             
                                        <div class="mb-3 mb-4">
                                          <label for="user_last_edit" class="form-label">Usuário da Última edição</label>
                                          <input type="text" name="user_last_edit" class="form-control" readonly value="Last ">                                          
                                        </div> 

                                        <div class="mb-3 mb-4">
                                          <label for="date_insert" class="form-label">Data de Inserção</label>
                                          <input type="text" name="date_insert" class="form-control" readonly value="25/25/3000">                                          
                                        </div>
                                        
                                        <div class="mb-3 mb-4">
                                          <label for="date_last_edit" class="form-label">Data da Última edição</label>
                                          <input type="text" name="date_last_edit" class="form-control" readonly value="26/66/9855">                                          
                                        </div> 
                                        
                                        <div class="mb-3 mb-4">
                                          <label for="user_insert" class="form-label">Usuário de Inserção</label>
                                          <input type="text" name="user_insert" class="form-control" readonly value="26/66/9855">                                          
                                        </div>   
                                                                
                                    </div>
                                </div>
                            </div>                                                                                 

                            <div style="text-align: right;">
                              <button class="btn btn-info waves-effect waves-light px-5 my-2">Enviar</button>
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
        $( '.select-2-client').select2();
        $('.select-2-simcards').select2();
        $('.select-2-vehicle').select2();
    });


    

  </script>        
@endpush



@push('customized-js')
   
@endpush
