@extends('layouts.app2')

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
                                                <span id="cnpj-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                            <input id="txtCompanyBilling" name="fantasyName"
                                                type="text" class="form-control">
                                                <span id="fantasyName-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                                <span id="responsible-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                            <span id="email-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                            <input id="txtFirstNameShipping" name="mainColor"
                                                type="color" class="form-control" style="padding: 15px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="logo"
                                            class="col-lg-3 col-form-label">Logo</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" name="logo"
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
                                            {{-- <input id="txtCardVerificationNumber"
                                            name="userLimit" type="number" value="5"
                                            class="form-control">
                                             --}}                                            

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
                                                <span id="cnpjConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                                <span id="socialReasonConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                                <span id="fantasyNameConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                                <span id="responsibleConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
                                            <span id="emailConfirmation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
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
    {{-- <script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script> --}}

    <!-- form wizard init -->
    <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>   

    <script src="{{'assets\libs\inputmask\min\jquery.inputmask.bundle.min.js'}}"></script>
    {{-- <script src="{{'assets\libs\sweetalert2\sweetalert2.min.js'}}"></script>        --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
@endpush

@push('customized-js')
    <script>

       // não consegui trazer para esse script, não esta renderizando corretamente. Toda a Logica esta no arquivo
       // public\assets\libs\jquery-steps\build\jquery.steps.min.js
        /*! 
        * (http://www.jquery-steps.com)        
        */
     

        ! function(a, b) {
            function c(a, b) {
                o(a).push(b)
            }

            function d(d, e, f) {
                var g = d.children(e.headerTag),
                    h = d.children(e.bodyTag);
                g.length > h.length ? R(Z, "contents") : g.length < h.length && R(Z, "titles");
                var i = e.startIndex;
                if (f.stepCount = g.length, e.saveState && a.cookie) {
                    var j = a.cookie(U + q(d)),
                        k = parseInt(j, 0);
                    !isNaN(k) && k < f.stepCount && (i = k)
                }
                f.currentIndex = i, g.each(function(e) {
                    var f = a(this),
                        g = h.eq(e),
                        i = g.data("mode"),
                        j = null == i ? $.html : r($, /^\s*$/.test(i) || isNaN(i) ? i : parseInt(i, 0)),
                        k = j === $.html || g.data("url") === b ? "" : g.data("url"),
                        l = j !== $.html && "1" === g.data("loaded"),
                        m = a.extend({}, bb, {
                            title: f.html(),
                            content: j === $.html ? g.html() : "",
                            contentUrl: k,
                            contentMode: j,
                            contentLoaded: l
                        });
                    c(d, m)
                })
            }

            function e(a) {
                a.triggerHandler("canceled")
            }

            function f(a, b) {
                return a.currentIndex - b
            }

            function g(b, c) {
                var d = i(b);
                b.unbind(d).removeData("uid").removeData("options").removeData("state").removeData("steps").removeData("eventNamespace").find(".actions a").unbind(d), b.removeClass(c.clearFixCssClass + " vertical");
                var e = b.find(".content > *");
                e.removeData("loaded").removeData("mode").removeData("url"), e.removeAttr("id").removeAttr("role").removeAttr("tabindex").removeAttr("class").removeAttr("style")._removeAria("labelledby")._removeAria("hidden"), b.find(".content > [data-mode='async'],.content > [data-mode='iframe']").empty();
                var f = a('<{0} class="{1}"></{0}>'.format(b.get(0).tagName, b.attr("class"))),
                    g = b._id();
                return null != g && "" !== g && f._id(g), f.html(b.find(".content").html()), b.after(f), b.remove(), f
            }

            function h(a, b) {
                var c = a.find(".steps li").eq(b.currentIndex);
                a.triggerHandler("finishing", [b.currentIndex]) ? (c.addClass("done").removeClass("error"), a.triggerHandler("finished", [b.currentIndex])) : c.addClass("error")
            }

            function i(a) {
                var b = a.data("eventNamespace");
                return null == b && (b = "." + q(a), a.data("eventNamespace", b)), b
            }

            function j(a, b) {
                var c = q(a);
                return a.find("#" + c + V + b)
            }

            function k(a, b) {
                var c = q(a);
                return a.find("#" + c + W + b)
            }

            function l(a, b) {
                var c = q(a);
                return a.find("#" + c + X + b)
            }

            function m(a) {
                return a.data("options")
            }

            function n(a) {
                return a.data("state")
            }

            function o(a) {
                return a.data("steps")
            }

            function p(a, b) {
                var c = o(a);
                return (0 > b || b >= c.length) && R(Y), c[b]
            }

            function q(a) {
                var b = a.data("uid");
                return null == b && (b = a._id(), null == b && (b = "steps-uid-".concat(T), a._id(b)), T++, a.data("uid", b)), b
            }

            function r(a, c) {
                if (S("enumType", a), S("keyOrValue", c), "string" == typeof c) {
                    var d = a[c];
                    return d === b && R("The enum key '{0}' does not exist.", c), d
                }
                if ("number" == typeof c) {
                    for (var e in a)
                        if (a[e] === c) return c;
                    R("Invalid enum value '{0}'.", c)
                } else R("Invalid key or value type.")
            }

            function s(a, b, c) {
                return B(a, b, c, v(c, 1))
            }

            function t(a, b, c) {
                return B(a, b, c, f(c, 1))
            }

            function u(a, b, c, d) {
                if ((0 > d || d >= c.stepCount) && R(Y), !(b.forceMoveForward && d < c.currentIndex)) {
                    var e = c.currentIndex;
                    return a.triggerHandler("stepChanging", [c.currentIndex, d]) ? (c.currentIndex = d, O(a, b, c), E(a, b, c, e), D(a, b, c), A(a, b, c), P(a, b, c, d, e, function() {
                        a.triggerHandler("stepChanged", [d, e])
                    })) : a.find(".steps li").eq(e).addClass("error"), !0
                }
            }

            function v(a, b) {
                return a.currentIndex + b
            }

            function w(b) {
                var c = a.extend(!0, {}, cb, b);
                return this.each(function() {
                    var b = a(this),
                        e = {
                            currentIndex: c.startIndex,
                            currentStep: null,
                            stepCount: 0,
                            transitionElement: null
                        };
                    b.data("options", c), b.data("state", e), b.data("steps", []), d(b, c, e), J(b, c, e), G(b, c), c.autoFocus && 0 === T && j(b, c.startIndex).focus(), b.triggerHandler("init", [c.startIndex])
                })
            }

            function x(b, c, d, e, f) {
                (0 > e || e > d.stepCount) && R(Y), f = a.extend({}, bb, f), y(b, e, f), d.currentIndex !== d.stepCount && d.currentIndex >= e && (d.currentIndex++, O(b, c, d)), d.stepCount++;
                var g = b.find(".content"),
                    h = a("<{0}>{1}</{0}>".format(c.headerTag, f.title)),
                    i = a("<{0}></{0}>".format(c.bodyTag));
                return (null == f.contentMode || f.contentMode === $.html) && i.html(f.content), 0 === e ? g.prepend(i).prepend(h) : k(b, e - 1).after(i).after(h), K(b, d, i, e), N(b, c, d, h, e), F(b, c, d, e), e === d.currentIndex && E(b, c, d), D(b, c, d), b
            }

            function y(a, b, c) {
                o(a).splice(b, 0, c)
            }

            function z(b) {
                var c = a(this),
                    d = m(c),
                    e = n(c);
                if (d.suppressPaginationOnFocus && c.find(":focus").is(":input")) return b.preventDefault(), !1;
                var f = {
                    left: 37,
                    right: 39
                };
                b.keyCode === f.left ? (b.preventDefault(), t(c, d, e)) : b.keyCode === f.right && (b.preventDefault(), s(c, d, e))
            }

            function A(b, c, d) {
                if (d.stepCount > 0) {
                    var e = d.currentIndex,
                        f = p(b, e);
                    if (!c.enableContentCache || !f.contentLoaded) switch (r($, f.contentMode)) {
                        case $.iframe:
                            b.find(".content > .body").eq(d.currentIndex).empty().html('<iframe src="' + f.contentUrl + '" frameborder="0" scrolling="no" />').data("loaded", "1");
                            break;
                        case $.async:
                            var g = k(b, e)._aria("busy", "true").empty().append(M(c.loadingTemplate, {
                                text: c.labels.loading
                            }));
                            a.ajax({
                                url: f.contentUrl,
                                cache: !1
                            }).done(function(a) {
                                g.empty().html(a)._aria("busy", "false").data("loaded", "1"), b.triggerHandler("contentLoaded", [e])
                            })
                    }
                }
            }

            function B(a, b, c, d) {
                var e = c.currentIndex;
                if (d >= 0 && d < c.stepCount && !(b.forceMoveForward && d < c.currentIndex)) {
                    var f = j(a, d),
                        g = f.parent(),
                        h = g.hasClass("disabled");
                    return g._enableAria(), f.click(), e === c.currentIndex && h ? (g._enableAria(!1), !1) : !0
                }
                return !1
            }

            function C(b) {
                b.preventDefault();
                var c = a(this),
                    d = c.parent().parent().parent().parent(),
                    f = m(d),
                    g = n(d),
                    i = c.attr("href");
                switch (i.substring(i.lastIndexOf("#") + 1)) {
                    case "cancel":
                        e(d);
                        break;
                    case "finish":
                        h(d, g);
                        break;
                    case "next":
                        s(d, f, g);
                        break;
                    case "previous":
                        t(d, f, g)
                }
            }

            function D(a, b, c) {
                if (b.enablePagination) {
                    var d = a.find(".actions a[href$='#finish']").parent(),
                        e = a.find(".actions a[href$='#next']").parent();
                    if (!b.forceMoveForward) {
                        var f = a.find(".actions a[href$='#previous']").parent();
                        f._enableAria(c.currentIndex > 0)
                    }
                    b.enableFinishButton && b.showFinishButtonAlways ? (d._enableAria(c.stepCount > 0), e._enableAria(c.stepCount > 1 && c.stepCount > c.currentIndex + 1)) : (d._showAria(b.enableFinishButton && c.stepCount === c.currentIndex + 1), e._showAria(0 === c.stepCount || c.stepCount > c.currentIndex + 1)._enableAria(c.stepCount > c.currentIndex + 1 || !b.enableFinishButton))
                }
            }

            function E(b, c, d, e) {
                var f = j(b, d.currentIndex),
                    g = a('<span class="current-info audible">' + c.labels.current + " </span>"),
                    h = b.find(".content > .title");
                if (null != e) {
                    var i = j(b, e);
                    i.parent().addClass("done").removeClass("error")._selectAria(!1), h.eq(e).removeClass("current").next(".body").removeClass("current"), g = i.find(".current-info"), f.focus()
                }
                f.prepend(g).parent()._selectAria().removeClass("done")._enableAria(), h.eq(d.currentIndex).addClass("current").next(".body").addClass("current")
            }

            function F(a, b, c, d) {
                for (var e = q(a), f = d; f < c.stepCount; f++) {
                    var g = e + V + f,
                        h = e + W + f,
                        i = e + X + f,
                        j = a.find(".title").eq(f)._id(i);
                    a.find(".steps a").eq(f)._id(g)._aria("controls", h).attr("href", "#" + i).html(M(b.titleTemplate, {
                        index: f + 1,
                        title: j.html()
                    })), a.find(".body").eq(f)._id(h)._aria("labelledby", i)
                }
            }

            function G(a, b) {
                var c = i(a);
                a.bind("canceled" + c, b.onCanceled), a.bind("contentLoaded" + c, b.onContentLoaded), a.bind("finishing" + c, b.onFinishing), a.bind("finished" + c, b.onFinished), a.bind("init" + c, b.onInit), a.bind("stepChanging" + c, b.onStepChanging), a.bind("stepChanged" + c, b.onStepChanged), b.enableKeyNavigation && a.bind("keyup" + c, z), a.find(".actions a").bind("click" + c, C)
            }

            function H(a, b, c, d) {
                return 0 > d || d >= c.stepCount || c.currentIndex === d ? !1 : (I(a, d), c.currentIndex > d && (c.currentIndex--, O(a, b, c)), c.stepCount--, l(a, d).remove(), k(a, d).remove(), j(a, d).parent().remove(), 0 === d && a.find(".steps li").first().addClass("first"), d === c.stepCount && a.find(".steps li").eq(d).addClass("last"), F(a, b, c, d), D(a, b, c), !0)
            }

            function I(a, b) {
                o(a).splice(b, 1)
            }

            function J(b, c, d) {
                var e = '<{0} class="{1}">{2}</{0}>',
                    f = r(_, c.stepsOrientation),
                    g = f === _.vertical ? " vertical" : "",
                    h = a(e.format(c.contentContainerTag, "content " + c.clearFixCssClass, b.html())),
                    i = a(e.format(c.stepsContainerTag, "steps " + c.clearFixCssClass, '<ul role="tablist"></ul>')),
                    j = h.children(c.headerTag),
                    k = h.children(c.bodyTag);
                b.attr("role", "application").empty().append(i).append(h).addClass(c.cssClass + " " + c.clearFixCssClass + g), k.each(function(c) {
                    K(b, d, a(this), c)
                }), j.each(function(e) {
                    N(b, c, d, a(this), e)
                }), E(b, c, d), L(b, c, d)
            }

            function K(a, b, c, d) {
                var e = q(a),
                    f = e + W + d,
                    g = e + X + d;
                c._id(f).attr("role", "tabpanel")._aria("labelledby", g).addClass("body")._showAria(b.currentIndex === d)
            }

            function L(a, b, c) {
                if (b.enablePagination) {
                    var d = '<{0} class="actions {1}"><ul role="menu" aria-label="{2}">{3}</ul></{0}>',
                        e = '<li><a href="#{0}" role="menuitem">{1}</a></li>',
                        f = "";
                    b.forceMoveForward || (f += e.format("previous", b.labels.previous)), f += e.format("next", b.labels.next), b.enableFinishButton && (f += e.format("finish", b.labels.finish)), b.enableCancelButton && (f += e.format("cancel", b.labels.cancel)), a.append(d.format(b.actionContainerTag, b.clearFixCssClass, b.labels.pagination, f)), D(a, b, c), A(a, b, c)
                }
            }

            function M(a, c) {
                for (var d = a.match(/#([a-z]*)#/gi), e = 0; e < d.length; e++) {
                    var f = d[e],
                        g = f.substring(1, f.length - 1);
                    c[g] === b && R("The key '{0}' does not exist in the substitute collection!", g), a = a.replace(f, c[g])
                }
                return a
            }

            function N(b, c, d, e, f) {
                var g = q(b),
                    h = g + V + f,
                    j = g + W + f,
                    k = g + X + f,
                    l = b.find(".steps > ul"),
                    m = M(c.titleTemplate, {
                        index: f + 1,
                        title: e.html()
                    }),
                    n = a('<li role="tab"><a id="' + h + '" href="#' + k + '" aria-controls="' + j + '">' + m + "</a></li>");
                n._enableAria(c.enableAllSteps || d.currentIndex > f), d.currentIndex > f && n.addClass("done"), e._id(k).attr("tabindex", "-1").addClass("title"), 0 === f ? l.prepend(n) : l.find("li").eq(f - 1).after(n), 0 === f && l.find("li").removeClass("first").eq(f).addClass("first"), f === d.stepCount - 1 && l.find("li").removeClass("last").eq(f).addClass("last"), n.children("a").bind("click" + i(b), Q)
            }

            function O(b, c, d) {
                c.saveState && a.cookie && a.cookie(U + q(b), d.currentIndex)
            }

            function P(b, c, d, e, f, g) {
                var h = b.find(".content > .body"),
                    i = r(ab, c.transitionEffect),
                    j = c.transitionEffectSpeed,
                    k = h.eq(e),
                    l = h.eq(f);
                switch (i) {
                    case ab.fade:
                    case ab.slide:
                        var m = i === ab.fade ? "fadeOut" : "slideUp",
                            o = i === ab.fade ? "fadeIn" : "slideDown";
                        d.transitionElement = k, l[m](j, function() {
                            var b = a(this)._showAria(!1).parent().parent(),
                                c = n(b);
                            c.transitionElement && (c.transitionElement[o](j, function() {
                                a(this)._showAria()
                            }).promise().done(g), c.transitionElement = null)
                        });
                        break;
                    case ab.slideLeft:
                        var p = l.outerWidth(!0),
                            q = e > f ? -p : p,
                            s = e > f ? p : -p;
                        a.when(l.animate({
                            left: q
                        }, j, function() {
                            a(this)._showAria(!1)
                        }), k.css("left", s + "px")._showAria().animate({
                            left: 0
                        }, j)).done(g);
                        break;
                    default:
                        a.when(l._showAria(!1), k._showAria()).done(g)
                }
            }

            function Q(b) {
                b.preventDefault();
                var c = a(this),
                    d = c.parent().parent().parent().parent(),
                    e = m(d),
                    f = n(d),
                    g = f.currentIndex;
                if (c.parent().is(":not(.disabled):not(.current)")) {
                    var h = c.attr("href"),
                        i = parseInt(h.substring(h.lastIndexOf("-") + 1), 0);
                    u(d, e, f, i)
                }
                return g === f.currentIndex ? (j(d, g).focus(), !1) : void 0
            }

            function R(a) {
                throw arguments.length > 1 && (a = a.format(Array.prototype.slice.call(arguments, 1))), new Error(a)
            }

            function S(a, b) {
                null == b && R("The argument '{0}' is null or undefined.", a)
            }
            a.fn.extend({
                _aria: function(a, b) {
                    return this.attr("aria-" + a, b)
                },
                _removeAria: function(a) {
                    return this.removeAttr("aria-" + a)
                },
                _enableAria: function(a) {
                    return null == a || a ? this.removeClass("disabled")._aria("disabled", "false") : this.addClass("disabled")._aria("disabled", "true")
                },
                _showAria: function(a) {
                    return null == a || a ? this.show()._aria("hidden", "false") : this.hide()._aria("hidden", "true")
                },
                _selectAria: function(a) {
                    return null == a || a ? this.addClass("current")._aria("selected", "true") : this.removeClass("current")._aria("selected", "false")
                },
                _id: function(a) {
                    return a ? this.attr("id", a) : this.attr("id")
                }
            }), String.prototype.format || (String.prototype.format = function() {
                for (var b = 1 === arguments.length && a.isArray(arguments[0]) ? arguments[0] : arguments, c = this, d = 0; d < b.length; d++) {
                    var e = new RegExp("\\{" + d + "\\}", "gm");
                    c = c.replace(e, b[d])
                }
                return c
            });
            var T = 0,
                U = "jQu3ry_5teps_St@te_",
                V = "-t-",
                W = "-p-",
                X = "-h-",
                Y = "Index out of range.",
                Z = "One or more corresponding step {0} are missing.";
            a.fn.steps = function(b) {
                return a.fn.steps[b] ? a.fn.steps[b].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof b && b ? void a.error("Method " + b + " does not exist on jQuery.steps") : w.apply(this, arguments)
            }, a.fn.steps.add = function(a) {
                var b = n(this);
                return x(this, m(this), b, b.stepCount, a)
            }, a.fn.steps.destroy = function() {
                return g(this, m(this))
            }, a.fn.steps.finish = function() {
                h(this, n(this))
            }, a.fn.steps.getCurrentIndex = function() {
                return n(this).currentIndex
            }, a.fn.steps.getCurrentStep = function() {
                return p(this, n(this).currentIndex)
            }, a.fn.steps.getStep = function(a) {
                return p(this, a)
            }, a.fn.steps.insert = function(a, b) {
                return x(this, m(this), n(this), a, b)
            }, a.fn.steps.next = function() {
                return s(this, m(this), n(this))
            }, a.fn.steps.previous = function() {
                return t(this, m(this), n(this))
            }, a.fn.steps.remove = function(a) {
                return H(this, m(this), n(this), a)
            }, a.fn.steps.setStep = function() {
                throw new Error("Not yet implemented!")
            }, a.fn.steps.skip = function() {
                throw new Error("Not yet implemented!")
            };


                                                    //part of the code changeable      
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////////


                                                                
            var $ = a.fn.steps.contentMode = {
                    html: 0,
                    iframe: 1,
                    async: 2
                },
                _ = a.fn.steps.stepsOrientation = {
                    horizontal: 0,
                    vertical: 1
                },
                ab = a.fn.steps.transitionEffect = {
                    none: 0,
                    fade: 1,
                    slide: 2,
                    slideLeft: 3
                },
                bb = a.fn.steps.stepModel = {
                    title: "",
                    content: "",
                    contentUrl: "",
                    contentMode: $.html,
                    contentLoaded: !1
                },
                cb = a.fn.steps.defaults = {
                    headerTag: "h1",
                    bodyTag: "div",
                    contentContainerTag: "div",
                    actionContainerTag: "div",
                    stepsContainerTag: "div",
                    cssClass: "wizard",
                    clearFixCssClass: "clearfix",
                    stepsOrientation: _.horizontal,
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
                    transitionEffect: ab.none,
                    transitionEffectSpeed: 200,

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                    //Methods

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

                        if((!form.socialReason.value.trim())){           
                        
                            form.socialReason.setAttribute("style","background-color: #ffdddd;")
                            validSocialReason.removeAttribute('class')                        
                        }

                        if((!form.fantasyName.value.trim())){

                            form.fantasyName.setAttribute("style","background-color: #ffdddd;")
                            validFantasyName.removeAttribute('class')
                        }

                        if((!form.status.value.trim())){

                            form.status.setAttribute("style","background-color: #ffdddd;")
                            validStatus.removeAttribute('class') 
                        }

                        if((!form.responsible.value.trim())){

                            form.responsible.setAttribute("style","background-color: #ffdddd;")
                            validResponsible.removeAttribute('class')
                        }

                        if((!form.email.value.trim() )){

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


                        //Informações da Empresa
                        if(form.cnpj.value.length >= 14){
                            form.cnpj.removeAttribute("style")
                            validCnpj.setAttribute('class',"d-none")   
                        }                            
                             
                        if(form.socialReason.value.length >= 1){
                            form.socialReason.removeAttribute("style")
                            validSocialReason.setAttribute('class',"d-none")    
                        }
                                                         

                        if(form.fantasyName.value.length > 1 ){
                            form.fantasyName.removeAttribute("style")
                            validFantasyName.setAttribute('class',"d-none")   
                        }
                                                        

                        if(form.status.value.length > 1){
                            form.status.removeAttribute("style")
                            validStatus.setAttribute('class',"d-none")   
                        }                                                         
                        
                        if(form.responsible.value.length > 1){
                            form.responsible.removeAttribute("style")
                            validResponsible.setAttribute('class',"d-none") 
                        }                          
                                                     
                        if(form.email.value.length > 1){
                            form.email.removeAttribute("style")
                            validEmail.setAttribute('class',"d-none") 
                        } 
                                              

                        //Informações de Pagamento
                        if(form.monthPayment.value.length > 1){
                            form.monthPayment.removeAttribute("style")
                            validMonthPayment.setAttribute('class',"d-none")
                        }

                        if(form.activation.value.length > 1){
                            form.activation.removeAttribute("style")
                            validActivation.setAttribute('class',"d-none")                              
                        }

                        if(form.pricePerPlate.value.length > 1){
                            form.pricePerPlate.removeAttribute("style")
                            validPricePerPlate.setAttribute('class',"d-none")                              
                        }

                        if(form.userLimit.value.length > 1){
                            form.userLimit.removeAttribute("style")
                            validUserLimit.setAttribute('class',"d-none")                              
                        }

                        if(form.pricePerExtraUser.value.length > 1){
                            form.pricePerExtraUser.removeAttribute("style")
                            validPricePerExtraUser.setAttribute('class',"d-none")                              
                        }



                        return !0                          
                        

                    },
                    //// end method onStepChanging

                    onStepChanged: function() {
                        
                        let form = document.querySelector('#form-horizontal')

                        form.cnpjConfirmation.value = form.cnpj.value	
                        form.socialReasonConfirmation.value = form.socialReason.value
                        form.fantasyNameConfirmation.value = form.fantasyName.value
                        form.statusConfirmation.value = form.status.value
                        form.responsibleConfirmation.value = form.responsible.value
                        form.emailConfirmation.value = form.email.value
                        form.mainColorConfirmation.value = form.mainColor.value
                        // form.logoConfirmation.value = form.logo.value
                        form.monthPaymentConfirmation.value = form.monthPayment.value
                        form.activationConfirmation.value = form.activation.value
                        form.pricePerPlateConfirmation.value = form.pricePerPlate.value
                        form.pricePerExtraUserConfirmation.value = form.pricePerExtraUser.value
                    
                        console.log("onStepChanging => esta carregando os campo para confirmação")

                        /////apagar
                        console.log(form.pricePerExtraUser.value)
                        console.log(form.monthPayment.value)
                        console.log(form.activation.value)
                        console.log(form.pricePerPlate.value)

                        
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
                   


                
                    if(form.cnpjConfirmation.value == "")
                    {
                        form.cnpjConfirmation.setAttribute("style","background-color: #ffdddd;")
                        validCnpjConfirmation.removeAttribute('class')  
                    }else{
                        form.cnpjConfirmation.removeAttribute("style")
                        validCnpjConfirmation.setAttribute("class","d-none")
                    }
                    

                    if(form.socialReasonConfirmation.value == "")
                    {
                        form.socialReasonConfirmation.setAttribute("style","background-color: #ffdddd;")
                        validSocialReasonConfirmation.removeAttribute('class') 
                    }else{
                        form.socialReasonConfirmation.removeAttribute("style")
                        validSocialReasonConfirmation.setAttribute("class","d-none")
                    }
                    

                    if(form.fantasyNameConfirmation.value == "")
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

                    if(form.responsibleConfirmation.value == "")
                    {
                        form.responsibleConfirmation.setAttribute("style","background-color: #ffdddd;")
                        validResponsibleConfirmation.removeAttribute('class') 
                    }else{
                        form.responsibleConfirmation.removeAttribute("style")
                        validResponsibleConfirmation.setAttribute("class","d-none")
                    }

                    if(form.emailConfirmation.value == "")
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

                    if(form.userLimitConfirmation.value <= 1)
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

                        console.log("onFinishing") 

                        let validation = true

                        if(form.cnpjConfirmation.hasAttribute("style")) validation = false
                        if(form.socialReasonConfirmation.hasAttribute("style")) validation = false
                        if(form.statusConfirmation.hasAttribute("style")) validation = false
                        if(form.responsibleConfirmation.hasAttribute("style")) validation = false
                        if(form.emailConfirmation.hasAttribute("style")) validation = false
                        

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

                        // console.log("valores =>>>>>>",
                        //     monthPayment,
                        //     activation,
                        //     pricePerPlate,
                        //     pricePerExtraUser
                        // );

                        // console.log(
                        //     form.cnpj.value,
                        //     form.socialReason.value,
                        //     form.fantasyName.value,
                        //     form.status.value,
                        //     form.responsible.value,
                        //     form.email.value,
                        //     // form.mainColor.value,
                        //     // form.logo.value,
                        //     form.monthPayment.value,
                        //     form.activation.value,
                        //     form.pricePerPlate.value,
                        //     form.userLimit.value,
                        //     form.pricePerExtraUser.value
                        // )

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
                           "pricePerExtraUser": pricePerExtraUser
                        }

                        console.log("result => ", result)
                      
                        Swal.fire({
                            icon: 'success',
                            title: 'Oops...',
                            text: 'Cadastro ok',
                            footer: 'top..',
                            showConfirmButton: false,
                            timer: 3000
                        })
                        
                        console.log('onFinished => ')


                   
                    },

                    //// end method onFinished

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

                            cnpj = form.cnpj.value.replace(".", "");
                            cnpj = cnpj.replace(".", "");
                            cnpj = cnpj.replace("-", "");
                            cnpj = cnpj.replace("/", "");                            
                           
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
                                        footer: 'tente novamente..',
                                        showConfirmButton: false,
                                        // color: '#fff',
                                        background:"#c3cef8",
                                        timer: 3500
                                    })

                                }else{

                                    form.socialReason.value = res.nome
                                    form.fantasyName.value = res.fantasia
                                    form.status.value = res.status                                
                                    form.email.value = res.email

                                }


                            })
                            .catch((error)=> console.log("erro api cnpj => ",error))
                        })

                       
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
        }(jQuery);

        
    </script>
@endpush