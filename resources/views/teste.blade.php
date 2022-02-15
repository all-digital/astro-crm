@extends('layouts.app2')

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
                    <h3>Informações do Responsável</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">

                                    <label for="cnpj" class="col-lg-3 col-form-label">Empresa
                                    </label>

                                    <div class="col-lg-9">
                                        <input id="txtFirstNameBilling" name="empresa" type="text" class="form-control" value="empresa DSS" readonly>                                      
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="status" class="col-lg-3 col-form-label">Status</label>
                                    <div class="col-lg-9">
                                        <input id="txtEmailAddressBilling" name="status" type="text" readonly
                                            value="Ativo" class="form-control">
                                        <span id="status-valid" style="color:tomato" class="d-none">Campo
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
                                        <input id="txtEmailAddressBilling" name="responsible" type="text" value="responsavel por inserir"
                                            class="form-control">
                                        <span id="responsible-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="status" class="col-lg-3 col-form-label">Data de Inserção</label>
                                    <div class="col-lg-9">
                                        <input id="txtEmailAddressBilling" name="date_insert" type="date" readonly
                                            value="" class="form-control">                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="responsible" class="col-lg-3 col-form-label">Tipo</label>
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
                                                    type="text" class="form-control" >
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
                                                    type="text" readonly class="form-control">
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
                                                    type="text" class="form-control">
                                                    <span id="fantasyName-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="status"
                                                class="col-lg-3 col-form-label">E-mail</label>
                                            <div class="col-lg-9">
                                                <input id="email" name="email"
                                                    type="email" value="" class="form-control">
                                                    <span id="email-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>                                
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="email"
                                                class="col-lg-3 col-form-label">E-mail Financeiro</label>
                                            <div class="col-lg-9">
                                                <input id="emailFinance" name="emailFinance"
                                                type="email" class="form-control">
                                                <span id="email-finance-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="status"
                                                class="col-lg-3 col-form-label">Nome</label>
                                            <div class="col-lg-9">
                                                <input id="name" name="name"
                                                    type="email" value="" class="form-control">
                                                    <span id="name-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 row">
                                            <label for="email"
                                                class="col-lg-3 col-form-label">Sobrenome</label>
                                            <div class="col-lg-9">
                                                <input id="lastName" name="lastName"
                                                type="email" class="form-control">
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
                                        <label for="mainColor" class="col-lg-3 col-form-label">CPF</label>
                                        <div class="col-lg-9">
                                            <input id="cpf" name="cpf" type="text" class="form-control">
                                            <span id="cpf-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="logo" class="col-lg-3 col-form-label">Nome</label>
                                        <div class="col-lg-9">
                                            <input id="cpfName" name="cpfName" type="text" class="form-control">
                                            <span id="cpf-name-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="mainColor" class="col-lg-3 col-form-label">Sobrenome</label>
                                        <div class="col-lg-9">
                                            <input id="cpfLastName" name="cpfLastName" type="text" class="form-control">
                                            <span id="cpf-lastName-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="logo" class="col-lg-3 col-form-label">E-mail de Contato</label>
                                        <div class="col-lg-9">
                                            <input id="cpfEmail" name="cpfEmail" type="email" class="form-control">
                                            <span id="cpf-email-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="mainColor" class="col-lg-3 col-form-label">E-mail Financeiro</label>
                                        <div class="col-lg-9">
                                            <input id="cpfEmailFinance" name="cpfEmailFinance" type="email" class="form-control">
                                            <span id="cpf-email-finance" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <h3>Informações Pessoais</h3>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="monthPayment" class="col-lg-3 col-form-label">Telefone Celular</label>
                                    <div class="col-lg-9">
                                        <input id="phoneCelula" name="phoneCelula" type="text" class="form-control">
                                        <span id="phoneCelula-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="activation" class="col-lg-3 col-form-label">Telefone fixo</label>
                                    <div class="col-lg-9">
                                        <input id="phoneFixo" name="phoneFixo" type="text"
                                            class="form-control">
                                        <span id="phoneFixo-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerPlate" class="col-lg-3 col-form-label">Telefone Whatsap</label>
                                    <div class="col-lg-9">
                                        <input id="phoneWhatsap" name="phoneWhatsap" type="text"
                                            class="form-control">
                                        <span id="phoneWhatsap-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>                                
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerPlate" class="col-lg-3 col-form-label">Endereço</label>
                                    <div class="col-lg-9">
                                        <input id="andress" name="andress" type="text"
                                            class="form-control">
                                        <span id="andress-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>                                
                            </div>                           
                           
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">Numero
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="numberAndress" name="numberAndress" type="text"
                                            class="form-control">
                                        <span id="numberAndress-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">cep
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="zipCode" name="zipCode" type="text"
                                            class="form-control">
                                        <span id="zipCode-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">Cidade
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="city" name="city" type="text"
                                            class="form-control">
                                        <span id="city-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">Estado
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="state" name="state" type="text"
                                            class="form-control">
                                        <span id="state-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">Pais
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="country" name="country" type="text"
                                            class="form-control">
                                        <span id="country-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">Bairro
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="district" name="district" type="text"
                                            class="form-control">
                                        <span id="district-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>         
                            
                                             
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">Complemento
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="complement" name="complement" type="text"
                                            class="form-control">
                                        <span id="complement-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>         
                           
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="pricePerExtraUser" class="col-lg-3 col-form-label">Plataforma Rastreamento
                                    </label>
                                    <div class="col-lg-9">
                                        <input id="trackingPlatform" name="trackingPlatform" type="text"
                                            class="form-control">
                                        <span id="trackingPlatform-valid" style="color:tomato" class="d-none">Campo
                                            Obrigatorio</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h3>Confirmação</h3>
                    <fieldset>
                        <ul>
                            <li>cadastro</li>
                            <li>cep</li>
                        </ul>
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

    <script src="{{'assets\libs\inputmask\min\jquery.inputmask.bundle.min.js'}}"></script>
    {{-- <script src="{{'assets\libs\sweetalert2\sweetalert2.min.js'}}"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
        }

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
                         let bodyCnpj = document.getElementById('displayCnpj')
                         let bodyCpf = document.getElementById('displayCpf')

                        if(document.getElementById('radio-cnpj').checked)
                        {
                            bodyCpf.setAttribute("style","display: none;") 
                            if(bodyCnpj.hasAttribute('style')) bodyCnpj.removeAttribute("style")
                            
                        }else{
                            console.log("tsete")
                            bodyCnpj.setAttribute("style","display: none;") 
                            if(bodyCpf.hasAttribute('style')) bodyCpf.removeAttribute("style")
                            
                        }//end if
                                            
                         
                        console.log("onStepChanging")
                        
                        return true;
                                      
                    
                    },
                    onStepChanged: function (event, currentIndex, priorIndex)
                    { 

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


                               

                        if(document.getElementById('radio-cnpj').checked)
                        {
                                                        
                            let im_cnpj = new Inputmask('99.999.999/9999-99')                        
                            im_cnpj.mask(cnpj)
    
                            let im_monthPayment = new Inputmask( 'currency',{"autoUnmask": false,
                                    radixPoint:",",
                                    groupSeparator: ".",
                                    allowMinus: false,
                                    prefix: ' R$ ',            
                                    digits: 2,
                                    digitsOptional: false,
                                    rightAlign: false,
                                    unmaskAsNumber: false
                                    
                            });

                            ////////////////////////////////

                          cnpj.addEventListener('blur',function(e){                            
                                e.preventDefault()

                                console.log(cnpj.value)
                            
                                let form = document.querySelector('#form-horizontal')

                                cnpj = form.cnpj.value.replace(".", "");
                                cnpj = cnpj.replace(".", "");
                                cnpj = cnpj.replace("-", "");
                                cnpj = cnpj.replace("/", "");   
                                
                                console.log(cnpj)
                            
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
                            })
                           
                            //////////////////////////////////////////////////////////////////////
                        }//end if



                        //cef
                        if(document.getElementById('radio-cpf').checked)
                        {
                            let im_cnpj = new Inputmask('999.999.999-99')                        
                            im_cnpj.mask(cpf)
    
                            let im_monthPayment = new Inputmask( 'currency',{"autoUnmask": false,
                                    radixPoint:",",
                                    groupSeparator: ".",
                                    allowMinus: false,
                                    prefix: ' R$ ',            
                                    digits: 2,
                                    digitsOptional: false,
                                    rightAlign: false,
                                    unmaskAsNumber: false
                                    
                            });



                            //validar cpf                            

                            cpf.addEventListener('blur',function(e){                            
                                e.preventDefault()

                                console.log(cnpj.value)
                            
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
                               }
                               
                            })







                        }//end radio-cpf


                                                               
                                        //validating if the input is empty
                                        // CNPJ

                                //2 e a proxima 
                                //Informaçoes do Cliente
                        if(currentIndex == 2)
                        {
                             
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
                            ///////////CPF

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
                            
                        } //    
                                                              
                        
                        console.log(event, currentIndex, priorIndex)
                    
                    },

                    onCanceled: function (event) { },
                    onFinishing: function (event, currentIndex)
                    { 
              
                        
                        return true;
                                     
                    },

                    onFinished: function (event, currentIndex) { },

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
                }
            
            )});


        
</script>
@endpush