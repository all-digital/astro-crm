@extends('layouts.app')

@section('nav-header')

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">LISTAGEM DE USÚARIOS</h4>
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
                                <th><strong>Perfil</strong></th>
                                <th><strong>Superior</strong></th>
                                <th><strong>Login</strong></th>
                                <th><strong>Nome</strong></th>
                                {{-- <th><strong>Sobrenome</strong></th> --}}
                                <th><strong>Avatar</strong></th>                              
                                
                                {{-- <th><strong>Data ultima Acesso</strong></th>
                                <th><strong>Data de Ultima Alteração</strong></th>
                                <th><strong>Usuario da Ultima Alteração</strong></th>
                                <th><strong>Usuario de inserção</strong></th>                                                    --}}
                      
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

        
            let users = {{ Js::from($users)}};
            console.log(users)
                              
            $(document).ready(function(){

                //por conta das imagens de usuario se add  'excel', 'csv',  em buttons do datatable, vai dar erro      
                                        
                $("#datatable").DataTable({
                    dom: 'Bfrtip',
                    buttons: [                         
                            'pageLength',         
                            'colvis',
                            ],
                
                        data: users,
                        columns: [
                            {data: 'button'},
                            {data: 'company'},
                            {data: 'status'},
                            {data: 'last_name' }, 
                            { data: 'status'},                          
                            { data: 'login' },
                            { data: 'email' },
                            { data: 'avatar' }
                                                  
                        ]               
                })
                                                
            });

           
    </script>    



    
@endpush
