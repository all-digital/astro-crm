@extends('layouts.app2')

@section('nav-header')
{{-- 
@php
    dd($companies)
@endphp --}}

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">Lista de empresas</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->    
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Opcões de Relatório</h4>                

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Modulos</th>
                                <th>Razão Social</th>
                                <th>Nome Fantasia</th>
                                <th>CNPJ</th>
                                <th>Status</th>
                                <th>Responsável</th>
                                <th>Sobrenome</th>
                                <th>Email</th>
                                <th>Última Alteração</th>                                
                                {{-- <th>Usuário da Última Alteração</th>
                                <th>Data de Inserção</th>
                                <th>Usuário de Inserção</th>--}}
                                <th>Mensalidade</th>
                                <th>Ativação</th>
                                <th>Preço por Placa</th>
                                <th>Limite de Usuarios</th>
                                <th>Preço por Usuario extra</th>                         
                      
                            </tr>
                        </thead>

                        <tbody>
                            {{-- datatable --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
                            


@endsection

@push('script-js')        
    <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    {{-- <!-- Datatable init js -->  {{--exemplo datatable --}}
    {{-- <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script> --}}

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

@endpush

@push('customized-js')

    <script>

            let companies = {{ Js::from($companies)}};
            console.log(companies)
                              
            $(document).ready(function(){

                $("#datatable").DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                            'excel',
                            'csv',                            
                            'print',
                            'pageLength',         
                            'colvis',
                            ],
                
                        data: companies,
                        columns: [
                            {data: 'modulos'},
                            {data: 'social_Reason'},
                            {data: 'fantasy_name'},
                            {data: 'cnpj' }, 
                            { data: 'status'},                          
                            { data: 'name_responsible' },
                            { data: 'last_name_responsible' },
                            { data: 'email_responsible' },
                            { data: 'updated_at' },
                            { data: 'monthly_payment' },
                            { data: 'activation' },
                            { data: 'price_per_plate' },
                            { data: 'user_limit' },
                            { data: 'price_per_extra_user' }                                                   
                        ]               
                })
                                                
            });

           
    </script>    



    
@endpush
