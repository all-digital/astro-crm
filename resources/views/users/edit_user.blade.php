@extends('layouts.app')

@section('nav-header')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">EDIÇÃO DE USUÁRIOS</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection


@section('content')

                    <!-- end page title -->

                    <div class="row" x-data="app()">

                            {{-- coluna fantasma  --}}
                            <div class="col-md-12 col-xl-3">                               
                            </div>

                            <div class="col-12 col-xl-6 mx-8">                              
                                
                                <div class="card">
                                    <div class="card-body">        
                                        
                                         <h4 class="card-title mb-2 btn btn-info" style="cursor: default;"> EDIÇÃO DE USUÁRIO</h4>
                                        <p class="card-title-desc">Todos os campos são obrigatorios </p>

                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{session('success')}}
                                            </div>
                                        @endif

                                        @if(session('errorPassword'))
                                            <div class="alert alert-danger">
                                                {{session('errorPassword')}}
                                            </div>
                                        @endif

                                        @if ($errors->has('update_user_password'))
                                            <div class="text-danger" >{{ $errors->get('update_user_password')[0] }} </div>                                                  
                                        @endif
        
                                        <form id="form-update_user" action="{{route('user.update',$id)}}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')  
                                        @csrf 
                                            <div class="mb-3 row">
                                                <label for="update_user_company" class="col-md-3 col-form-label">Empresa</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_company') is-invalid @enderror" value="{{ old('update_user_company') }}" type="text" value="empresa"
                                                    id="update_user_company" name="update_user_company">

                                                    @error('update_user_company')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="mb-3 row" readonly>
                                                <label class="col-md-3 col-form-label">Status</label>
                                                <div class="col-md-9">
                                                    <select name="update_user_status" class="form-select" aria-label="Default select example">
                                                        {{-- <option selected>Selecione</option> --}}
                                                        <option value="ativo" selected >Ativo</option>
                                                        <option value="inativo">Inativo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            {{-- criar um if por q só adm vai poder alterar nesse caso readonly só funciona em input --}}
                                            {{-- <input class="form-control" type="search" value="Ativo"
                                            id="add-status" readonly> --}}                                            
                                            
                                            <div class="mb-3 row">
                                                <label for="update_user_loginEmail" class="col-md-3 col-form-label">Login</label>
                                                <div class="col-md-9">
                                                    <input class="form-control  @error('update_user_loginEmail') is-invalid @enderror" value="{{ old('update_user_loginEmail') }}" type="email" value="login@Email"
                                                    id="update_user_loginEmail" name="update_user_loginEmail" readonly>

                                                    @error('update_user_loginEmail')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Permissão de Usuario</label>
                                                <div class="col-md-9">
                                                     <select id="update_user_perfil" name="update_user_perfil[]" class="select2 form-control select2-multiple @error('update_user_perfil') is-invalid @enderror" multiple="multiple"
                                                         data-placeholder="Adicione o nivel de permissionamento do usuario">
                                                         <optgroup label="Nivel 1">
                                                             <option value="1">Admin</option>                                                        
                                                             <option value="5">Supervior</option>
                                                             <option value="3">Gerente</option>
                                                         </optgroup>
                                                         <optgroup label="Nivel 2">                                                       
                                                             <option value="4" >Coodenador</option>
                                                             {{-- <option value="financeiro">Financeiro</option> --}}
                                                             <option value="6" >Suporte</option>
                                                             {{-- <option value="tecnico" >Tecnico</option>  --}}
                                                         </optgroup>                                                   
         
                                                     </select> 
 
                                                     @error('update_user_perfil')                                           
                                                     <div class="invalid-feedback">
                                                         {{$message}}                                          
                                                     </div>
                                                  @enderror
                                                 </div>
                                             </div>    
                                        
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label" for="update_user_upper">Superior</label>
                                                <div class="col-md-9">
                                                    <select id="update_user_upper" name="update_user_upper" class="form-select" aria-label="Default select example" required>
                                                        <option selected> upper</option>
                                                                    
                                                        {{-- Lista todos os Gerentes Comerciais e Admins --}}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="update_user_name" class="col-md-3 col-form-label">Nome</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_name') is-invalid @enderror" value="{{ old('update_user_name') }}" type="text" value="Nome"  
                                                        id="update_user_name" name="update_user_name">

                                                    @error('update_user_name')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="update_user_lastname" class="col-md-3 col-form-label">Sobrenome</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_lastname') is-invalid @enderror" value="{{ old('update_user_lastname') }}" type="text" value="Sobrenome"  
                                                        id="update_user_lastname" name="update_user_lastname">

                                                    @error('update_user_lastname')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!--  init modal-content -->

                                        <div class="col-sm-6 col-md-4 col-xl-3">

                                            <div class="mb-3 row">                                                    
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light is-invalid"
                                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Alterar senha
                                                    </button>
                                                </div>                                              

                                            </div>


                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="title-msg-password"></h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                        <div id="valid-password-edit">

                                                                <div class="mb-3 row">
                                                                    <label for="update_user_password" class="col-md-3 col-form-label">Senha</label>
                                                                    <div class="col-md-7">
                                                                        
                                                                        <input  class="form-control @error('update_user_password') is-invalid @enderror" value="{{ old('update_user_password') }}" x-bind:type="password" id="password"   
                                                                        id="update_user_password" name='update_user_password'>
                                                                        @error('update_user_password')                                           
                                                                        <div class="invalid-feedback">
                                                                            {{$message}}                                          
                                                                        </div>
                                                                        @enderror
                                                                    </div>
                                                                
                                                                    <div class="col-xl-2 col-lg-2 col-sm-2" x-show="!passwordEye" >
                                                                        <i class="far fa-eye-slash" x-on:click="isEye()"></i> 
                                                                    </div> 

                                                                    <div class="col-xl-2 col-lg-2 col-sm-2" x-show="passwordEye">
                                                                        <i class="far fa-eye"  x-on:click="isEye()"></i> 
                                                                    </div>
                                                                      

                                                                </div>

                                                                <div class="mb-3 row">
                                                                    <label for="update_user_password" class="col-md-3 col-form-label">Confirmação de senha</label>
                                                                    <div class="col-md-7">
                                                                        <input class="form-control @error('update_user_password_confirm') is-invalid @enderror" value="{{ old('update_user_password_confirm') }}" x-bind:type="confirmPassword" id="confirmPassword" value=""  
                                                                            id="update_user_password_confirm" name='update_user_password_confirm'>

                                                                            @error('update_user_password_confirm')                                           
                                                                            <div class="invalid-feedback">
                                                                                {{$message}}                                          
                                                                            </div>
                                                                            @enderror
                                                                    
                                                                    </div>

                                                                    <div class="col-xl-2 col-lg-2 col-sm-2" x-show="! confirmPasswordEye">
                                                                        <i class="far fa-eye-slash" x-on:click="isEyeConfirm()"></i> 
                                                                    </div>

                                                                    <div class="col-xl-2 col-lg-2 col-sm-2" x-show="confirmPasswordEye">
                                                                        <i class="far fa-eye" x-on:click="isEyeConfirm()"></i> 
                                                                    </div>
                                                                    
                                                                </div>

                                                                <div style="text-align: center;">
                                                                    <button id="valid-password-edit-user" class="btn btn-info waves-effect waves-light px-5" x-on:click="validPassword()" onclick="event.preventDefault();">Validar Senha</button>
                                                                </div>
                                                                
                                                        </div>

                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                             <!-- /.modal-content -->

                                             <img class="rounded-circle header-profile-user"
                                                src="{{ url('storage/'.$avatar) }}" style="max-width: 100px; max-height: 100px;"
                                             >
                                            
                                            
                                            <div class="mb-3 row">
                                                <label for="logo"
                                                class="col-md-3 col-form-label d-flex flex-column">Avatar <span class="badge rounded-pill bg-light text-dark">obs:  + ou - 60px</span></label> 
                                                <div class="col-md-9">
                                                    <input name="update_user_avatar" 
                                                        type="file" class="form-control @error('update_user_avatar') is-invalid @enderror" title="imagem de mais ou menos 60px">

                                                        @error('update_user_avatar')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-3 col-form-label">Data de Último Acesso</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_dateLast') is-invalid @enderror" value="{{ old('update_user_dateLast') }}" type="text" readonly
                                                        id="update_user_dateLast" name="update_user_dateLast">

                                                    @error('update_user_dateLast')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="update_user_lastAcess" class="col-md-3 col-form-label">Data de Última Alteração</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_lastAcess') is-invalid @enderror" value="{{ old('update_user_lastAcess') }}" type="text" value="admin" readonly
                                                        id="update_user_lastAcess" name="update_user_lastAcess">
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="update_user_lastUserAcess" class="col-md-3 col-form-label">Usuário da Última Alteração</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_lastUserAcess') is-invalid @enderror" value="{{ old('update_user_lastUserAcess') }}" type="text" value="admin" readonly
                                                        id="update_user_lastUserAcess" name='update_user_lastUserAcess'>
                                                    @error('update_user_lastUserAcess')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-3 col-form-label">Data de inserção</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_date_insert') is-invalid @enderror" value="{{ old('update_user_date_insert') }}" type="text" value="02/02/2022" readonly
                                                        id="update_user_date_insert" name="update_user_date_insert">

                                                    @error('update_user_date_insert')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="update_user_user_insert" class="col-md-3 col-form-label">Usuario de Inserção</label>
                                                <div class="col-md-9">
                                                    <input class="form-control @error('update_user_user_insert') is-invalid @enderror" value="{{ old('update_user_user_insert') }}" type="text" value="admin" readonly
                                                        id="update_user_user_insert" name="update_user_user_insert">

                                                    @error('update_user_user_insert')                                           
                                                        <div class="invalid-feedback">
                                                            {{$message}}                                          
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                                                                  
                                            
                                            <div style="text-align: right;">
                                                <button class="btn btn-info waves-effect waves-light px-5 my-2">Enviar Edição</button>
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
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>


<!-- form advanced init -->
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
 
<script src="{{asset('assets/js/app.js')}}"></script>
       
@endpush


@push('customized-js')

<script>

    function app()
    {
        return {
            password:'password',
            passwordEye: false,
            confirmPassword:'password',
            confirmPasswordEye:false,
            isEye(){

                if(this.password == 'password')
                { 
                    this.passwordEye = true
                    this.password = 'text'

                    return 
                }else{
                    this.passwordEye = false
                    this.password = 'password'

                    return
                }

            },//end eye
            isEyeConfirm(){
                if(this.confirmPassword == 'password')
                { 
                    this.confirmPasswordEye = true
                    this.confirmPassword = 'text'

                    return 
                }else{
                    this.confirmPasswordEye = false
                    this.confirmPassword = 'password'

                    return
                }

            },//end eyeConfirm

            validPassword(){                
                let password = document.getElementById('password').value
                let confirmPassword = document.getElementById('confirmPassword').value
                
                if(password.length <= 8)
                {
                    document.getElementById("title-msg-password").innerHTML = "<p class='text-warning'>Senhas devem ter no minimo de 8 caracteres </p>"
                    return
                }//end if


                if(password === confirmPassword)
                    {
                      document.getElementById("title-msg-password").innerHTML = "<p class='text-success'>Senhas validadas com sucesso</p>"
                        
                }else{
                        document.getElementById("title-msg-password").innerHTML = "<p class='text-danger'>Senhas divergentes</p>"
                }


            }//end valid


        }
    }//end app


</script>

@endpush