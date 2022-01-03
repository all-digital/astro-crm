@extends('layouts.app')

@section('nav-page-title')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18" style="margin-top: -5px;">Dashboard Principal</h4>

                <div class="page-title-right" style="margin-top: -5px;">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            Olá <span class="user">João Dias</span>
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

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Vendas do Mês</p>
                                    <h4>225</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-1"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.8% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Receita Adicional</p>
                                    <h4>R$ 33.750,00</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-2"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Novos Clientes</p>
                                    <h4>198</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-3"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.8% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Faturamento do Mês</p>
                                    <h4>R$ 303.750,00</h4>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <div id="radial-chart-4"></div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-10"><span class="badge badge-soft-success mr-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> Mês Anterior</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title mb-4">Performance Anual (2021)</h4>
                <div id="mixed-chart" class="apex-charts"></div>
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