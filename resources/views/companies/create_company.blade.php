@extends('layouts.app')

@section('nav-header')

      <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">EMPRESAS</h4>                           
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
                    <h4 class="card-title">Adicionar Empresa</h4>

                    <form id="form-horizontal" class="form-horizontal form-wizard-wrapper" >
                        <h3>Informações da Empresa</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">

                                        <label for="cnpj"
                                            class="col-lg-3 col-form-label">CNPJ
                                        </label>
                                        
                                        
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" name="cnpj" 
                                                type="text" class="form-control" >
                                                <span id="cnpj-valid" style="color:tomato" class="d-none valid-feedback">Campo Obrigatorio : minimo de 14 caracteres</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="socialReason"
                                            class="col-lg-3 col-form-label">Razão Social</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" name="socialReason"
                                                type="text" readonly class="form-control">
                                                <span id="socialReason-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 2 caracteres</span>
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
                                            <input id="txtCompanyBilling" name="fantasyName"
                                                type="text" class="form-control">
                                                <span id="fantasyName-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 2 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="status"
                                            class="col-lg-3 col-form-label">Status</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="status"
                                                type="text" readonly value="Ativo" class="form-control">
                                                <span id="status-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="responsible"
                                            class="col-lg-3 col-form-label">Responsável</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="responsible"
                                                type="text" class="form-control">
                                                <span id="responsible-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 2 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="email"
                                            class="col-lg-3 col-form-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="email"
                                            type="text" class="form-control">
                                            <span id="email-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 6 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        
                        <h3>Informações de Layout</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="mainColor"
                                            class="col-lg-3 col-form-label">Cor Principal</label>
                                        <div class="col-lg-9">
                                            <input id="mainColor" name="mainColor"
                                                type="color" class="form-control" style="padding: 15px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="logo"
                                            class="col-lg-3 col-form-label">Logo</label>
                                        <div class="col-lg-9">
                                            <input id="logo" name="logo"
                                                type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" name="txtCityShipping" type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping"
                                                name="txtStateProvinceShipping" type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h3>Informações de Pagamento</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="monthPayment" class="col-lg-3 col-form-label">Mensalidade</label>
                                        <div class="col-lg-9">
                                            <input id="txtNameCard" name="monthPayment" type="text"
                                                class="form-control">
                                                <span id="monthPayment-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="activation"
                                            class="col-lg-3 col-form-label">Ativação</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" name="activation"
                                            type="text" class="form-control">
                                            <span id="activation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="pricePerPlate"
                                            class="col-lg-3 col-form-label">Preço por Placa</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" name="pricePerPlate"
                                                type="text" class="form-control">
                                                <span id="pricePerPlate-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="userLimit"
                                            class="col-lg-3 col-form-label">Limite de Usuários</label>
                                        <div class="col-lg-9">                                          

                                                <select name="userLimit" id="txtCardVerificationNumber" class="form-control">
                                                    <option value="">vazio</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5" selected>5</option>
                                                    <option value="6" >6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11" >11</option>
                                                    <option value="12" >12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17" >17</option>
                                                    <option value="18" >18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29" >29</option>
                                                    <option value="30" >30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35" >35</option>
                                                    <option value="36" >36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41" >41</option>
                                                    <option value="42" >42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53" >53</option>
                                                    <option value="54" >54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                    <option value="60">60</option>
                                                    <option value="61">61</option>
                                                    <option value="62">62</option>
                                                    <option value="63">63</option>
                                                    <option value="64">64</option>
                                                    <option value="65">65</option>
                                                    <option value="66">66</option>
                                                    <option value="67">67</option>
                                                    <option value="68">68</option>
                                                    <option value="69" >69</option>
                                                    <option value="70" >70</option>
                                                    <option value="71">71</option>
                                                    <option value="72">72</option>
                                                    <option value="73">73</option>
                                                    <option value="74">74</option>
                                                    <option value="75" >75</option>
                                                    <option value="76" >76</option>
                                                    <option value="77">77</option>
                                                    <option value="78">78</option>
                                                    <option value="79">79</option>
                                                    <option value="80">80</option>
                                                    <option value="81" >81</option>
                                                    <option value="82" >82</option>
                                                    <option value="83">83</option>
                                                    <option value="84">84</option>
                                                    <option value="85">85</option>
                                                    <option value="86">86</option>
                                                    <option value="87">87</option>
                                                    <option value="88">88</option>
                                                    <option value="89">89</option>
                                                    <option value="90">90</option>
                                                    <option value="91">91</option>
                                                    <option value="92">92</option>
                                                    <option value="93" >93</option>
                                                    <option value="94" >94</option>
                                                    <option value="95">95</option>
                                                    <option value="96">96</option>
                                                    <option value="97">97</option>
                                                    <option value="98">98</option>
                                                    <option value="99">99</option>
                                                </select>
                                                <span id="userLimit-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="pricePerExtraUser"
                                            class="col-lg-3 col-form-label">Preço por usuário extra</label>
                                        <div class="col-lg-9">
                                            <input id="txtExpirationDate" name="pricePerExtraUser"
                                                type="text" class="form-control">
                                                <span id="pricePerExtraUser-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <h3>Confirmação</h3>
                        <fieldset>
                            {{-- info readonly not changeable--}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        {{-- readonly --}}
                                        <label for="cnpjConfirmation"
                                            class="col-lg-3 col-form-label">CNPJ
                                        </label>

                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" readonly name="cnpjConfirmation"
                                                type="text" class="form-control">
                                                <span id="cnpjConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 14 caracteres</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="socialReasonConfirmation"
                                            class="col-lg-3 col-form-label">Razão Social</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" readonly name="socialReasonConfirmation"
                                                type="text" class="form-control">
                                                <span id="socialReasonConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 2 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="fantasyNameConfirmation"
                                            class="col-lg-3 col-form-label">Nome Fantasia</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling2" readonly name="fantasyNameConfirmation"
                                                type="text" class="form-control">
                                                <span id="fantasyNameConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 2 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="statusConfirmation"
                                            class="col-lg-3 col-form-label">Status</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" readonly name="statusConfirmation"
                                                type="text" readonly value="Ativo" class="form-control">
                                                <span id="statusConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="responsibleConfirmation"
                                            class="col-lg-3 col-form-label">Responsável</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" readonly name="responsibleConfirmation"
                                                type="text" class="form-control">
                                                <span id="responsibleConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 2 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="emailConfirmation"
                                            class="col-lg-3 col-form-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" readonly name="emailConfirmation"
                                            type="text" class="form-control">
                                            <span id="emailConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio : minimo de 6 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="mainColorConfirmation"
                                            class="col-lg-3 col-form-label">Cor Principal</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameShipping" readonly name="mainColorConfirmation"
                                                type="color" class="form-control" style="padding: 15px;">
                                                <span id="mainColorConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="logoConfirmation"
                                            class="col-lg-3 col-form-label">Logo</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" readonly name="logoConfirmation"
                                                type="file" class="form-control">
                                                <span id="logoConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" readonly name="txtCityShipping" type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping"
                                                name="txtStateProvinceShipping" readonly type="hidden"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="monthPaymentConfirmation" class="col-lg-3 col-form-label">Mensalidade</label>
                                        <div class="col-lg-9">
                                            <input id="txtNameCard" readonly name="monthPaymentConfirmation" type="text"
                                                class="form-control">
                                                <span id="monthPaymentConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="activationConfirmation"
                                            class="col-lg-3 col-form-label">Ativação</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" readonly name="activationConfirmation"
                                            type="text" class="form-control">
                                            <span id="activationConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="pricePerPlateConfirmation"
                                            class="col-lg-3 col-form-label">Preço por Placa</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" readonly name="pricePerPlateConfirmation"
                                                type="text" class="form-control">
                                                <span id="pricePerPlateConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="userLimitConfirmation"
                                            class="col-lg-3 col-form-label">Limite de Usuários</label>
                                        <div class="col-lg-9">
                                            <input id="txtCardVerificationNumber"
                                                name="userLimitConfirmation" readonly type="number" value="5"
                                                class="form-control">
                                                <span id="userLimitConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="pricePerExtraUserConfirmation"
                                            class="col-lg-3 col-form-label">Preço por usuário extra</label>
                                        <div class="col-lg-9">
                                            <input id="txtExpirationDate" readonly name="pricePerExtraUserConfirmation"
                                                type="text" class="form-control">
                                                <span id="pricePerExtraUserConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
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
 
    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>   

    <script src="{{asset('assets\libs\inputmask\min\jquery.inputmask.bundle.min.js')}}"></script>
    
    <script src="{{asset('custom\css\sweetalert2@11.css')}}"></script> 
        
@endpush

@push('customized-js')
    <script>      
        /*! 
        * (http://www.jquery-steps.com)        
        */
     
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

                    onStepChanging: function() {
                                    
                        let form = document.querySelector('#form-horizontal')

                        //Informações de Layout
                        let validCnpj = document.querySelector('#cnpj-valid')
                        let validSocialReason = document.querySelector('#socialReason-valid')
                        let validFantasyName = document.querySelector('#fantasyName-valid')
                        let validStatus = document.querySelector('#status-valid')
                        let validResponsible = document.querySelector('#responsible-valid')
                        let validEmail = document.querySelector('#email-valid')

                        //Informações de Pagamento
                        let validMonthPayment = document.querySelector('#monthPayment-valid')
                        let validActivation = document.querySelector('#activation-valid')
                        let validPricePerPlate = document.querySelector('#pricePerPlate-valid')
                        let validUserLimit = document.querySelector('#userLimit-valid')
                        let validPricePerExtraUser = document.querySelector('#pricePerExtraUser-valid')

                        //validating if the input is empty

                        if((!form.cnpj.value.trim())){
                            
                            form.cnpj.setAttribute("style","background-color: #ffdddd;")
                            validCnpj.removeAttribute('class')     
                        }

                        if((!form.socialReason.value.trim()) || form.socialReason.value.length <=2){           

                            form.socialReason.setAttribute("style","background-color: #ffdddd;")
                            validSocialReason.removeAttribute('class')                        
                        }

                        if((!form.fantasyName.value.trim()) || form.fantasyName.value.length <=2){

                            form.fantasyName.setAttribute("style","background-color: #ffdddd;")
                            validFantasyName.removeAttribute('class')
                        }

                        if((!form.status.value.trim())){

                            form.status.setAttribute("style","background-color: #ffdddd;")
                            validStatus.removeAttribute('class') 
                        }

                        if((!form.responsible.value.trim()) || form.responsible.value.length <= 2 ){

                            form.responsible.setAttribute("style","background-color: #ffdddd;")
                            validResponsible.removeAttribute('class')
                        }

                        if((!form.email.value.trim()) || form.email.value.length <= 5 ){

                            form.email.setAttribute("style","background-color: #ffdddd;")
                            validEmail.removeAttribute('class')
                        }

                        // if((!form.monthPayment.value.trim())){
                        //     form.monthPayment.setAttribute("style","background-color: #ffdddd;")
                        //     validMonthPayment.removeAttribute('class')
                        // }

                        // if ((!form.activation.value.trim())){
                        //     form.activation.setAttribute("style","background-color: #ffdddd;")
                        //     validActivation.removeAttribute('class')
                        // }

                        // if((!form.pricePerPlate.value.trim())){
                        //     form.pricePerPlate.setAttribute("style","background-color: #ffdddd;")
                        //     validPricePerPlate.removeAttribute('class')
                        // }

                        if ((!form.userLimit.value.trim())){
                            form.userLimit.setAttribute("style","background-color: #ffdddd;")
                            validUserLimit.removeAttribute('class')                           
                        }

                        // if((!form.pricePerExtraUser.value.trim())){
                        //     form.pricePerExtraUser.setAttribute("style","background-color: #ffdddd;")
                        //     validPricePerExtraUser.removeAttribute('class')
                        // }

                        //end valitation 


                        //validating filling in the fields
                        //if filled in the field and cleared

                        //Informações da Empresa => caso campo esteja preenchido, ele remove a msg de erro
                        if(form.cnpj.value.length >= 14){
                            form.cnpj.removeAttribute("style")
                            validCnpj.setAttribute('class',"d-none")   
                        }                            
                            
                        if(form.socialReason.value.length >= 2){
                            form.socialReason.removeAttribute("style")
                            validSocialReason.setAttribute('class',"d-none")    
                        }
                                                        

                        if(form.fantasyName.value.length >= 2 ){
                            form.fantasyName.removeAttribute("style")
                            validFantasyName.setAttribute('class',"d-none")   
                        }
                                                        

                        if(form.status.value.length >= 1){
                            form.status.removeAttribute("style")
                            validStatus.setAttribute('class',"d-none")   
                        }                                                         

                        if(form.responsible.value.length >= 2){
                            form.responsible.removeAttribute("style")
                            validResponsible.setAttribute('class',"d-none")
                        }
                                                         
                                                    
                        if(form.email.value.length >= 6){
                            form.email.removeAttribute("style")
                            validEmail.setAttribute('class',"d-none") 
                        }                                            

                        //Informações de Pagamento
                        if(form.monthPayment.value.length >= 1){
                            form.monthPayment.removeAttribute("style")
                            validMonthPayment.setAttribute('class',"d-none")
                        }

                        if(form.activation.value.length >= 1){
                            form.activation.removeAttribute("style")
                            validActivation.setAttribute('class',"d-none")                              
                        }

                        if(form.pricePerPlate.value.length >= 1){
                            form.pricePerPlate.removeAttribute("style")
                            validPricePerPlate.setAttribute('class',"d-none")                              
                        }

                        if(form.userLimit.value.length >= 1){
                            form.userLimit.removeAttribute("style")
                            validUserLimit.setAttribute('class',"d-none")                              
                        }

                        if(form.pricePerExtraUser.value.length >= 1){
                            form.pricePerExtraUser.removeAttribute("style")
                            validPricePerExtraUser.setAttribute('class',"d-none")                              
                        }

                        return !0                       

                    },
                        //// end method onStepChanging

                    onStepChanged: function() {

                        //atribuindo os valores do form para o form de validação
                        let form = document.querySelector('#form-horizontal')

                        form.cnpjConfirmation.value = form.cnpj.value	
                        form.socialReasonConfirmation.value = form.socialReason.value
                        form.fantasyNameConfirmation.value = form.fantasyName.value
                        form.statusConfirmation.value = form.status.value
                        form.responsibleConfirmation.value = form.responsible.value
                        form.emailConfirmation.value = form.email.value
                        form.mainColorConfirmation.value = form.mainColor.value
                        // form.logoConfirmation.value = form.logo.value
                        form.userLimitConfirmation.value = form.userLimit.value
                        form.monthPaymentConfirmation.value = form.monthPayment.value
                        form.activationConfirmation.value = form.activation.value
                        form.pricePerPlateConfirmation.value = form.pricePerPlate.value
                        form.pricePerExtraUserConfirmation.value = form.pricePerExtraUser.value

                        // console.log("onStepChanging => esta carregando os campo para confirmação")

                    },
                        //// end method onStepChanged

                    onCanceled: function() {},
                        //// end method onCanceled

                    onFinishing: function() {

                        let form = document.querySelector('#form-horizontal')    

                        let validCnpjConfirmation = document.querySelector('#cnpjConfirmation-valid')
                        let validSocialReasonConfirmation = document.querySelector('#socialReasonConfirmation-valid')
                        let validFantasyNameConfirmation = document.querySelector('#fantasyNameConfirmation-valid')
                        let validStatusConfirmation = document.querySelector('#statusConfirmation-valid')
                        let validResponsibleConfirmation = document.querySelector('#responsibleConfirmation-valid')
                        let validEmailConfirmation = document.querySelector('#emailConfirmation-valid')
                        let validMainColorConfirmation = document.querySelector('#mainColorConfirmation-valid')
                        let validLogoConfirmation = document.querySelector('#logoConfirmation-valid')
                        let validMonthPaymentConfirmation = document.querySelector('#monthPaymentConfirmation-valid')
                        let validActivationConfirmation = document.querySelector('#activationConfirmation-valid')
                        let validPricePerPlateConfirmation = document.querySelector('#pricePerPlateConfirmation-valid')
                        let validUserLimitConfirmation = document.querySelector('#userLimitConfirmation-valid')
                        let validPricePerExtraUserConfirmation = document.querySelector('#pricePerExtraUserConfirmation-valid')


                        if(form.cnpjConfirmation.value == "" || form.cnpjConfirmation.value.length <= 13)
                        {
                            form.cnpjConfirmation.setAttribute("style","background-color: #ffdddd;")
                            validCnpjConfirmation.removeAttribute('class')  
                        }else{
                            form.cnpjConfirmation.removeAttribute("style")
                            validCnpjConfirmation.setAttribute("class","d-none")
                        }

                        if(form.socialReasonConfirmation.value == "" || form.socialReasonConfirmation.value.length <= 1)
                        {
                            form.socialReasonConfirmation.setAttribute("style","background-color: #ffdddd;")
                            validSocialReasonConfirmation.removeAttribute('class') 
                        }else{
                            form.socialReasonConfirmation.removeAttribute("style")
                            validSocialReasonConfirmation.setAttribute("class","d-none")
                        }

                        if(form.fantasyNameConfirmation.value == "" || form.fantasyNameConfirmation.value.length <= 1)
                        {
                            form.fantasyNameConfirmation.setAttribute("style","background-color: #ffdddd;")
                            validFantasyNameConfirmation.removeAttribute('class') 
                        }else{
                            form.fantasyNameConfirmation.removeAttribute("style")
                            validFantasyNameConfirmation.setAttribute("class","d-none")
                        }

                        if(form.statusConfirmation.value == "")
                        {
                            form.statusConfirmation.setAttribute("style","background-color: #ffdddd;")
                            validStatusConfirmation.removeAttribute('class') 
                        }else{
                            form.statusConfirmation.removeAttribute("style")
                            validStatusConfirmation.setAttribute("class","d-none")
                        }

                        if(form.responsibleConfirmation.value == "" || form.responsibleConfirmation.value.length <= 1 )
                        {
                            form.responsibleConfirmation.setAttribute("style","background-color: #ffdddd;")
                            validResponsibleConfirmation.removeAttribute('class') 
                        }else{
                            form.responsibleConfirmation.removeAttribute("style")
                            validResponsibleConfirmation.setAttribute("class","d-none")
                        }

                        if(form.emailConfirmation.value == "" || form.emailConfirmation.value.length <=5)
                        {
                            form.emailConfirmation.setAttribute("style","background-color: #ffdddd;")
                            validEmailConfirmation.removeAttribute('class') 
                        }else{
                            form.emailConfirmation.removeAttribute("style")
                            validEmailConfirmation.setAttribute("class","d-none")
                        }


                        // if(form.mainColorConfirmation.value == "")
                        // {
                        //     form.mainColorConfirmation.setAttribute("style","background-color: #ffdddd;")
                        //     validMainColorConfirmation.removeAttribute('class') 
                        // }
                        // if(form.logoConfirmation.value == "")
                        // {
                        //     form.logoConfirmation.setAttribute("style","background-color: #ffdddd;")
                        //     validLogoConfirmation.removeAttribute('class') 
                        // }

                        // if(form.monthPaymentConfirmation.value == "")
                        // {
                        //     form.monthPaymentConfirmation.setAttribute("style","background-color: #ffdddd;")
                        //     validMonthPaymentConfirmation.removeAttribute('class') 
                        // }else{
                        //     form.monthPaymentConfirmation.removeAttribute("style")
                        //     validMonthPaymentConfirmation.setAttribute("class","d-none")
                        // }

                        // if(form.activationConfirmation.value == "")
                        // {
                        //     form.activationConfirmation.setAttribute("style","background-color: #ffdddd;")
                        //     validActivationConfirmation.removeAttribute('class') 
                        // }else{
                        //     form.activationConfirmation.removeAttribute("style")
                        //     validActivationConfirmation.setAttribute("class","d-none")
                        // }

                        // if(form.pricePerPlateConfirmation.value == "")
                        // {
                        //     form.pricePerPlateConfirmation.setAttribute("style","background-color: #ffdddd;")
                        //     validPricePerPlateConfirmation.removeAttribute('class') 
                        // }else{
                        //     form.pricePerPlateConfirmation.removeAttribute("style")
                        //     validPricePerPlateConfirmation.setAttribute("class","d-none")
                        // }

                        if( form.userLimitConfirmation.value == ""  || form.userLimitConfirmation.value ==  "vazio")
                        {
                            form.userLimitConfirmation.setAttribute("style","background-color: #ffdddd;")
                            validUserLimitConfirmation.removeAttribute('class') 
                        }else{
                            form.userLimitConfirmation.removeAttribute("style")
                            validUserLimitConfirmation.setAttribute("class","d-none")
                        }

                        // if(form.pricePerExtraUserConfirmation.value == "")
                        // {
                        //     form.pricePerExtraUserConfirmation.setAttribute("style","background-color: #ffdddd;")
                        //     validPricePerExtraUserConfirmation.removeAttribute('class') 
                        // }else{
                        //     form.pricePerExtraUserConfirmation.removeAttribute("style")
                        //     validPricePerExtraUserConfirmation.setAttribute("class","d-none")
                        // }

                       // console.log("onFinishing") 

                        let validation = true

                        if(form.cnpjConfirmation.hasAttribute("style")) validation = false
                        if(form.socialReasonConfirmation.hasAttribute("style")) validation = false
                        if(form.fantasyNameConfirmation.hasAttribute("style")) validation = false
                        if(form.statusConfirmation.hasAttribute("style")) validation = false
                        if(form.responsibleConfirmation.hasAttribute("style")) validation = false
                        if(form.emailConfirmation.hasAttribute("style")) validation = false
                        if(form.userLimitConfirmation.hasAttribute("style")) validation = false

                        if(validation === false)
                        {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Campos Obrigatorios',
                                // footer: 'top..',
                                showConfirmButton: false,
                                timer: 3000
                            })                          

                        }else{

                            return !0                            
                        }

                    },
                        //// end method onFinishing

                    onFinished: function(event) {

                        let form = document.querySelector('#form-horizontal')

                        let monthPayment     = form.monthPayment.value.replace("R$","")
                        let activation       = form.activation.value.replace("R$","")
                        let pricePerPlate    = form.pricePerPlate.value.replace("R$","")                           
                        let pricePerExtraUser = form.pricePerExtraUser.value.replace("R$","")


                        //pegando dados do user logado
                        let authUser =  {{ Js::from(auth()->user()) }};

                        let result = {
                            "cnpj" :             form.cnpj.value,
                            "socialReason":      form.socialReason.value,
                            "fantasyName":       form.fantasyName.value,
                            "status":            form.status.value,
                            "responsible":       form.responsible.value,
                            "email":             form.email.value,                            
                            "monthPayment":      monthPayment,
                            "activation":        activation,
                            "pricePerPlate":     pricePerPlate,
                            "userLimit":         form.userLimit.value,
                            "pricePerExtraUser": pricePerExtraUser,
                            "color":             form.mainColor.value,
                            "logo":              form.logo.value,           
                            "authUser":  authUser
                        }
                        
                        // console.log('onFinished => ')

                        fetch('/api/company-add',{ 
                                method:'post',        
                                body: JSON.stringify(result),
                                headers:{
                                    "Content-type":"application/json",
                                    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }                            
                        })            
                        .then(res=> res.json())
                        .then(res => { 


                            if(res.status)
                            {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Sucesso',
                                    text: 'Cadastro efetuado com sucesso',
                                    // footer: 'top..',
                                    showConfirmButton: false,
                                    timer: 3300
                                 })

                                 setInterval(() => {
                                    location.reload() 
                                 }, 3500);
                                  
                            }else{

                                let result = `<span></span>`
                                res.forEach(function(element){
                                    result += `<li>${element}</li>`
                                })
    
                                let ul = document.createElement('ul')   
                                ul.style ="list-style-type:none;"                     
                                ul.innerHTML = result
                                
                                 
                                Swal.fire({
                                    title: '<strong>Erros encontrados, dados não foram salvos</strong>',
                                    icon: 'error',
                                    html: ul,                                    
                                    showCloseButton: true,
                                    // showCancelButton: true,
                                    focusConfirm: true,
                                    // confirmButtonText:
                                    //     '<i class="fa fa-thumbs-up"></i> Great!',
                                    // confirmButtonAriaLabel: 'Thumbs up, great!',
                                    // cancelButtonText:
                                    //     '<i class="fa fa-thumbs-down"></i>',
                                    cancelButtonAriaLabel: 'Thumbs down'
                                })

                            }//end else

                                       
                        })
                        .catch((e)=> {console.log("error => ", e)} )
                        
                    }, //// end method onFinished

                    onContentLoaded: function() {}, 
                        //// end method onContentLoaded

                    onInit: function() {   

                        let form = document.querySelector('#form-horizontal') 

                        let im_cnpj = new Inputmask('99.999.999/9999-99')                        
                        im_cnpj.mask(form.cnpj)

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

                        ////////////////////////////////////////////
                        let im_activation = new Inputmask( 'currency',{"autoUnmask": false,
                                radixPoint:",",
                                groupSeparator: ".",
                                allowMinus: false,
                                prefix: ' R$ ',            
                                digits: 2,
                                digitsOptional: false,
                                rightAlign: false,
                                unmaskAsNumber: false
                        });

                        let im_pricePerPlate = new Inputmask( 'currency',{"autoUnmask": false,
                                radixPoint:",",
                                groupSeparator: ".",
                                allowMinus: false,
                                prefix: ' R$ ',            
                                digits: 2,
                                digitsOptional: false,
                                rightAlign: false,
                                unmaskAsNumber: false
                        });

                        let im_pricePerExtraUser = new Inputmask( 'currency',{"autoUnmask": false,
                                radixPoint:",",
                                groupSeparator: ".",
                                allowMinus: false,
                                prefix: ' R$ ',            
                                digits: 2,
                                digitsOptional: false,
                                rightAlign: false,
                                unmaskAsNumber: false
                        });

                        im_monthPayment.mask(form.monthPayment)
                        im_activation.mask(form.activation)
                        im_pricePerPlate.mask(form.pricePerPlate)
                        im_pricePerExtraUser.mask(form.pricePerExtraUser)
                                                
                        form.cnpj.addEventListener('blur',function(e){                            
                            e.preventDefault()

                            console.log("value cnpj acima => ",form.cnpj.value, form.cnpj.value.length)

                            cnpj = form.cnpj.value.replace(".", "");
                            cnpj = cnpj.replace(".", "");
                            cnpj = cnpj.replace("-", "");
                            cnpj = cnpj.replace("/", "");

                            cnpj = cnpj.replace("_","")
                            console.log("value cnpj => ",cnpj, cnpj.length)

                            
                            if(cnpj.length >= 14){

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
                                            title: '<h1>Oops...</h1>',
                                            text: 'CNPJ inválido',
                                            // footer: 'tente novamente..',
                                            showConfirmButton: false,
                                            // color: '#fff',
                                            // background:"#c3cef8",
                                            timer: 3500
                                        })
                                        form.cnpj.value = ""
    
                                    }else{
    
                                        form.socialReason.value = res.nome
                                        form.fantasyName.value = res.fantasia
                                        // form.status.value = res.status                                
                                        form.email.value = res.email
                                        form.responsible.value = res.qsa[0].nome ? res.qsa[0].nome : "" 
    
                                    }
    
                                })
                                .catch((error)=> console.log("erro api receita federal => ",error))

                            }else{

                                Swal.fire({
                                            icon: 'error',
                                            title: '<h2>Quantidade menor do que o esperado</h2>',
                                            text: 'CNPJ inválido',
                                            // footer: 'tente novamente..',
                                            showConfirmButton: false,
                                            // color: '#fff',
                                            // background:"#c3cef8",
                                            timer: 3500
                                        })
                                        form.cnpj.value = ""
                            }//end if valid cnpj.length
                        

                        })//end form.cnpj
                    },
                   
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