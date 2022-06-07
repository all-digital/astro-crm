@extends('layouts.app')

@section('nav-header')

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
                                <th><strong>Modulos</strong></th>
                                <th><strong>Razão Social</strong></th>
                                <th><strong>Nome Fantasia</strong></th>
                                <th><strong>CNPJ</strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong>Responsável</strong></th>
                                <th><strong>Sobrenome</strong></th>
                                <th><strong>Email</strong></th>
                                <th><strong>Última Alteração</strong></th>                                
                                {{-- <th>Usuário da Última Alteração</th>
                                <th>Data de Inserção</th>
                                <th>Usuário de Inserção</th>--}}
                                <th><strong>Mensalidade</strong></th>
                                <th><strong>Ativação</strong></th>
                                <th><strong>Preço por Placa</strong></th>
                                <th><strong>Limite de Usuarios</strong></th>
                                <th><strong>Preço por Usuario extra</strong></th>                         
                      
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
    <!-- Buttons datatable libs -->
    <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Responsive datatable -->
    <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

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
                            {data: 'button'},
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
