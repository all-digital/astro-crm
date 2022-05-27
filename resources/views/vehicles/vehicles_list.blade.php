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
                    <h4 class="page-title mb-0 font-size-18">LISTAGEM DE VEÍCULOS</h4>
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
                                <th><strong>Botão</strong></th>
                                <th><strong>Empresa</strong></th>
                                <th><strong>Status</strong></th>                               
                                <th><strong>Usuário de Inserção</strong></th>
                                <th><strong>Data de Inserção</strong></th>
                                <th><strong>Marca</strong></th>
                                <th><strong>Modelo</strong></th>                               
                                <th><strong>Ano</strong></th>
                                <th><strong>Placa</strong></th>
                                <th><strong>Valor</strong></th>
                                <th><strong>Equipamento</strong></th>
                                <th><strong>Data última atualização</strong></th>                         
                                <th><strong>Usuario última atualização</strong></th>  
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

            companies = [{"activation": "100.00",
                            "cnpj": "1769431944",
                            "color": "verde",
                            "created_at": "25/01/2022 16:37",
                            "email_responsible": "auer.thaddeus@gmail.com",
                            "fantasy_name": "Zemlak-Runolfsson",
                            "id": 1,
                            "last_name_responsible": "Cartwright",
                            "logo": "logo teste",
                            "modulos": "<a class='btn btn-outline-primary fas fa-edit ms-2' onClick='alert(`${teste}`)' href='https://www.w3schools.com' target='_blank'></a>",
                            "monthly_payment": "100.00",
                            "name_responsible": "Sonia Goyette",
                            "price_per_extra_user": "1000,15",
                            "price_per_plate": "100,20",
                            "social_Reason": "Ortiz, Halvorson and Lind",
                            "status": "Status OK",
                            "updated_at": "25/01/2022 16:37",
                            "user_id": 1,
                            "user_limit": "5"}]

              
            let vehicles = {{ Js::from($vehicles)}};
            console.log(vehicles)

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
                
                        data: vehicles,
                        columns: [
                            {data: 'button'},
                            {data: 'company'},
                            {data: 'fantasy_name'},
                            {data: 'responsible_for_insert'}, 
                            { data: 'created_at'},                          
                            { data: 'responsible_for_insert'},
                            { data: 'brand'},
                            { data: 'model'},
                            { data: 'year'},
                            { data: 'license_plate'},
                            { data: 'equipment'},
                            { data: 'equipment'},
                            { data: 'updated_at'},
                                                                              
                        ]               
                })
                                                
            });

                               // {data: 'button'},
            //                 {data: 'company'},
            //                 {data: 'fantasy_name'},
            //                 {data: 'responsible_for_insert' }, 
            //                 { data: 'created_at'},                          
            //                 { data: 'responsible_for_insert' },
            //                 { data: 'brand' },
            //                 { data: 'model' },
            //                 { data: 'year' },
            //                 { data: 'license_plate' },
            //                 { data: 'equipment' },
            //                 { data: 'license_plate' },
            //                 { data: 'updated_at' },
            //                 { data: 'id' }     


            // {data: 'modulos'},
            //                 {data: 'social_Reason'},
            //                 {data: 'fantasy_name'},
            //                 {data: 'cnpj' }, 
            //                 { data: 'status'},                          
            //                 { data: 'name_responsible' },
            //                 { data: 'last_name_responsible' },
            //                 { data: 'email_responsible' },
            //                 { data: 'updated_at' },
            //                 { data: 'monthly_payment' },
            //                 { data: 'activation' },
            //                 { data: 'price_per_plate' },
            //                 { data: 'user_limit' },
            //                 { data: 'price_per_extra_user' }       
           
    </script>    



    
@endpush
