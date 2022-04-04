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
        
                                        <form id="form-create-user" action="">

                                            
                                            <div class="mb-3 row">
                                                <label for="empresas" class="col-md-3 col-form-label">Empresa</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" value="empresa"
                                                    id="create-user-empresa">
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="mb-3 row" readonly>
                                                <label class="col-md-3 col-form-label">Status</label>
                                                <div class="col-md-9">
                                                    <select id="create-user-status" class="form-select" aria-label="Default select example">
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
                                                <label for="example-search-input" class="col-md-3 col-form-label">Login</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="email" value="login Email"
                                                    id="create-user-loginEmail">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Perfil</label>
                                                <div class="col-md-9">
                                                    <select id="create-user-perfil" class="form-select" aria-label="Default select example" required>
                                                        <option selected> </option>
                                                        <option value="admin">Admin</option>
                                                        <option value="gerente comercial">Gerente Comercial</option>
                                                        <option value="vendedorivo" >Vendedor</option>
                                                        <option value="financeiro">Financeiro</option>
                                                        <option value="suporte" >Suporte</option>
                                                        <option value="tecnico" >Tecnico</option>                                                         
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label">Superior</label>
                                                <div class="col-md-9">
                                                    <select id="create-user-upper" class="form-select" aria-label="Default select example" required>
                                                        <option selected> upper</option>
                                                                    
                                                        {{-- Lista todos os Gerentes Comerciais e Admins --}}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-md-3 col-form-label">Nome</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" value="Nome" required
                                                        id="user-create-name">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-tel-input" class="col-md-3 col-form-label">Sobrenome</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" value="Sobrenome" required
                                                        id="user-create-lastname">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-3 col-form-label">Senha</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" x-bind:type="password" value="" required
                                                        id="create-user-password">
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
                                                <label for="example-password-input" class="col-md-3 col-form-label">Confirmação de senha</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" x-bind:type="confirmPassword" value="" required
                                                        id="create-user-password">
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
                                                <label for="logo"
                                                class="col-md-3 col-form-label d-flex flex-column">Avatar <span class="badge rounded-pill bg-light text-dark">obs:  + ou - 40px</span></label> 
                                                <div class="col-md-9">
                                                    <input id="create-user-avatar" name="avatar"
                                                        type="file" class="form-control" title="imagem de mais ou menos 40px">
                                                </div>
                                            </div>
                                            
                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-3 col-form-label">Data de inserção</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" value="02/02/2022" readonly
                                                        id="create-user-password">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="example-password-input" class="col-md-3 col-form-label">Usuario de Inserção</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" value="admin" readonly
                                                        id="create-user-password">
                                                </div>
                                            </div>
                                        
                                        
                                           
                                            <div style="text-align: right;">
                                                <button class="btn btn-info waves-effect waves-light px-5 my-2">Cadastrar</button>
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

 

<script src="assets/js/app.js"></script>
       
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

            }//end eyeConfirm


        }
    }//end app


</script>

@endpush