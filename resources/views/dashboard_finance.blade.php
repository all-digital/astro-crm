@extends('layouts.app')

@section('nav-header')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Dashboard Financeira</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active" style="">
                            <h4 style="text-align: center; color: #FFF;font-size: 8px;">Saldo Disponível:</h4>
                            <h2 style="text-align: center; color: #FFF; font-weight: bold;font-size: 18px;">R$ 42.878,00</h2>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    
@endsection

@section('content')



<div class="row" style="margin-bottom: 20px;">
    <div class="col-md-10"></div>
    <div class="col-md-2">
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
</div>

<div class="row">
    <div class="col-xl-6">

        <div class="row">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <div>
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Clientes em Dia</p>
                                    <h4>3.950</h4>
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
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Ativações</p>
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
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Clientes Inadimplentes</p>
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
                                    <p class="text-muted font-weight-medium mt-1 mb-2">Cancelamentos</p>
                                    <h4>R$ 7.450,00</h4>
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

                            
    <div class="col-lg-6">
        <div class="card pb-2">
            <div class="card-body">

                <h4 class="card-title mb-4">Faturamento</h4>

                <div class="row text-center">
                    <div class="col-4">
                        <h5 class="mb-0">R$ 303.750,00</h5>
                        <p class="text-muted text-truncate">Previsto</p>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0">69421</h5>
                        <p class="text-muted text-truncate">Confirmado</p>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0">89854</h5>
                        <p class="text-muted text-truncate">Recebido</p>
                    </div>
                </div>

                <canvas id="pie" height="200"></canvas>

            </div>
        </div>
    </div>
    <!-- end col -->

    <!-- <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Evolução Financeira 2021</h4>

                <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div> -->
    
</div>
<!-- end row -->

<div class="row">

    <div class="col-lg-6">
        <div class="card pb-4">
            <div class="card-body">

                <h4 class="card-title mb-4">Cobranças</h4>

                <div class="row text-center">
                    <div class="col-4">
                        <h5 class="mb-0">9595</h5>
                        <p class="text-muted text-truncate">Previstas</p>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0">36524</h5>
                        <p class="text-muted text-truncate">Vencidas</p>
                    </div>
                    <div class="col-4">
                        <h5 class="mb-0">62541</h5>
                        <p class="text-muted text-truncate">Recebidas</p>
                    </div>
                </div>

                <canvas id="doughnut" height="210"></canvas>

            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                
                <h4 class="card-title mb-4">Performance Mensal</h4>
                <div id="mixed-chart1" class="apex-charts2"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
</div>


@endsection


@push('script-js')

    <!-- Chart JS -->
    <script src="assets/libs/chart.js/Chart.bundle.min.js"></script>
    <script src="assets/js/pages/chartjs.init.js"></script>

      <!-- apexcharts -->
      <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="custom/js/dashboardFinanceira.js"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    
@endpush
