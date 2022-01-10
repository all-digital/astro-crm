@extends('layouts.app')

@section('nav-header')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18" style="margin-top: -5px;">Dashboard Principal</h4>

                <div class="page-title-right" style="margin-top: -5px;">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            Olá <span class="user">{{ Auth::user()->name }}</span>
                            <br> Seja Bem Vindo/a!
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

@endsection

@section('content')


    <div class="row">
        <div class="col-xl-6">

            <div class="row">

                {{-- graphic sales of month --}}
                {{-- @livewire('dashbord.graphics.sales-of-month') --}}               
                @include('dashboard.graphics.sales-of-month')

                 {{-- graphic additional revenue --}}
                 {{-- @livewire('dashbord.graphics.additional-revenue') --}}
                 @include('dashboard.graphics.additional-revenue')

                 {{-- graphic new clients --}}
                 @include('dashboard.graphics.new-clients')


                 {{-- graphic month billing --}}
                 @include('dashboard.graphics.month-billing')

                
               
            </div>

        </div>
                
                {{-- graphic annual performance --}}
                @include('dashboard.graphics.annual-performance')
            {{-- <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title mb-4">Performance Anual (2021)</h4>
                        <div id="mixed-chart" class="apex-charts"></div>
                    </div>
                </div>
            </div> --}}

    </div>
    <!-- end row -->


    <div class="row">

                            
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Resultado - Últimos 06 Meses</h4>

                    <div class="row" style="">
                        <div class="col-lg-6" style="margin-top: 20px;">
                            <div>
                                <p>01 Jun - 31 Dez, 2021</p>
                                <p class="mb-2">Receita Adicional</p>
                                <h4>R$ 195.362,00</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <p class="mb-2 text-truncate">Ticket Médio</p>
                                        <h5 class="d-inline-block align-middle mb-0">R$ 69,90</h5> <span class="badge badge-soft-success">+ 1.5 %</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-3">
                                        <p class="mb-2 text-truncate">Volume Vendido</p>
                                        <h5>1.114 <span>Placas</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="mt-4">
                                <a href="#" class="btn btn-primary btn-sm">View more</a>
                            </div> -->
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <p>Vendas X Mês</p>
                            </div>
                            <div>
                                <div style="margin-top: -35px" id="bar-chart" class="apex-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <p class="mb-2">Base Ativa</p>
                            <h4 class="mb-0">4.391</h4>
                        </div>
                        <div class="col-4">
                            <div class="text-right">
                                <div>
                                    2.06 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                </div>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <p class="mb-2">Instalações Pendentes</p>
                            <h4 class="mb-0">26</h4>
                        </div>
                        <div class="col-4">
                            <div class="text-right">
                                <div>
                                    3.12 % <i class="mdi mdi-arrow-up text-success ml-1"></i>
                                </div>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <p class="mb-2">Cancelamento do Mês</p>
                            <h4 class="mb-0">12</h4>
                        </div>
                        <div class="col-4">
                            <div class="text-right">
                                <div>
                                    2.12 % <i class="mdi mdi-arrow-down text-danger ml-1"></i>
                                </div>
                                <div class="progress progress-sm mt-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Concentração de Veículos</h4>

                    <div id="radar-chart" class="apex-charts"></div>
                    <!-- ANO (3) x TIPOS DE VEICULOS - CARRO  MOTO  CAMINHÃO  ONIBUS  PESSOAS  OUTROS -->
                </div>
            </div>
        </div>

    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Ranking de Vendedores - Mês Atual</h4>

                    <ul class="list-unstyled activity-wid">
                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <img src="assets/images/vendedor1.jpg" class="sale-image" alt="">
                            </div>
                            <div class="d-flex align-items-start">
                                
                                <div class="div-name-sales">
                                    <div class="div-font-sales">
                                        <i class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                        Márcio Costa
                                    </div>
                                    <p style="margin-left: 30px;"><span>50</span> Vendas</p>
                                </div>
                            </div>
                        </li>

                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <img src="assets/images/vendedor2.jpg" class="sale-image" alt="">
                            </div>
                            <div class="d-flex align-items-start">
                                
                                <div class="div-name-sales">
                                    <div class="div-font-sales">
                                        <i class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                        João Miguel
                                    </div>
                                    <p style="margin-left: 30px;"><span>47</span> Vendas</p>

                                </div>
                            </div>
                        </li>

                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <img src="assets/images/vendedor3.jpg" class="sale-image" alt="">
                            </div>
                            <div class="d-flex align-items-start">
                                
                                <div class="div-name-sales">
                                    <div class="div-font-sales">
                                        <i class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                        Teresa Pereira
                                    </div>
                                    <p style="margin-left: 30px;"><span>39</span> Vendas</p>

                                </div>
                            </div>
                        </li>

                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <img src="assets/images/vendedor4.jpg" class="sale-image" alt="">
                            </div>
                            <div class="d-flex align-items-start">
                                
                                <div class="div-name-sales">
                                    <div class="div-font-sales">
                                        <i class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                        João Tavares
                                    </div>
                                    <p style="margin-left: 30px;"><span>35</span> Vendas</p>

                                </div>
                            </div>
                        </li>

                        <li class="activity-list">
                            <div class="activity-icon avatar-xs">
                                <img src="assets/images/vendedor5.jpg" class="sale-image" alt="">
                            </div>
                            <div class="d-flex align-items-start">
                                
                                <div class="div-name-sales">
                                    <div class="div-font-sales">
                                        <i class="mdi mdi-arrow-right text-primary align-middle ms-2"></i>
                                        Victor Ribeiro
                                    </div>
                                    <p style="margin-left: 30px;"><span>33</span> Vendas</p>

                                </div>
                            </div>
                        </li>

                        
                    </ul>

                    <div class="text-center" style="margin-top: 35px;">
                        <a href="#" class="btn btn-primary btn-sm">VER TODOS<i
                                class="mdi mdi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="input-group input-group-sm">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Mês Atual</option>
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                            <label class="input-group-text">Mês</label>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Campeões de Utilização</h4>
                    
                    <div class="text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <img src="assets/images/simcard.png" class="icon-champions" alt="">
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Conectividade</h5>
                                        <p class="text-truncate">Vivo - 80 Unids</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <img src="assets/images/equipamento.png" class="icon-champions" alt="">
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Rastreador</h5>
                                        <p class="text-truncate">Suntech - 57 Unids</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <img src="assets/images/pessoa.png" class="icon-champions" alt="">
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Gênero</h5>
                                        <p class="text-truncate">Homem</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <img src="assets/images/veiculos.png" class="icon-champions" alt="">
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Veículo</h5>
                                        <p class="text-truncate">Moto - 62 Unids</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <img src="assets/images/pessoa.png" class="icon-champions" alt="">
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Tipo de Cliente</h5>
                                        <p class="text-truncate">Pessoa Física - 198 Unids</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pt-4 pb-5">
                                    <div class="avatar-sm mx-auto font-size-16">
                                        <span
                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                            <img src="assets/images/brasil.png" class="icon-champions" alt="">
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <h5 class="mb-1">Cidade</h5>
                                        <p class="text-truncate">São Paulo - 162 vendas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="input-group input-group-sm">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Mês Atual</option>
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                            <label class="input-group-text">Mês</label>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Fonte de Leads</h4>

                    <div class="d-flex align-items-start">
                        <div class="flex-1">
                            <p class="mb-2">Total de Leads Gerados</p>
                            <h4>6.773</h4>
                            <p class="mb-0"><span class="badge badge-soft-success me-2"> 0.6% <i
                                        class="mdi mdi-arrow-up"></i> </span> Mês anterior</p>
                        </div>
                    </div>

                    <div class="mt-3 social-source">
                        <div class="d-flex align-items-center social-source-list">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle">
                                    <i class="mdi mdi-facebook"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Facebook</p>
                                <h5 class="mb-0">2.352</h5>
                            </div>
                            <div class="ms-auto">
                                2.06 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>

                        <div class="media  d-flex align-items-center social-source-list">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle bg-info">
                                    <i class="mdi mdi-google"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Google</p>
                                <h5 class="mb-0">1.925</h5>
                            </div>
                            <div class="ms-auto">
                                1.28 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>

                        <div class="d-flex align-items-center social-source-list">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle bg-pink">
                                    <i class="mdi mdi-instagram"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Instagram</p>
                                <h5 class="mb-0">1.846</h5>
                            </div>
                            <div class="ms-auto">
                                1.04 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>


                        <div class="media  d-flex align-items-center social-source-list">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle bg-danger">
                                    <i class="mdi mdi-earth"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Website</p>
                                <h5 class="mb-0">525</h5>
                            </div>
                            <div class="ms-auto">
                                0.89 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>

                        <div class="media  d-flex align-items-center social-source-list pb-4">
                            <div class="avatar-xs me-4">
                                <span class="avatar-title rounded-circle bg-dark">
                                    <i class="mdi mdi-wifi"></i>
                                </span>
                            </div>
                            <div class="flex-1">
                                <p class="mb-1">Outros</p>
                                <h5 class="mb-0">125</h5>
                            </div>
                            <div class="ms-auto">
                                0.28 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- end row -->

@endsection

@push('script-js')

    <!-- apexcharts -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('custom/js/dashboardGeral.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    
@endpush