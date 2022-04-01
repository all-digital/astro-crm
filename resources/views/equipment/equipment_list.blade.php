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
                    <h4 class="page-title mb-0 font-size-18">LISTAGEM DE EQUIPAMENTOS</h4>
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
                                <th><strong>Editar</strong></th>
                                <th><strong>Excluir</strong></th>
                                <th><strong>Empresa</strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong>Usuario Inserção</strong></th>
                                <th><strong>Data Inserção</strong></th>
                                <th><strong>Fornecedor</strong></th>
                                <th><strong>Modelo</strong></th>
                                <th><strong>IMEI</strong></th>
                                <th><strong>Veículo</strong></th>                               
                                <th><strong>Simcard</strong></th>
                                <th><strong>Usuario Última Edição</strong></th>
                                <th><strong>Data Última Edição</strong></th>                                                          
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
            let teste = "id é 1 teste foi"
            companies = [{
                            "activation": "100.00",
                            "cnpj": "1769431944",
                            "color": "verde",
                            "created_at": "25/01/2022 16:37",
                            "email_responsible": "auer.thaddeus@gmail.com",
                            "fantasy_name": "Zemlak-Runolfsson",
                            "id": 1,
                            "last_name_responsible": "Cartwright",
                            "logo": "logo teste",
                            "edit": "<a class='btn btn-outline-primary fas fa-edit ms-2' onClick='alert(`${teste}`)' href='https://www.w3schools.com'></a>",
                            "delete": "<button class='btn btn-outline-primary fas fa-trash-alt ms-3' onClick='alert(`o id é 1`)'></button>",
                            "monthly_payment": "100.00",
                            "name_responsible": "Sonia Goyette",
                        },
                        {
                            "activation": "100.00",
                            "cnpj": "1769431944",
                            "color": "verde",
                            "created_at": "25/01/2022 16:37",
                            "email_responsible": "auer.thaddeus@gmail.com",
                            "fantasy_name": "Zemlak-Runolfsson",
                            "id": 1,
                            "last_name_responsible": "Cartwright",
                            "logo": "logo teste",
                            "edit": "<a class='btn btn-outline-primary fas fa-edit ms-2' onClick='alert(`${teste}`)' href='https://www.w3schools.com'></a>",
                            "delete": "<button class='btn btn-outline-primary fas fa-trash-alt ms-3' onClick='alert(`o id é 1`)'></button>",
                            "monthly_payment": "100.00",
                            "name_responsible": "Sonia Goyette",
                        }]
                              
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
                            {data: 'edit'},
                            {data: 'delete'},
                            {data: 'activation'},
                            {data: 'fantasy_name'},
                            {data: 'cnpj' }, 
                            { data: 'color'},                          
                            { data: 'name_responsible' },
                            { data: 'last_name_responsible' },
                            { data: 'email_responsible' },
                            { data: 'created_at' },
                            { data: 'monthly_payment' },
                            { data: 'activation' },
                            { data: 'logo' }
                                                                         
                        ]               
                })
                                                
            });

           
    </script>    



    
@endpush
