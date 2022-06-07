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
                    <h4 class="card-title">Editar Empresa</h4>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif

                    <form   action="{{route('company.update',$company['id'])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')  
                        @csrf 

                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">

                                        <label for="cnpj"
                                            class="col-lg-3 col-form-label">CNPJ
                                        </label>

                                        <div class="col-lg-9">
                                            <input id="cnpj" name="cnpj" readonly
                                                type="text" class="form-control" value="{{ $company['cnpj']}}" >
                                            <span id="cnpj-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="social_Reason"
                                            class="col-lg-3 col-form-label">Razão Social</label>
                                        <div class="col-lg-9">
                                            <input id="social_Reason" name="social_Reason"
                                                type="text" readonly class="form-control" value="{{$company['social_Reason']}}">
                                            <span id="socialReason-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="fantasy_name"
                                            class="col-lg-3 col-form-label">Nome Fantasia</label>
                                        <div class="col-lg-9">
                                            <input id="fantasy_name" name="fantasy_name"
                                            type="text" class="form-control" readonly value="{{$company['fantasy_name']}}">
                                            <span id="fantasyName-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtEmailAddressBilling"
                                            class="col-lg-3 col-form-label">Status</label>
                                        <div class="col-lg-9">
                                            <select id="txtEmailAddressBilling" name="status"
                                                class="form-control">

                                                <option value="active">Ativo</option>
                                                <option value="suspended">Suspensa</option>
                                                <option value="canceled">Cancelada</option>
                                                
                                                <span id="status-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="name_responsible"
                                            class="col-lg-3 col-form-label">Responsável</label>
                                        <div class="col-lg-9">
                                            <input id="name_responsible" name="name_responsible"
                                            type="text" class="form-control" value="{{$company['name_responsible']}}">
                                            <span id="responsible-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="email"
                                            class="col-lg-3 col-form-label">E-mail</label>
                                        <div class="col-lg-9">
                                            <input id="email" name="email"
                                            type="text" class="form-control" value="{{$company['email_responsible']}}">
                                            <span id="email-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="color"
                                            class="col-lg-3 col-form-label">Cor Principal</label>
                                        <div class="col-lg-9">
                                            <input id="color" name="color"
                                                type="color" class="form-control" style="padding: 15px;" value="{{$company['color']}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="logo"
                                            class="col-lg-3 col-form-label">Logo</label>
                                        <div class="col-lg-9">
                                            <input id="logo" name="logo"
                                                type="file" class="form-control" value="{{$company['logo']}}">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="date_last_later"
                                            class="col-lg-3 col-form-label">Data da última alteração</label>
                                        <div class="col-lg-9">
                                            <input id="date_last_later" readonly name="date_last_later"
                                                type="text" class="form-control" value="{{$company['updated_at']}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="user_last_alter"
                                            class="col-lg-3 col-form-label">Usuário da última alteração</label>
                                        <div class="col-lg-9">
                                            <input id="user_last_alter" readonly name="user_last_alter"
                                                type="text" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="date_insert"
                                            class="col-lg-3 col-form-label" style="margin-top: 5px;">Data de Inserção</label>
                                        <div class="col-lg-9">
                                            <input id="date_insert" readonly name="date_insert"
                                                type="text" class="form-control" value="{{$company['created_at']}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="user_insert"
                                            class="col-lg-3 col-form-label" style="margin-top: 5px;">Usuário de Inserção</label>
                                        <div class="col-lg-9">
                                            <input id="user_insert" readonly name="user_insert"
                                                type="text" class="form-control" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Mensalidade</label>
                                        <div class="col-lg-9">
                                            <input id="monthPayment" name="monthPayment" type="text"
                                            class="form-control" value="{{$company['monthly_payment']}}">
                                            <span id="monthPayment-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="ddlCreditCardType"
                                            class="col-lg-3 col-form-label">Ativação</label>
                                        <div class="col-lg-9">
                                            <input id="activation" name="activation"
                                            type="text" class="form-control" value="{{$company['activation']}}">
                                            <span id="activation-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCreditCardNumber"
                                            class="col-lg-3 col-form-label">Preço por Placa</label>
                                        <div class="col-lg-9">
                                            <input id="pricePerPlate" name="pricePerPlate"
                                            type="text" class="form-control" value="{{$company['price_per_plate']}}">
                                            <span id="pricePerPlate-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtCardVerificationNumber"
                                            class="col-lg-3 col-form-label">Limite de Usuários</label>
                                        <div class="col-lg-9">
                                            <select name="userLimit" id="userLimit" class="form-control">
                                                {{-- <option value="">vazio</option> --}}
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
                                        <label for="txtExpirationDate"
                                            class="col-lg-3 col-form-label">Preço por usuário extra</label>
                                        <div class="col-lg-9">
                                            <input id="pricePerExtraUser" name="pricePerExtraUser"
                                            type="text" class="form-control" value="{{$company['price_per_extra_user']}}">
                                            <span id="pricePerExtraUser-valid" style="color:tomato" class="d-none">Campo Obrigatorio</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                            <div style="text-align: right;">
                                <button type="submit" class="btn btn-info waves-effect waves-light px-5 my-2">Enviar Edição</button>
                            </div>  
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection


@push('script-js')

    {{-- <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script> --}}
    <!-- form wizard -->
    {{-- <script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script> --}}

    <!-- form wizard init -->
    {{-- <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script> --}}

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('assets\libs\inputmask\min\jquery.inputmask.bundle.min.js')}}"></script>
       
@endpush



@push('customized-js')

<script>


    let monthPayment = document.getElementById('monthPayment')
    let activation = document.getElementById('activation')
    let pricePerPlate = document.getElementById('pricePerPlate')
    let pricePerExtraUser = document.getElementById('pricePerExtraUser')


    let im_ = new Inputmask( 'currency',{"autoUnmask": false,
        radixPoint:",",
            groupSeparator: ".",
            allowMinus: false,
            prefix: ' R$ ',            
            digits: 2,
            digitsOptional: false,
            rightAlign: false,
            unmaskAsNumber: false                                
    });
    im_.mask(monthPayment)
    im_.mask(activation)
    im_.mask(pricePerPlate)
    im_.mask(pricePerExtraUser)

</script>
   
@endpush