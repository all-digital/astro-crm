<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles template -->
    <meta content="" name="description" />
    <meta content="Alldigital" name="author" />
      <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/icon.png')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Astro Sistemas Integrados') }}</title>
    {{-- <title>Serviços - Astro Sistemas Integrados</title> --}}
    
    <script src="{{asset('libs/alpinejs_3.7.1.min.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Styles template -->


      <!-- DataTables -->
        <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
        <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css')}}" />


    <!-- Bootstrap Css -->
     <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />     
     <!-- Icons Css -->
     <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />     

     <link  href="{{asset('custom/css/style.css')}}" rel="stylesheet">
     
     <link  href="{{asset('custom/css/animation.css')}}" rel="stylesheet">     

     {{-- <link  href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet"/>

     <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css"> --}}
            
     @livewireStyles

</head>
<body data-layout="detached" data-topbar="colored">
    {{-- <div id="app"> --}}

    @auth
        <div class="container-fluid">

            <div id="layout-wrapper">
                <header id="page-topbar" class="header-responsive" style="background: #fff;">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/logo-astro.png')}}" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-astro.png')}}" alt="" height="18">
                                    </span>
                                </a>
    
                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('assets/images/logo-sm-dark.png')}}" alt="" height="20">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{asset('assets/images/logo-astro.png')}}" alt="" height="70">
                                    </span>
                                </a>
                            </div>
    
                            <button type="button"
                                class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>
    
                            <div class="topnav central-nav">
                                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                                        <ul class="navbar-nav">
    
                                            <li class="nav-item dropdown">
    
                                                <a class="nav-link dropdown-toggle arrow-none menu-item" href="#"
                                                    id="topnav-dashboard" role="button">
                                                    Dashboards <div class="arrow-down"></div>
                                                </a>
    
                                                <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                                    <a href="dashboard-geral.html"
                                                        class="dropdown-item menu-item">Principal</a>
                                                    <a href="#" class="dropdown-item menu-item">Financeiro</a>
                                                    <a href="#" class="dropdown-item menu-item">Vendas</a>
                                                    <a href="#" class="dropdown-item menu-item">Leads</a>
                                                    <a href="#" class="dropdown-item menu-item">Estoque</a>
                                                </div>
    
                                            </li>
    
                                            <li class="nav-item dropdown">
    
                                                <a class="nav-link dropdown-toggle arrow-none menu-item" href="#"
                                                    id="topnav-dashboard" role="button">
                                                    CRM <div class="arrow-down"></div>
                                                </a>
    
                                                <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                                    <div class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle arrow-none menu-item"
                                                            href="#" id="topnav-email" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Leads
                                                        </a>
                                                        <div class="dropdown-menu menu-item" aria-labelledby="topnav-email">
                                                            <a href="#" class="dropdown-item">Cadastrar</a>
                                                            <a href="#" class="dropdown-item">Consultar</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle arrow-none menu-item"
                                                            href="#" id="topnav-email" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Clientes
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                            <a href="#" class="dropdown-item menu-item">Cadastrar</a>
                                                            <a href="#" class="dropdown-item menu-item">Consultar</a>
                                                        </div>
                                                    </div>
    
                                                    <a href="index-2.html" class="dropdown-item menu-item">Pipeline de
                                                        Vendas</a>
                                                    <div class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle arrow-none menu-item"
                                                            href="#" id="topnav-email" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Pedidos
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                            <a href="#" class="dropdown-item menu-item">Cadastrar</a>
                                                            <a href="#" class="dropdown-item menu-item">Consultar</a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle arrow-none menu-item"
                                                            href="#" id="topnav-email" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Veículos
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                            <a href="#" class="dropdown-item menu-item">Cadastrar</a>
                                                            <a href="#" class="dropdown-item menu-item">Consultar</a>
                                                        </div>
                                                    </div>
    
                                                    <div class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle arrow-none menu-item"
                                                            href="#" id="topnav-email" role="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Propostas
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                            <a href="#" class="dropdown-item menu-item">Cadastrar</a>
                                                            <a href="#" class="dropdown-item menu-item">Consultar</a>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            </li>
    
                                            <li class="nav-item dropdown">
    
                                                <a class="nav-link dropdown-toggle arrow-none menu-item" href="#"
                                                    id="topnav-app-pages" role="button">
                                                    Financeiro <div class="arrow-down"></div>
                                                </a>
    
                                                <div class="dropdown-menu" aria-labelledby="topnav-app-pages">
    
                                                    <a href="#" class="dropdown-item menu-item">Visão Geral</a>
    
    
                                                    <div class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle arrow-none menu" href="#"
                                                            id="topnav-email" role="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="false" aria-expanded="false">
                                                            Gateway de Pagamento
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                            <a href="#" class="dropdown-item menu-item">Notas Fiscais</a>
                                                            <a href="#" class="dropdown-item menu-item">Cobrança</a>
                                                            <a href="#" class="dropdown-item menu-item">Régua de
                                                                Cobrança</a>
                                                        </div>
                                                    </div>
    
                                                </div>
    
                                            </li>
    
                                            <li class="nav-item dropdown">
    
                                                <a class="nav-link dropdown-toggle arrow-none menu-item" href="#"
                                                    id="topnav-app-pages" role="button">
                                                    Contábil <div class="arrow-down"></div>
                                                </a>
    
                                                <div class="dropdown-menu" aria-labelledby="topnav-app-pages">
    
                                                    <a href="#" class="dropdown-item menu-item">Fluxo de Caixa</a>
    
                                                    <a href="#" class="dropdown-item menu-item">Contas a Pagar</a>
    
                                                    <a href="#" class="dropdown-item menu-item">Contas a Receber</a>
    
                                                    <a href="#" class="dropdown-item menu-item">DRE</a>
    
                                                    <a href="#" class="dropdown-item menu-item">Estoque</a>
    
                                                    <a href="#" class="dropdown-item menu-item">Conciliação Bancária</a>
    
                                                    <a href="#" class="dropdown-item menu-item">Movimentação</a>
    
                                                    <a href="#" class="dropdown-item menu-item">Contas</a>
    
                                                </div>
    
                                            </li>
    
                                            <!--  DROPDOWN 2 COLUMNS 
    
                                          <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                               >
                                                Marketplace  <div class="arrow-down"></div>
                                            </a>
    
                                            <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg dropdown-menu-right"
                                                aria-labelledby="topnav-pages">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div>
    
                                                            <a href="pages-login.html" class="dropdown-item">Login</a>
                                                            <a href="pages-register.html" class="dropdown-item">Register</a>
                                                            <a href="pages-recoverpw.html" class="dropdown-item">Recover
                                                                Password</a>
                                                            <a href="pages-lock-screen.html" class="dropdown-item">Lock Screen</a>
                                                            <a href="pages-starter.html" class="dropdown-item">Starter Page</a>
                                                            <a href="pages-invoice.html" class="dropdown-item">Invoice</a>
                                                            <a href="pages-profile.html" class="dropdown-item">Profile</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
    
                                                            <a href="pages-maintenance.html" class="dropdown-item">Maintenance</a>
                                                            <a href="pages-comingsoon.html" class="dropdown-item">Coming Soon</a>
                                                            <a href="pages-timeline.html" class="dropdown-item">Timeline</a>
                                                            <a href="pages-faqs.html" class="dropdown-item">FAQs</a>
                                                            <a href="pages-pricing.html" class="dropdown-item">Pricing</a>
                                                            <a href="pages-404.html" class="dropdown-item">Error 404</a>
                                                            <a href="pages-500.html" class="dropdown-item">Error 500</a>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            </div> 
                                        </li> 
                                    -->
    
                                            <li class="nav-item dropdown">
    
                                                <a class="nav-link dropdown-toggle arrow-none menu-item" href="#"
                                                    id="topnav-dashboard" role="button">
                                                    Administrativo <div class="arrow-down"></div>
                                                </a>
    
                                                <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                                    <a href="#" class="dropdown-item menu-item">Categorias</a>
                                                    <a href="#" class="dropdown-item menu-item">Serviços</a>
                                                    <a href="#" class="dropdown-item menu-item">Metas</a>
                                                    <a href="#" class="dropdown-item menu-item">Fornecedores</a>
                                                    <a href="#" class="dropdown-item menu-item">Plataformas</a>
                                                    <a href="#" class="dropdown-item menu-item">Regras de Aprovação</a>
                                                    <a href="#" class="dropdown-item menu-item">Certificado Digital</a>
                                                </div>
    
                                            </li>
    
                                            <li class="nav-item dropdown">
    
                                                <a class="nav-link dropdown-toggle arrow-none menu-item" href="#"
                                                    id="topnav-dashboard" role="button">
                                                    Relatórios <div class="arrow-down"></div>
                                                </a>
    
                                                <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                                    <a href="#" class="dropdown-item menu-item">Vendas</a>
                                                    <a href="#" class="dropdown-item menu-item">Estoque</a>
                                                    <a href="#" class="dropdown-item menu-item">Clientes</a>
                                                    <a href="#" class="dropdown-item menu-item">Veículos</a>
                                                    <a href="#" class="dropdown-item menu-item">Serviços</a>
                                                </div>
    
                                            </li>   
                                           
    
    
    
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
    
                        <div class="d-flex">
    
                            <div class="dropdown d-inline-block ms-2">
                                <button type="button" class="btn header-item noti-icon waves-effect"
                                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-magnify" style="color: #000;"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-search-dropdown">
    
                                    <form class="p-3">
                                        <div class="m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Buscar..."
                                                    aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i
                                                            class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
    
                            <div class="dropdown d-none d-lg-inline-block ms-1">
                                <button type="button" class="btn header-item noti-icon waves-effect"
                                    data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen" style="color: #000;"></i>
                                </button>
                            </div>
    
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect"
                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-bell-outline" style="color: #000;"></i>
                                    <span class="badge bg-danger rounded-pill">13</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"> Notificações </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="small"> Ver Todos</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">
                                        <a href="" class="text-reset notification-item">
                                            <div class="d-flex align-items-start">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mt-0 mb-1">Venda concluída</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">Sua venda de 1 Simcard Vivo foi concluída</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min atrás
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="d-flex align-items-start">
                                                <img src="{{asset('assets/images/users/avatar-3.jpg')}}"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="mt-0 mb-1">Gilberto Vicente</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">Novo vendedor adicionado no quadro</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hora atrás
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="" class="text-reset notification-item">
                                            <div class="d-flex align-items-start">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mt-0 mb-1">Produto enviado</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">Produto "Suntech" foi enviado para o cliente</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min atrás
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
    
                                        <a href="" class="text-reset notification-item">
                                            <div class="d-flex align-items-start">
                                                <img src="{{asset('assets/images/users/avatar-4.jpg')}}"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="mt-0 mb-1">Bianca Rodrigues</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">Nova vendedora adicionada ao quadro</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hora atrás
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2 border-top d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                                            href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> Ver Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
    
    
    
    
    
                            <!-- USER -->
    
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-2.jpg')}}"
                                        alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ms-1" style="color: #000;">{{ Auth::user()->name ?? ''}}</span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block" style="color: #000;"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-user font-size-16 align-middle me-1"></i>
                                        Perfil</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-wallet font-size-16 align-middle me-1"></i> Meu
                                        Dinheiro</a>
                                    <a class="dropdown-item d-block" href="#"><span
                                            class="badge bg-success float-end"></span><i
                                            class="bx bx-wrench font-size-16 align-middle me-1"></i> Configurações</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-pencil font-size-16 align-middle me-1"></i>
                                        Layout</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#"><i
                                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Sair</a>
                                </div>
                            </div>
    
                            <!--                        
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-settings-outline"></i>
                            </button>
                        </div>
                        -->
                        </div>
                    </div>
                </header>
    @endauth
                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">
    
                    <div class="page-content">
    
                        <!-- start page title -->

                        @yield('nav-header')                        

                        <!-- end page title -->                                              
                        

                        <main >
                            @yield('content')
                        </main>



                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12" style="text-align: center;">
                                        2022 © ASTRO - SISTEMAS INTEGRADOS
                                        | POWERED BY<a href="https://agenciaalldigital.com"> ALLDIGITAL
                                    </div>    
                                </div>
                            </div>
                        </footer>

                    </div> <!-- end page-content -->
                </div>
                <!-- end main content-->

            </div>
          <!-- END layout-wrapper -->



        </div>    
            <!-- end container-fluid -->

            <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                </div>

            </div>
            <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
                    
       {{-- end div #app --}}
   {{-- </div> --}}

   
   <!-- App js build aplication-->
   {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

   
  
   {{-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>


   
    
    
   
   @stack('script-js')
   @stack('customized-js')
   

    @livewireScripts
</body>
</html>
