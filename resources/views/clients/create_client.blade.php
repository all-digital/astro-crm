@extends('layouts.app')

@section('nav-header')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Cliente</h4>
        </div>
    </div>
</div>
<!-- end page title -->

@endsection

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Adicionar Cliente</h4>

                <form id="form-horizontal" class="form-horizontal form-wizard-wrapper">

                    <input type="hidden" name="userId" id="userId" value="{{Auth::user()->id}}"
                    required> 

                    <input type="hidden" name="CompanyId" id="CompanyId" value="{{Auth::user()->company->id}}"
                    required> 

                    <input type="hidden" name="nameUser" id="nameUser" value="{{Auth::user()->name}} {{ Auth::user()->last_name }}"
                    required> 


                    <h3>Informações do Responsável</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">

                                    <label for="company" class="col-lg-3 col-form-label">Empresa
                                    </label>

                                    <div class="col-lg-9">
                                        <input id="company" name="company" type="text" class="form-control" value="{{Auth::user()->company->social_Reason}}" readonly data-label="Empresa">  
                                        <span id="companyValid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>                                    
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="infoStatus" class="col-lg-3 col-form-label">Status</label>
                                    <div class="col-lg-9">
                                        <input id="infoStatus" name="infoStatus" type="text" readonly
                                            value="Ativo" class="form-control" data-label="Status">
                                        <span id="statusValid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="responsible" class="col-lg-3 col-form-label">Responsável</label>
                                    <div class="col-lg-9">
                                        <input id="responsible" name="responsible" type="text" value="{{Auth::user()->name}} {{ Auth::user()->last_name }}"
                                            class="form-control" data-label="Responsável" readonly>
                                        <span id="responsibleValid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="date_insert" class="col-lg-3 col-form-label">Data de Inserção</label>
                                    <div class="col-lg-9">
                                        <input id="date_insert" name="date_insert" type="type" readonly
                                            value="02/02/2023" class="form-control" data-label="Data de Inserção">  
                                            <span id="dateInsertValid" style="color:tomato" class="d-none">Campo
                                                Obrigatorio</span>                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="" class="col-lg-3 col-form-label">Tipo</label>
                                    <div class="col-lg-9">   
                                        <input type="radio" id="radio-cnpj" name="cpf_cnpj" value="cnpj" checked>
                                        <label for="cnpj">CNPJ</label><br>                                     
                                        <input type="radio" id="radio-cpf" name="cpf_cnpj" value="cpf" >
                                        <label for="cpf">CPF</label><br> 
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        

                    </fieldset>


                    <h3>Informações do Cliente</h3>
                    <fieldset>
                        <div id="displayCnpj">                        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">

                                            <label for="cnpj"
                                                class="col-lg-3 col-form-label">CNPJ
                                            </label>                                     
                                            
                                            <div class="col-lg-9">
                                                <input id="cnpj" name="cnpj" 
                                                    type="text" class="form-control" data-label="CNPJ">
                                                    <span id="cnpj-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="socialReason"
                                                class="col-lg-3 col-form-label">Razão Social</label>
                                            <div class="col-lg-9">
                                                <input id="socialReason" name="socialReason"
                                                    type="text" readonly class="form-control" data-label="Razão Social">
                                                    <span id="socialReason-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="fantasyName"
                                                class="col-lg-3 col-form-label">Nome Fantasia</label>
                                            <div class="col-lg-9">
                                                <input id="fantasyName" name="fantasyName"
                                                    type="text" class="form-control" data-label="Nome Fantasia">
                                                    <span id="fantasyName-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="email"
                                                class="col-lg-3 col-form-label">E-mail</label>
                                            <div class="col-lg-9">
                                                <input id="email" name="email"
                                                    type="email" value="" class="form-control" data-label="E-mail" >
                                                    <span id="email-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>                                
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="emailFinance"
                                                class="col-lg-3 col-form-label">E-mail Financeiro</label>
                                            <div class="col-lg-9">
                                                <input id="emailFinance" name="emailFinance" 
                                                type="email" class="form-control" data-label="E-mail Financeiro">
                                                <span id="email-finance-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="name"
                                                class="col-lg-3 col-form-label">Nome</label>
                                            <div class="col-lg-9">
                                                <input id="name" name="name"
                                                    type="email" class="form-control" data-label="Nome">
                                                    <span id="name-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>

                                   

                                    
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="phase"
                                            class="col-lg-3 col-form-label">Fase</label>
                                        <div class="col-lg-9">
                                            <input id="phase" name="phase"
                                                type="phase" class="form-control" data-label="phase">
                                                <span id="name-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div> --}}


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="lastName"
                                                class="col-lg-3 col-form-label">Sobrenome</label>
                                            <div class="col-lg-9">
                                                <input id="lastName" name="lastName"
                                                type="email" class="form-control" data-label="Sobrenome" >
                                                <span id="last-name-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>                               
                                </div>                                                    
                        </div> 
                        
                        <div id="displayCpf">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="cpf" class="col-lg-3 col-form-label">CPF</label>
                                        <div class="col-lg-9">
                                            <input id="cpf" name="cpf" type="text" class="form-control" data-label="CPF">
                                            <span id="cpf-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="cpfName" class="col-lg-3 col-form-label">Nome</label>
                                        <div class="col-lg-9">
                                            <input id="cpfName" name="cpfName" type="text" class="form-control" data-label="Nome">
                                            <span id="cpf-name-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="cpfLastName" class="col-lg-3 col-form-label">Sobrenome</label>
                                        <div class="col-lg-9">
                                            <input id="cpfLastName" name="cpfLastName" type="text" class="form-control" data-label="Sobrenome">
                                            <span id="cpf-lastName-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="cpfEmail" class="col-lg-3 col-form-label">E-mail de Contato</label>
                                        <div class="col-lg-9">
                                            <input id="cpfEmail" name="cpfEmail" type="email" class="form-control" data-label="E-mail de Contato">
                                            <span id="cpf-email-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="cpfEmailFinance" class="col-lg-3 col-form-label">E-mail Financeiro</label>
                                        <div class="col-lg-9">
                                            <input id="cpfEmailFinance" name="cpfEmailFinance" type="email" class="form-control" data-label="E-mail Financeiro">
                                            <span id="cpf-email-finance" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="phase"
                                            class="col-lg-3 col-form-label">Fase</label>
                                        <div class="col-lg-9">
                                            <input id="phase" name="phase"
                                                type="phase" class="form-control" data-label="phase">
                                                <span id="name-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </fieldset>


                    <h3>Informações Pessoais</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="phoneCelula" class="col-lg-3 col-form-label">Telefone Celular</label>
                                    <div class="col-lg-9">
                                        <input id="phoneCelula" name="phoneCelula" type="text" class="form-control" data-label="Telefone Celular">
                                        <span id="phoneCelula-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="phoneFixo" class="col-lg-3 col-form-label">Telefone fixo</label>
                                    <div class="col-lg-9">
                                        <input id="phoneFixo" name="phoneFixo" type="text"
                                            class="form-control" data-label="Telefone fixo">
                                        <span id="phoneFixo-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="phoneWhatsap" class="col-lg-3 col-form-label">Telefone Whatsap</label>
                                    <div class="col-lg-9">
                                        <input id="phoneWhatsap" name="phoneWhatsap" type="text"
                                            class="form-control" data-label="Telefone Whatsap">
                                        <span id="phoneWhatsap-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>                                
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="andress" class="col-lg-3 col-form-label">Endereço</label>
                                    <div class="col-lg-9">
                                        <input id="andress" name="andress" type="text"
                                            class="form-control" data-label="Endereço">
                                        <span id="andress-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>                                
                            </div>                           
                           
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="numberAndress" class="col-lg-3 col-form-label">Numero
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="numberAndress" name="numberAndress" type="text"
                                            class="form-control" data-label="Numero">
                                        <span id="numberAndress-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="zipCode" class="col-lg-3 col-form-label">CEP
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="zipCode" name="zipCode" type="text"
                                            class="form-control" data-label="CEP">
                                        <span id="zipCode-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="city" class="col-lg-3 col-form-label">Cidade
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="city" name="city" type="text"
                                            class="form-control" data-label="Cidade">
                                        <span id="city-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="state"
                                        class="col-lg-3 col-form-label">Estado</label>
                                    <div class="col-lg-9">                                

                                            <select name="state" id="state" class="form-control" data-label="Estado">
                                                <option value="" selected></option>
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP" >São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                                <option value="EX">Estrangeiro</option>
                                            </select>
                                            <span id="state-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>                                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="country" class="col-lg-3 col-form-label">Pais
                                    </label>
                                    <div class="col-lg-9">
                                        {{-- <input id="country" name="country" type="text"
                                            class="form-control" data-label="Pais"> --}}
                                            <select name="country" id="country" class="form-control" data-label="Pais">
                                                <option value="Brasil" selected="selected">Brasil</option>
                                                <option value="Afeganistão">Afeganistão</option>
                                                <option value="África do Sul">África do Sul</option>
                                                <option value="Albânia">Albânia</option>
                                                <option value="Alemanha">Alemanha</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antilhas Holandesas">Antilhas Holandesas</option>
                                                <option value="Antárctida">Antárctida</option>
                                                <option value="Antígua e Barbuda">Antígua e Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Argélia">Argélia</option>
                                                <option value="Armênia">Armênia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Arábia Saudita">Arábia Saudita</option>
                                                <option value="Austrália">Austrália</option>
                                                <option value="Áustria">Áustria</option>
                                                <option value="Azerbaijão">Azerbaijão</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrein">Bahrein</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benim">Benim</option>
                                                <option value="Bermudas">Bermudas</option>
                                                <option value="Bielorrússia">Bielorrússia</option>
                                                <option value="Bolívia">Bolívia</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgária">Bulgária</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Butão">Butão</option>
                                                <option value="Bélgica">Bélgica</option>
                                                <option value="Bósnia e Herzegovina">Bósnia e Herzegovina</option>
                                                <option value="Cabo Verde">Cabo Verde</option>
                                                <option value="Camarões">Camarões</option>
                                                <option value="Camboja">Camboja</option>
                                                <option value="Canadá">Canadá</option>
                                                <option value="Catar">Catar</option>
                                                <option value="Cazaquistão">Cazaquistão</option>
                                                <option value="Chade">Chade</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Chipre">Chipre</option>
                                                <option value="Colômbia">Colômbia</option>
                                                <option value="Comores">Comores</option>
                                                <option value="Coreia do Norte">Coreia do Norte</option>
                                                <option value="Coreia do Sul">Coreia do Sul</option>
                                                <option value="Costa do Marfim">Costa do Marfim</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croácia">Croácia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Dinamarca">Dinamarca</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Egito">Egito</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Emirados Árabes Unidos">Emirados Árabes Unidos</option>
                                                <option value="Equador">Equador</option>
                                                <option value="Eritreia">Eritreia</option>
                                                <option value="Escócia">Escócia</option>
                                                <option value="Eslováquia">Eslováquia</option>
                                                <option value="Eslovênia">Eslovênia</option>
                                                <option value="Espanha">Espanha</option>
                                                <option value="Estados Federados da Micronésia">Estados Federados da Micronésia</option>
                                                <option value="Estados Unidos">Estados Unidos</option>
                                                <option value="Estônia">Estônia</option>
                                                <option value="Etiópia">Etiópia</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Filipinas">Filipinas</option>
                                                <option value="Finlândia">Finlândia</option>
                                                <option value="França">França</option>
                                                <option value="Gabão">Gabão</option>
                                                <option value="Gana">Gana</option>
                                                <option value="Geórgia">Geórgia</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Granada">Granada</option>
                                                <option value="Gronelândia">Gronelândia</option>
                                                <option value="Grécia">Grécia</option>
                                                <option value="Guadalupe">Guadalupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernesei">Guernesei</option>
                                                <option value="Guiana">Guiana</option>
                                                <option value="Guiana Francesa">Guiana Francesa</option>
                                                <option value="Guiné">Guiné</option>
                                                <option value="Guiné Equatorial">Guiné Equatorial</option>
                                                <option value="Guiné-Bissau">Guiné-Bissau</option>
                                                <option value="Gâmbia">Gâmbia</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungria">Hungria</option>
                                                <option value="Ilha Bouvet">Ilha Bouvet</option>
                                                <option value="Ilha de Man">Ilha de Man</option>
                                                <option value="Ilha do Natal">Ilha do Natal</option>
                                                <option value="Ilha Heard e Ilhas McDonald">Ilha Heard e Ilhas McDonald</option>
                                                <option value="Ilha Norfolk">Ilha Norfolk</option>
                                                <option value="Ilhas Cayman">Ilhas Cayman</option>
                                                <option value="Ilhas Cocos (Keeling)">Ilhas Cocos (Keeling)</option>
                                                <option value="Ilhas Cook">Ilhas Cook</option>
                                                <option value="Ilhas Feroé">Ilhas Feroé</option>
                                                <option value="Ilhas Geórgia do Sul e Sandwich do Sul">Ilhas Geórgia do Sul e Sandwich do Sul</option>
                                                <option value="Ilhas Malvinas">Ilhas Malvinas</option>
                                                <option value="Ilhas Marshall">Ilhas Marshall</option>
                                                <option value="Ilhas Menores Distantes dos Estados Unidos">Ilhas Menores Distantes dos Estados Unidos</option>
                                                <option value="Ilhas Salomão">Ilhas Salomão</option>
                                                <option value="Ilhas Virgens Americanas">Ilhas Virgens Americanas</option>
                                                <option value="Ilhas Virgens Britânicas">Ilhas Virgens Britânicas</option>
                                                <option value="Ilhas Åland">Ilhas Åland</option>
                                                <option value="Indonésia">Indonésia</option>
                                                <option value="Inglaterra">Inglaterra</option>
                                                <option value="Índia">Índia</option>
                                                <option value="Iraque">Iraque</option>
                                                <option value="Irlanda do Norte">Irlanda do Norte</option>
                                                <option value="Irlanda">Irlanda</option>
                                                <option value="Irã">Irã</option>
                                                <option value="Islândia">Islândia</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Itália">Itália</option>
                                                <option value="Iêmen">Iêmen</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japão">Japão</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordânia">Jordânia</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Lesoto">Lesoto</option>
                                                <option value="Letônia">Letônia</option>
                                                <option value="Libéria">Libéria</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lituânia">Lituânia</option>
                                                <option value="Luxemburgo">Luxemburgo</option>
                                                <option value="Líbano">Líbano</option>
                                                <option value="Líbia">Líbia</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedônia">Macedônia</option>
                                                <option value="Madagáscar">Madagáscar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Maldivas">Maldivas</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Malásia">Malásia</option>
                                                <option value="Marianas Setentrionais">Marianas Setentrionais</option>
                                                <option value="Marrocos">Marrocos</option>
                                                <option value="Martinica">Martinica</option>
                                                <option value="Mauritânia">Mauritânia</option>
                                                <option value="Maurícia">Maurícia</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Moldávia">Moldávia</option>
                                                <option value="Mongólia">Mongólia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Moçambique">Moçambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="México">México</option>
                                                <option value="Mônaco">Mônaco</option>
                                                <option value="Namíbia">Namíbia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Nicarágua">Nicarágua</option>
                                                <option value="Nigéria">Nigéria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Noruega">Noruega</option>
                                                <option value="Nova Caledônia">Nova Caledônia</option>
                                                <option value="Nova Zelândia">Nova Zelândia</option>
                                                <option value="Níger">Níger</option>
                                                <option value="Omã">Omã</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestina">Palestina</option>
                                                <option value="Panamá">Panamá</option>
                                                <option value="Papua-Nova Guiné">Papua-Nova Guiné</option>
                                                <option value="Paquistão">Paquistão</option>
                                                <option value="Paraguai">Paraguai</option>
                                                <option value="País de Gales">País de Gales</option>
                                                <option value="Países Baixos">Países Baixos</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Polinésia Francesa">Polinésia Francesa</option>
                                                <option value="Polônia">Polônia</option>
                                                <option value="Porto Rico">Porto Rico</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Quirguistão">Quirguistão</option>
                                                <option value="Quênia">Quênia</option>
                                                <option value="Reino Unido">Reino Unido</option>
                                                <option value="República Centro-Africana">República Centro-Africana</option>
                                                <option value="República Checa">República Checa</option>
                                                <option value="República Democrática do Congo">República Democrática do Congo</option>
                                                <option value="República do Congo">República do Congo</option>
                                                <option value="República Dominicana">República Dominicana</option>
                                                <option value="Reunião">Reunião</option>
                                                <option value="Romênia">Romênia</option>
                                                <option value="Ruanda">Ruanda</option>
                                                <option value="Rússia">Rússia</option>
                                                <option value="Saara Ocidental">Saara Ocidental</option>
                                                <option value="Saint Martin">Saint Martin</option>
                                                <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                                                <option value="Saint-Pierre e Miquelon">Saint-Pierre e Miquelon</option>
                                                <option value="Samoa Americana">Samoa Americana</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="Santa Helena, Ascensão e Tristão da Cunha">Santa Helena, Ascensão e Tristão da Cunha</option>
                                                <option value="Santa Lúcia">Santa Lúcia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serra Leoa">Serra Leoa</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Singapura">Singapura</option>
                                                <option value="Somália">Somália</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Suazilândia">Suazilândia</option>
                                                <option value="Sudão">Sudão</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Suécia">Suécia</option>
                                                <option value="Suíça">Suíça</option>
                                                <option value="Svalbard e Jan Mayen">Svalbard e Jan Mayen</option>
                                                <option value="São Cristóvão e Nevis">São Cristóvão e Nevis</option>
                                                <option value="São Marino">São Marino</option>
                                                <option value="São Tomé e Príncipe">São Tomé e Príncipe</option>
                                                <option value="São Vicente e Granadinas">São Vicente e Granadinas</option>
                                                <option value="Sérvia">Sérvia</option>
                                                <option value="Síria">Síria</option>
                                                <option value="Tadjiquistão">Tadjiquistão</option>
                                                <option value="Tailândia">Tailândia</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tanzânia">Tanzânia</option>
                                                <option value="Terras Austrais e Antárticas Francesas">Terras Austrais e Antárticas Francesas</option>
                                                <option value="Território Britânico do Oceano Índico">Território Britânico do Oceano Índico</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Toquelau">Toquelau</option>
                                                <option value="Trinidad e Tobago">Trinidad e Tobago</option>
                                                <option value="Tunísia">Tunísia</option>
                                                <option value="Turcas e Caicos">Turcas e Caicos</option>
                                                <option value="Turquemenistão">Turquemenistão</option>
                                                <option value="Turquia">Turquia</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Ucrânia">Ucrânia</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Uruguai">Uruguai</option>
                                                <option value="Uzbequistão">Uzbequistão</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vaticano">Vaticano</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietname">Vietname</option>
                                                <option value="Wallis e Futuna">Wallis e Futuna</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                                <option value="Zâmbia">Zâmbia</option>
                                            </select>
                                        <span id="country-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="district" class="col-lg-3 col-form-label">Bairro
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="district" name="district" type="text"
                                            class="form-control" data-label="Bairro">
                                        <span id="district-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>      
                                                                        
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="complement" class="col-lg-3 col-form-label">Complemento
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="complement" name="complement" type="text"
                                            class="form-control" data-label="Complemento">
                                        <span id="complement-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>         
                           
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="trackingPlatform" class="col-lg-3 col-form-label">Plataforma Rastreamento
                                    </label>
                                    <div class="col-lg-9">                                   
                                        <select name="trackingPlatform" id="trackingPlatform" class="form-control" data-label="Plataforma Rastreamento">
                                            <option value="" selected></option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                        </select>
                                        <span id="trackingPlatform-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>                                                    
                                    </div>

                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h3>Confirmação</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <ul id="empty_field" class="list-group col-md-6 "></ul>
                            </div>
                        </div>
                    </fieldset>    
                    
                </form>

                <div class="modal-container-loading to-hide">
                    <div class="c-loading"> </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection


@push('script-js')
    <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- form wizard -->
    <script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

    <!-- form wizard init -->
    {{-- <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script> --}}

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="{{asset('assets\libs\inputmask\min\jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('custom\css\sweetalert2@11.css')}}"></script>
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

@endpush

@push('customized-js')
<script>    
       // public\assets\libs\jquery-steps\build\jquery.steps.min.js
        /*! 
        * (http://www.jquery-steps.com)        
        */
     
        function validaCPF(cpf) {
                var Soma = 0
                var Resto

                var strCPF = String(cpf).replace(/[^\d]/g, '')
                
                if (strCPF.length !== 11)
                    return false
                
                if ([
                    '00000000000',
                    '11111111111',
                    '22222222222',
                    '33333333333',
                    '44444444444',
                    '55555555555',
                    '66666666666',
                    '77777777777',
                    '88888888888',
                    '99999999999',
                    ].indexOf(strCPF) !== -1)
                    return false

                for (i=1; i<=9; i++)
                    Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);

                Resto = (Soma * 10) % 11

                if ((Resto == 10) || (Resto == 11)) 
                    Resto = 0

                if (Resto != parseInt(strCPF.substring(9, 10)) )
                    return false

                Soma = 0

                for (i = 1; i <= 10; i++)
                    Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i)

                Resto = (Soma * 10) % 11

                if ((Resto == 10) || (Resto == 11)) 
                    Resto = 0

                if (Resto != parseInt(strCPF.substring(10, 11) ) )
                    return false

                return true
        }//end validaCPF

        $(function(){
            $("#form-horizontal").steps(                
                {                
   
                    headerTag: "h3",
                    bodyTag: "fieldset",
                    contentContainerTag: "div",
                    actionContainerTag: "div",
                    stepsContainerTag: "div",
                    cssClass: "wizard",
                    clearFixCssClass: "clearfix",
                    stepsOrientation: 0,

                    titleTemplate: '<span class="number">#index#.</span> #title#',
                    loadingTemplate: '<span class="spinner"></span> #text#',

                    autoFocus: !1,
                    enableAllSteps: !1,
                    enableKeyNavigation: !0,
                    enablePagination: !0,
                    suppressPaginationOnFocus: !0,
                    enableContentCache: !0,
                    enableCancelButton: !1,
                    enableFinishButton: !0,
                    preloadContent: !1,
                    showFinishButtonAlways: !1,
                    forceMoveForward: !1,
                    saveState: !1,
                    startIndex: 0,

                    transitionEffect: "slide",
                    transitionEffectSpeed: 200,

                    onStepChanging: function (event, currentIndex, newIndex)
                    { 
                         //verificando qual opção renderizar cpf ou cnpj

                         let bodyCnpj = document.getElementById('displayCnpj')
                         let bodyCpf = document.getElementById('displayCpf')

                        if(document.getElementById('radio-cnpj').checked)
                        {
                            bodyCpf.setAttribute("style","display: none;") 
                            if(bodyCnpj.hasAttribute('style')) bodyCnpj.removeAttribute("style")
                            
                        }else{
                            console.log("teste")
                            bodyCnpj.setAttribute("style","display: none;") 
                            if(bodyCpf.hasAttribute('style')) bodyCpf.removeAttribute("style")
                            
                        }//end if
                                                                    
                                                
                        return true;                                      
                    
                    },//end onStepChanging

                    onStepChanged: function (event, currentIndex, priorIndex)
                    { 
                        //////info pessoais
                        let company = document.querySelector('#company')
                        let infoStatus = document.querySelector('#infoStatus')
                        let responsible = document.querySelector('#responsible')
                        let dateInsert = document.querySelector('#date_insert')

                        let companyValid = document.querySelector('#companyValid')
                        let statusValid = document.querySelector('#statusValid')
                        let responsibleValid = document.querySelector('#responsibleValid')
                        let dateInsertValid = document.querySelector('#dateInsertValid')


                        //////cnpj
                        
                        let cnpj = document.querySelector('#cnpj')
                        let socialReason = document.querySelector('#socialReason')
                        let fantasyName = document.querySelector('#fantasyName')
                        let name = document.querySelector('#name')
                        let lastName = document.querySelector('#lastName')
                        let email = document.querySelector('#email')
                        let emailFinance = document.querySelector('#emailFinance')


                        let cnpjValid = document.querySelector('#cnpj-valid')
                        let socialReasonValid = document.querySelector('#socialReason-valid')
                        let fantasyNameValid = document.querySelector('#fantasyName-valid')
                        let emailValid = document.querySelector('#email-valid')
                        let emailFinanceValid = document.querySelector('#email-finance-valid')
                        let nameValid = document.querySelector('#name-valid')
                        let lastNameValid = document.querySelector('#last-name-valid')                     

                        //////cpf

                        let cpf = document.querySelector('#cpf')
                        let cpfName = document.querySelector('#cpfName')
                        let cpfLastName = document.querySelector('#cpfLastName')
                        let cpfEmailFinance = document.querySelector('#cpfEmailFinance')
                        let cpfEmail = document.querySelector('#cpfEmail')


                        let cpfValid = document.querySelector('#cpf-valid')
                        let cpfNameValid = document.querySelector('#cpf-name-valid')
                        let cpfLastNameValid = document.querySelector('#cpf-lastName-valid')
                        let cpfEmailValid = document.querySelector('#cpf-email-valid')
                        let cpfEmailFinanceValid = document.querySelector('#cpf-email-finance')


                        ///// informaçoes pessoais
                        
                        let phoneCelula = document.querySelector('#phoneCelula')
                        let phoneFixo = document.querySelector('#phoneFixo')
                        let phoneWhatsap = document.querySelector('#phoneWhatsap')
                        let andress = document.querySelector('#andress')
                        let numberAndress = document.querySelector('#numberAndress')
                        let zipCode = document.querySelector('#zipCode')
                        let city = document.querySelector('#city')
                        let state = document.querySelector('#state')
                        let country = document.querySelector('#country')
                        let complement = document.querySelector('#complement')
                        let trackingPlatform = document.querySelector('#trackingPlatform')
                        let district = document.querySelector('#district')


                        let phoneCelulaValid = document.querySelector('#phoneCelula-valid')
                        let phoneFixoValid = document.querySelector('#phoneFixo-valid')
                        let phoneWhatsapValid = document.querySelector('#phoneWhatsap-valid')
                        let andressValid = document.querySelector('#andress-valid')
                        let numberAndressValid = document.querySelector('#numberAndress-valid')
                        let zipCodeValid = document.querySelector('#zipCode-valid')
                        let cityValid = document.querySelector('#city-valid')
                        let stateValid = document.querySelector('#state-valid')
                        let countryValid = document.querySelector('#country-valid')
                        let complementValid = document.querySelector('#complement-valid')
                        let trackingPlatformValid = document.querySelector('#trackingPlatform-valid')
                        let districtValid = document.querySelector('#district-valid')


                               
                        //cnpj
                        if(document.getElementById('radio-cnpj').checked)
                        {
                                                        
                            let im_cnpj = new Inputmask('99.999.999/9999-99')                       
                            im_cnpj.mask(cnpj)    

                            ////////////////////////////////

                            cnpj.addEventListener('blur',function(e){                            
                                e.preventDefault()

                                console.log(cnpj.value)
                            
                                let form = document.querySelector('#form-horizontal')

                                cnpj = form.cnpj.value.replace(".", "");
                                cnpj = cnpj.replace(".", "");
                                cnpj = cnpj.replace("-", "");
                                cnpj = cnpj.replace("/", "");   
                                
                                // console.log("dddddddddd",cnpj)                              

                                    fetch(`api/cnpj/${cnpj}`,{ 
                                    method:'get',                                
                                    headers:{"Content-type":"application/json"}
    
                                    })            
                                    .then(res=> res.json())
                                    .then(res => {
                                        console.log(res)
    
                                        if(res.status == "ERROR")
                                        {
                                            Swal.fire({
                                                icon: 'error',
                                                title: '<h1>CNPJ inválido.</h1>',                                                                           
                                                showConfirmButton: false,
                                                color: '#fff',
                                                // background:"#c3cef8",
                                                timer: 3500
                                            })
                                            form.cnpj.value = ""
    
                                        }else{
                                            socialReason.value = res.nome
                                            fantasyName.value = res.fantasia                                                                   
                                            email.value = res.email
    
                                            andress.value = res.logradouro
                                            city.value = res.municipio
                                            numberAndress.value = res.numero
                                            phoneFixo.value = res.telefone
                                            state.value = res.uf
                                            complement.value = res.complemento
                                            zipCode.value = res.cep
                                            district.value = res.bairro
                                        }
    
                                    })
                                    .catch((error)=> console.log("erro api cnpj => ",error))

                                                           
                            })//end cnpj                           
                            
                        }// end cnpj


                        //cpf
                        if(document.getElementById('radio-cpf').checked)
                        {
                            let im_cnpj = new Inputmask('999.999.999-99')                        
                            im_cnpj.mask(cpf)

                            //validar cpf                            

                            cpf.addEventListener('blur',function(e){                            
                                e.preventDefault()                               
                            
                                let form = document.querySelector('#form-horizontal')

                                cpf = form.cpf.value.replace(".", "");
                                cpf = cpf.replace(".", "");
                                cpf = cpf.replace("-", "");                                
                                
                                console.log("validação ",cpf)
                                
                               if(!validaCPF(cpf))
                               {
                                    Swal.fire({
                                            icon: 'error',
                                            title: '<h1>CPF inválido.</h1>',                                                                           
                                            showConfirmButton: false,
                                            color: '#fff',
                                            // background:"#c3cef8",
                                            timer: 3500
                                    })
                                    form.cpf.value = ""
                               }
                               
                            })//end valid cpf

                        }//end radio-cpf


                        //add mask telefones

                        let im_phoneCelula = new Inputmask('(99)99999-9999')                        
                        im_phoneCelula.mask(phoneCelula)
    
                        let im_phoneFixo = new Inputmask('(99)99999-9999')                        
                        im_phoneFixo.mask(phoneFixo)
   
                        let im_phoneWhatsap = new Inputmask('(99)99999-9999')                        
                        im_phoneWhatsap.mask(phoneWhatsap)
    
        ///////////////////////////////////////////////////////////////////////////////////

                                //2 e a proxima 
                                //Informaçoes do Cliente
                        if(currentIndex == 3)
                        {

                            // info pessoais

                            if((!company.value.trim()))
                            {                                
                                company.setAttribute("style","background-color: #ffdddd;")
                                companyValid.removeAttribute('class')     
                            }else{
                                company.removeAttribute("style")
                                companyValid.setAttribute("class","d-none")
                            }//end


                            if((!infoStatus.value.trim()))
                            {                                
                                infoStatus.setAttribute("style","background-color: #ffdddd;")
                                statusValid.removeAttribute('class')     
                            }else{
                                infoStatus.removeAttribute("style")
                                statusValid.setAttribute("class","d-none")
                            }//end


                            if((!responsible.value.trim()))
                            {                                
                                responsible.setAttribute("style","background-color: #ffdddd;")
                                responsibleValid.removeAttribute('class')     
                            }else{
                                responsible.removeAttribute("style")
                                responsibleValid.setAttribute("class","d-none")
                            }//end


                            if((!dateInsert.value.trim()))
                            {                                
                                dateInsert.setAttribute("style","background-color: #ffdddd;")
                                dateInsertValid.removeAttribute('class')     
                            }else{
                                dateInsert.removeAttribute("style")
                                dateInsertValid.setAttribute("class","d-none")
                            }//end

                            ////validating if the input is empty
                            //// CNPJ

                            if((!cnpj.value.trim()))
                            {                                
                                cnpj.setAttribute("style","background-color: #ffdddd;")
                                cnpjValid.removeAttribute('class')     
                            }else{
                                cnpj.removeAttribute("style")
                                cnpjValid.setAttribute("class","d-none")
                            }//end


                            if((!socialReason.value.trim()))
                            {
                                socialReason.setAttribute("style","background-color: #ffdddd;")
                                socialReasonValid.removeAttribute('class') 
                            }else{
                                socialReason.removeAttribute("style")
                                socialReasonValid.setAttribute("class","d-none")
                            }//end


                            if((!fantasyName.value.trim()))
                            {
                                fantasyName.setAttribute("style","background-color: #ffdddd;")
                                fantasyNameValid.removeAttribute('class') 
                            }else{

                                fantasyName.removeAttribute("style")
                                fantasyNameValid.setAttribute("class","d-none")
                            }//end


                            if((!name.value.trim()))
                            {
                                name.setAttribute("style","background-color: #ffdddd;")
                                nameValid.removeAttribute('class') 
                            }else{
                                name.removeAttribute("style")
                                nameValid.setAttribute("class","d-none")
                            }//end


                            if((!lastName.value.trim()))
                            {
                                lastName.setAttribute("style","background-color: #ffdddd;")
                                lastNameValid.removeAttribute('class') 
                            }else{
                                lastName.removeAttribute("style")
                                lastNameValid.setAttribute("class","d-none")
                            }//end


                            if((!email.value.trim()))
                            {
                                email.setAttribute("style","background-color: #ffdddd;")
                                emailValid.removeAttribute('class') 
                            }else{
                                email.removeAttribute("style")
                                emailValid.setAttribute("class","d-none")
                            }//end

                            if((!emailFinance.value.trim()))
                            {
                                emailFinance.setAttribute("style","background-color: #ffdddd;")
                                emailFinanceValid.removeAttribute('class') 
                            }else{
                                emailFinance.removeAttribute("style")
                                emailFinanceValid.setAttribute("class","d-none")
                            }//end

                            //validating if the input is empty
                            ////CPF

                            if((!cpf.value.trim()))
                            {
                                cpf.setAttribute("style","background-color: #ffdddd;")
                                cpfValid.removeAttribute('class') 
                            }else{
                                cpf.removeAttribute("style")
                                cpfValid.setAttribute("class","d-none")
                            }//end


                            if((!cpfName.value.trim()))
                            {
                                cpfName.setAttribute("style","background-color: #ffdddd;")
                                cpfNameValid.removeAttribute('class') 
                            }else{
                                cpfName.removeAttribute("style")
                                cpfNameValid.setAttribute("class","d-none")
                            }//end


                            if((!cpfLastName.value.trim()))
                            {
                                cpfLastName.setAttribute("style","background-color: #ffdddd;")
                                cpfLastNameValid.removeAttribute('class') 
                            }else{
                                cpfLastName.removeAttribute("style")
                                cpfLastNameValid.setAttribute("class","d-none")
                            }//end


                            if((!cpfEmailFinance.value.trim()))
                            {
                                cpfEmailFinance.setAttribute("style","background-color: #ffdddd;")
                                cpfEmailFinanceValid.removeAttribute('class') 
                            }else{
                                cpfEmailFinance.removeAttribute("style")
                                cpfEmailFinanceValid.setAttribute("class","d-none")
                            }//end

                            if((!cpfEmail.value.trim()))
                            {
                                cpfEmail.setAttribute("style","background-color: #ffdddd;")
                                cpfEmailValid.removeAttribute('class') 
                            }else{
                                cpfEmail.removeAttribute("style")
                                cpfEmailValid.setAttribute("class","d-none")
                            }//end


                            ////informaçoes pessoais

                            if((!phoneCelula.value.trim()))
                            {
                                phoneCelula.setAttribute("style","background-color: #ffdddd;")
                                phoneCelulaValid.removeAttribute('class') 
                            }else{
                                phoneCelula.removeAttribute("style")
                                phoneCelulaValid.setAttribute("class","d-none")
                            }//end


                            if((!phoneFixo.value.trim()))
                            {
                                phoneFixo.setAttribute("style","background-color: #ffdddd;")
                                phoneFixoValid.removeAttribute('class') 
                            }else{
                                phoneFixo.removeAttribute("style")
                                phoneFixoValid.setAttribute("class","d-none")
                            }//end


                            if((!phoneWhatsap.value.trim()))
                            {
                                phoneWhatsap.setAttribute("style","background-color: #ffdddd;")
                                phoneFixoValid.removeAttribute('class') 
                            }else{
                                phoneWhatsap.removeAttribute("style")
                                phoneFixoValid.setAttribute("class","d-none")
                            }//end


                            if((!andress.value.trim()))
                            {
                                andress.setAttribute("style","background-color: #ffdddd;")
                                andressValid.removeAttribute('class') 
                            }else{
                                andress.removeAttribute("style")
                                andressValid.setAttribute("class","d-none")
                            }//end


                            if((!numberAndress.value.trim()))
                            {
                                numberAndress.setAttribute("style","background-color: #ffdddd;")
                                numberAndressValid.removeAttribute('class') 
                            }else{
                                numberAndress.removeAttribute("style")
                                numberAndressValid.setAttribute("class","d-none")
                            }//end


                            if((!zipCode.value.trim()))
                            {
                                zipCode.setAttribute("style","background-color: #ffdddd;")
                                zipCodeValid.removeAttribute('class') 
                            }else{
                                zipCode.removeAttribute("style")
                                zipCodeValid.setAttribute("class","d-none")
                            }//end


                            if((!city.value.trim()))
                            {
                                city.setAttribute("style","background-color: #ffdddd;")
                                cityValid.removeAttribute('class') 
                            }else{
                                city.removeAttribute("style")
                                cityValid.setAttribute("class","d-none")
                            }//end


                            if((!state.value.trim()))
                            {
                                state.setAttribute("style","background-color: #ffdddd;")
                                stateValid.removeAttribute('class') 
                            }else{
                                state.removeAttribute("style")
                                stateValid.setAttribute("class","d-none")
                            }//end


                            if((!country.value.trim()))
                            {
                                country.setAttribute("style","background-color: #ffdddd;")
                                countryValid.removeAttribute('class') 
                            }else{
                                country.removeAttribute("style")
                                countryValid.setAttribute("class","d-none")
                            }//end


                            if((!complement.value.trim()))
                            {
                                complement.setAttribute("style","background-color: #ffdddd;")
                                complementValid.removeAttribute('class') 
                            }else{
                                complement.removeAttribute("style")
                                complementValid.setAttribute("class","d-none")
                            }//end


                            if((!trackingPlatform.value.trim()))
                            {
                                trackingPlatform.setAttribute("style","background-color: #ffdddd;")
                                trackingPlatformValid.removeAttribute('class') 
                            }else{
                                trackingPlatform.removeAttribute("style")
                                trackingPlatformValid.setAttribute("class","d-none")
                            }//end


                            if((!district.value.trim()))
                            {
                                district.setAttribute("style","background-color: #ffdddd;")
                                districtValid.removeAttribute('class') 
                            }else{
                                district.removeAttribute("style")
                                districtValid.setAttribute("class","d-none")
                            }//end

                            
                        } //    
                                                              
                        
                        // console.log(event, currentIndex, priorIndex)
                    
                    },

                    onCanceled: function (event) { },
                    onFinishing: function (event, currentIndex)
                    { 
                        //////info pessoais
                        let company = document.querySelector('#company')
                        let status = document.querySelector('#status')
                        let responsible = document.querySelector('#responsible')
                        let dateInsert = document.querySelector('#date_insert')

                        //////cnpj
                        let cnpj = document.querySelector('#cnpj')
                        let socialReason = document.querySelector('#socialReason')
                        let fantasyName = document.querySelector('#fantasyName')
                        let name = document.querySelector('#name')
                        let lastName = document.querySelector('#lastName')
                        let email = document.querySelector('#email')
                        let emailFinance = document.querySelector('#emailFinance')


                        //////cpf
                        let cpf = document.querySelector('#cpf')
                        let cpfName = document.querySelector('#cpfName')
                        let cpfLastName = document.querySelector('#cpfLastName')
                        let cpfEmailFinance = document.querySelector('#cpfEmailFinance')
                        let cpfEmail = document.querySelector('#cpfEmail')

              
                        ///// informaçoes pessoais                        
                        let phoneCelula = document.querySelector('#phoneCelula')    
                        let phoneFixo = document.querySelector('#phoneFixo')
                        let phoneWhatsap = document.querySelector('#phoneWhatsap')
                        let andress = document.querySelector('#andress')
                        let numberAndress = document.querySelector('#numberAndress')
                        let zipCode = document.querySelector('#zipCode')
                        let city = document.querySelector('#city')
                        let state = document.querySelector('#state')
                        let country = document.querySelector('#country')
                        let complement = document.querySelector('#complement')
                        let trackingPlatform = document.querySelector('#trackingPlatform')
                        let district = document.querySelector('#district')

                        //
                        let emptyField = document.querySelector('#empty_field')

                        let arrayValid

                        //filtro para saber qual o cliente selecionou cnpj ou cpf
                        if(document.getElementById('radio-cnpj').checked)
                        {
                            arrayValid = [                            
                                company, infoStatus, responsible, dateInsert, cnpj, socialReason, fantasyName, name, lastName, email, emailFinance, phoneCelula, phoneFixo,
                                phoneWhatsap, andress, numberAndress, zipCode, city, state, country , complement, trackingPlatform, district
                            ] 

                        }else{
                            arrayValid = [                            
                                company, infoStatus, responsible, dateInsert, cpf, cpfName, cpfLastName, cpfEmailFinance, cpfEmail, phoneCelula, phoneFixo,
                                phoneWhatsap, andress, numberAndress, zipCode, city, state, country , complement, trackingPlatform, district
                            ] 
                        }


                       let result = arrayValid.filter(element => element.hasAttribute('style') === true)

                       console.log("result => ", result)
                     

                        let resultForEach = "<li><h2>Campos de preenchimento obrigatorio</h2></li>"

                        result.forEach(element => {

                            resultForEach += `<li class="list-group-item">${element.dataset.label}</li>`
                            
                        });

                        emptyField.innerHTML = resultForEach

                        if(result.length == 0 )
                        {                            
                            emptyField.innerHTML = "";
                            return true;
                        }


                                     
                    },

                    onFinished: function (event, currentIndex,res) {


                        let loading = document.querySelector(".modal-container-loading")  
                        loading.classList.remove('to-hide')

                        let typeCnpj = false
                        if("validando -> ",document.getElementById('radio-cnpj').checked) typeCnpj = true

                        let result = {
                        
                        company : document.querySelector('#company').value,
                        infoStatus : document.querySelector('#infoStatus').value,
                        responsible : document.querySelector('#responsible').value,
                        dateInsert : document.querySelector('#date_insert').value,

                        //////cnpj
                        cnpj : document.querySelector('#cnpj').value,
                        socialReason : document.querySelector('#socialReason').value,
                        fantasyName : document.querySelector('#fantasyName').value,
                        name : document.querySelector('#name').value,
                        lastName : document.querySelector('#lastName').value,
                        email : document.querySelector('#email').value,
                        emailFinance : document.querySelector('#emailFinance').value,

                        ////// cpf
                        cpf : document.querySelector('#cpf').value,
                        cpfName : document.querySelector('#cpfName').value,
                        cpfLastName : document.querySelector('#cpfLastName').value,
                        cpfEmailFinance : document.querySelector('#cpfEmailFinance').value,
                        cpfEmail : document.querySelector('#cpfEmail').value,
              
                        ///// informaçoes pessoais                        
                        phoneCelula : document.querySelector('#phoneCelula').value,    
                        phoneFixo : document.querySelector('#phoneFixo').value,
                        phoneWhatsap : document.querySelector('#phoneWhatsap').value,
                        andress : document.querySelector('#andress').value,
                        numberAndress : document.querySelector('#numberAndress').value,
                        zipCode : document.querySelector('#zipCode').value,
                        city : document.querySelector('#city').value,
                        state : document.querySelector('#state').value,
                        country : document.querySelector('#country').value,
                        complement : document.querySelector('#complement').value,
                        trackingPlatform : document.querySelector('#trackingPlatform').value,
                        district : document.querySelector('#district').value,
                        
                        ///// informaçoes  user and company logados 
                        userId: document.querySelector('#userId').value,
                        CompanyId: document.querySelector('#CompanyId').value,
                        nameUser: document.querySelector('#nameUser').value,

                        typeCnpj : typeCnpj

                    }

                    // add phase 
                    
                    console.log(result)
                        
                        
                        fetch('api/client-create',{ 
                                method:'post',        
                                body: JSON.stringify(result),
                                headers:{
                                    "Content-type":"application/json",
                                    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }                            
                        })            
                        .then(res=> res.json())
                        .then(res => { 
                                
                            let loading = document.querySelector(".modal-container-loading")  
                            loading.classList.add('to-hide')

                            console.log(res)
                            // location.reload()     
                            
                            Swal.fire({
                                        icon: 'success',
                                        title: '<h1>Cadastro efetuado com sucesso.</h1>',                                                                           
                                        showConfirmButton: false,
                                        color: '#fff',
                                        // background:"#c3cef8",
                                        timer: 3300
                                    })

                                    setInterval(function () { location.reload()  }, 3500)
                                    
                        })
                        .catch((e)=> {console.log("erro => ", e)} )


                     },

                    onInit: function() { 
                                          
                                   

                    },//end onInit
                    ////////////////////////////////////////////////////////////////////////////////////
                    //// end methods onInit

                    labels: {
                        cancel: "Cancelar",
                        current: "current step:",
                        pagination: "Paginação",
                        finish: "Cadastrar",
                        next: "Próximo",
                        previous: "Anterior",
                        loading: "Carregando ..."
                    }
                }// end object
            
            )});


        
</script>
@endpush