@extends('layouts.app')

@section('nav-header')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">USUÁRIOS</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection


@section('content')

                    @inject('listCompany', 'App\Models\Companies')

                    <!-- end page title -->
                   
                    <div class="row" x-data="app()">

                            {{-- coluna fantasma  --}}
                            <div class="col-md-12 col-xl-3">                               
                            </div>

                            <div class="col-12 col-xl-6 mx-8">                              
                                
                                <div class="card">
                                    <div class="card-body">        
                                        {{-- <h1 class="card-title font-size-20"><strong>CRIACÃO DE USUÁRIO</strong></h1> --}}
                                        <h4 class="card-title mb-2 btn btn-info" style="cursor: default;">CRIAÇÃO DE USUÁRIO</h4>
                                        <p class="card-title-desc">Todos os campos são obrigatorios </p>  
                                        
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{session('success')}}                                                
                                            </div>
                                        @endif
        
                                        <form id="form-create-user" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                            @csrf

                                            {{-- super admin  --}}
                                            @if (in_array('Super Admin',$permission))
                                                <div class="mb-3 row">
                                                    <label for="create_user_company" class="col-md-3 col-form-label">Empresa</label>
                                                    <div class="col-md-9">
                                                        {{-- <input class="form-control @error('create_user_company') is-invalid @enderror"  type="text" 
                                                        id="create_user_company" name="create_user_company" value="{{$company}}"> --}}
                                                        <select id="create_user_company" name="create_user_company" class="form-select" aria-label="Default select example">
                                                            @foreach ($listCompany->all()->toArray() as $item)

                                                                <option value="{{$item['id']}}">{{$item['social_Reason']}}</option>
                                                                
                                                            @endforeach                                                        
                                                            {{-- <option value="ativo" selected >Ativo</option> --}}
                                                        </select>


                                                       
                                                    </div>
                                                </div>                                                
                                            @else
                                                <div class="mb-3 row">
                                                    <label for="create_user_company" class="col-md-3 col-form-label">Empresa</label>
                                                    <div class="col-md-9">
                                                        <input class="form-control @error('create_user_company') is-invalid @enderror"  type="text" readonly
                                                        id="create_user_company" name="create_user_company" value="{{$company}}">

                                                        @error('create_user_company')                                           
                                                            <div class="invalid-feedback">
                                                                {{$message}}                                          
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>                                                 
                                            @endif
                                            
                                            
                                            
                                            <div class="mb-3 row" readonly>
                                                <label class="col-md-3 col-form-label" for="create_user_status">Status</label>
                                                <div class="col-md-9">
                                                    <select id="create_user_status" name="create_user_status" class="form-select" aria-label="Default select example">                                                        
                                                        <option value="ativo" selected >Ativo</option>
                                                        <option value="inativo">Inativo</option>
                                                    </select>
                                                </div>
                                            </div>                                                                                    
                                            
                                            <div class="mb-3 row">
                                                <label for="create_user_loginEmail" class="col-md-3 col-form-label">Login</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('create_user_loginEmail') is-invalid @enderror" value="{{ old('create_user_loginEmail') }}" type="email" id="create_user_loginEmail" title='Deve ser um email válido' name="create_user_loginEmail" >

                                                    @error('create_user_loginEmail')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                               <label class="col-md-3 col-form-label">Permissão de Usuario</label>
                                               <div class="col-md-9">
                                                    <select id="create_user_perfil" name="create_user_perfil[]" class="select2 form-control select2-multiple @error('create_user_perfil') is-invalid @enderror" multiple="multiple"
                                                        data-placeholder="Adicione o nivel de permissionamento do usuario">
                                                        <optgroup label="Nivel 1">                                                            
                                                            <option value="2">Admin</option> 
                                                            <option value="3">Gerente</option>
                                                            <option value="4">Coordenador</option>                                                            
                                                        </optgroup>
                                                        <optgroup label="Nivel 2">                                                       
                                                            <option value="5" >Comercial</option>
                                                            <option value="6">Vendedor</option>
                                                            <option value="7">Financeiro</option>
                                                            <option value="8" >Suporte</option>
                                                            <option value="9" >Técnico</option> 
                                                        </optgroup>                                                   
        
                                                    </select> 

                                                    @error('create_user_perfil')                                           
                                                    <div class="invalid-feedback">
                                                        {{$message}}                                          
                                                    </div>
                                                 @enderror
                                                </div>
                                            </div>    

                                            {{-- <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label" for="create_user_upper">Superior</label>
                                                <div class="col-md-9">
                                                    <select id="create_user_upper" name="create_user_upper" class="form-select" aria-label="Default select example" >
                                                        <option selected> upper</option>
                                                                    
                                                    </select>
                                                </div>
                                            </div> --}}
                                            {{-- Lista todos os Gerentes Comerciais e Admins --}}

                                            

                                            <div class="mb-3 row">
                                                <label for="user_create_name" class="col-md-3 col-form-label">Nome</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('user_create_name') is-invalid @enderror" value="{{ old('user_create_name') }}" type="text" value="Nome" 
                                                        id="user_create_name" name="user_create_name">

                                                    @error('user_create_name')                                           
                                                       <div class="invalid-feedback">
                                                           {{$message}}                                          
                                                       </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="user_create_lastname" class="col-md-3 col-form-label">Sobrenome</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('user_create_lastname') is-invalid @enderror" value="{{ old('user_create_lastname') }}" type="text" value="Sobrenome" 
                                                        id="user_create_lastname" name="user_create_lastname">

                                                        @error('user_create_lastname')                                           
                                                            <div class="invalid-feedback">
                                                                {{$message}}                                          
                                                            </div>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="create_user_password" class="col-md-3 col-form-label">Senha</label>
                                                <div class="col-md-8">
                                                    <h5 class="modal-title mt-0" id="title-msg-password"></h5>
                                                    <input class="form-control @error('create_user_password') is-invalid @enderror" x-bind:type="password"  
                                                        id="create_user_password" name="create_user_password">

                                                        @error('create_user_password')                                           
                                                            <div class="invalid-feedback">
                                                                {{$message}}                                          
                                                            </div>
                                                        @enderror
                                                </div>

                                                <template x-if="passwordEye">
                                                    <div class="col-xl-1 col-lg-1 col-sm-1">
                                                        <i class="far fa-eye-slash"  x-on:click="isEye()"></i> 
                                                    </div> 
                                                </template>    
                                                                                                               
                                                <template x-if="!passwordEye">
                                                    <div class="col-xl-1 col-lg-1 col-sm-1">
                                                        <i class="far fa-eye"  x-on:click="isEye()"></i> 
                                                    </div>                                     
                                                </template>    

                                            </div>

                                            <div class="mb-3 row">
                                                <label for="create_user_password_confirm" class="col-md-3 col-form-label">Confirmação de senha</label>
                                                <div class="col-md-8">
                                                    <input class="form-control @error('create_user_password_confirm') is-invalid @enderror" x-bind:type="confirmPassword"                                                         id="create_user_password_confirm" name="create_user_password_confirm">

                                                        @error('create_user_password_confirm')                                           
                                                            <div class="invalid-feedback">
                                                                {{$message}}                                          
                                                            </div>
                                                        @enderror
                                                </div>

                                                <template x-if="confirmPasswordEye">
                                                    <div class="col-xl-1 col-lg-1 col-sm-1">
                                                        <i class="far fa-eye-slash" x-on:click="isEyeConfirm()"></i> 
                                                    </div>
                                                </template>

                                                <template x-if="!confirmPasswordEye">
                                                    <div class="col-xl-1 col-lg-1 col-sm-1" x-show="!confirmPasswordEye">
                                                        <i class="far fa-eye" x-on:click="isEyeConfirm()"></i> 
                                                    </div>
                                                </template>

                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="create_user_avatar"
                                                class="col-md-3 col-form-label d-flex flex-column">Avatar <span class="badge rounded-pill bg-light text-dark">obs:  + ou - 60px</span></label> 
                                                <div class="col-md-9">
                                                    <input type="file" id="create_user_avatar" name="create_user_avatar"
                                                         class="form-control @error('create_user_avatar') is-invalid @enderror" title="imagem de mais ou menos 60px">

                                                        @error('create_user_avatar')                                           
                                                            <div class="invalid-feedback">
                                                                {{$message}}                                          
                                                            </div>
                                                        @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="create_user_date_insert" class="col-md-3 col-form-label">Data de inserção</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('create_user_date_insert') is-invalid @enderror" value="{{ old('create_user_date_insert') }}" type="text"  readonly
                                                        id="create_user_date_insert"  name="create_user_date_insert">

                                                    @error('create_user_date_insert')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror    

                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="create_user_user_insert" class="col-md-3 col-form-label">Usuario de Inserção</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('create_user_user_insert') is-invalid @enderror" value="{{ old('create_user_user_insert') }}" type="text" value="admin" readonly
                                                        id="create_user_user_insert" name="create_user_user_insert">

                                                    @error('create_user_user_insert')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror

                                                </div>
                                            </div>
                                                                       
                                           
                                            <div style="text-align: right;">
                                                <button class="btn btn-info waves-effect waves-light px-5 my-2" >Cadastrar</button>
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
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>


<!-- form advanced init -->
<script src="assets/js/pages/form-advanced.init.js"></script>

<script src="{{asset('assets/js/app.js')}}"></script>
       
@endpush

@push('customized-js')

<script>

    function app()
    {
        return {
            password:'password',
            passwordEye: true,
            confirmPassword:'password',
            confirmPasswordEye:true,
            isEye(){

                if(this.password == 'password')
                { 
                    this.passwordEye = false
                    this.password = 'text'

                    return 
                }else{
                    this.passwordEye = true
                    this.password = 'password'

                    return
                }

            },//end eye
            isEyeConfirm(){
                if(this.confirmPassword == 'password')
                { 
                    this.confirmPasswordEye = false
                    this.confirmPassword = 'text'

                    return 
                }else{
                    this.confirmPasswordEye = true
                    this.confirmPassword = 'password'

                    return
                }

            },//end eyeConfirm
           
        }
    }//end app


</script>

@endpush


                                       
                                  