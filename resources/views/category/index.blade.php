@extends('layouts.app')

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
                                <th><strong>Ação</strong></th>
                                <th><strong>Empresa</strong></th>
                                <th><strong>Nome</strong></th>
                                <th><strong>Descrição</strong></th>                                
                                <th><strong>Usuário de Inserção</strong></th>                                                                                     
                                <th><strong>Data de Inserção</strong></th>
                                <th><strong>Usuário da Última edição</strong></th>
                                <th><strong>Data da Última edição</strong></th>
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

    let categories = {{ Js::from($categories)}};
            console.log(categories)
           
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
                
                        data: categories,
                        columns: [
                            {data: 'button'},
                            {data: 'company'},    
                            { data: 'name'},
                            { data: 'description'},
                            {data: 'responsible_for_insert'},
                            {data: 'created_at'},                                                       
                            { data: 'responsible_last_updated'},                       
                            { data: 'updated_at' }                         
                                                                                        
                        ]               
                })
                                                
            });

           
    </script>    



    
@endpush
