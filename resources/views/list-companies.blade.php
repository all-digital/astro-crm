@extends('layouts.app2')

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

        <table id="table_id" class="table table-hover" >
            <thead>
                <tr style="background-color: #283D92; color:white;">
                
                    <th>cnpj</th>
                    <th>Razão Social</th>
                    <th>Nome Fantasia</th>
                    <th>Status</th>
                    <th>Nome do Responsavel</th>
                    <th>Email do responsavel</th>
                    <th>Mes de pagamento</th>
                    <th>Ativaçao</th>
                    <th>Preço por plano</th>
                    <th>Limite de usuario</th>
                    <th>preco usuario extra</th>
                </tr>  
                
            </thead>
            <tbody>
                {{-- datatable --}}
            </tbody>
        
        </table>

    </div>
</div>






       

  

@endsection

@push('script-js')        

    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    

    <script src="{{asset('datatables.bundle.js')}}"></script>

    {{-- <script src="{{asset('assets\libs\datatables.net\js\jquery.dataTables.min.js')}}"></script> --}}
    {{-- <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>  --}}
    

@endpush

@push('customized-js')

    <script>

            $(document).ready( function () {
                $('#table_id').DataTable();
            } );

            name = "darcio de sousa"

            dataSet = [
                {"edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29","edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29"},
                {"edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29","edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29"},
                {"edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29","edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29"},
                {"edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29","edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29"},
                {"edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29","edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29"},
                {"edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29","edit": `<button type="button" ${name} class="btn btn-info ">edit</button>`,"nome":"darcio","sobrenome":"soares","idade":"29"},
            ]

                  

            let companie = @json($companie)  

            console.log(companie)
            console.log(dataSet)

                $('#table_id').DataTable({
                        // "scrollX": true,                                
                        // "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, 80]],
                        responsive: true,             
                        colReorder: true,
                        keys: true,
                        dom: 'Bfrtip',
                        buttons: [
                            'excel',
                            'csv',                            
                            'print',
                            'pageLength',         
                            'colvis',
                            ],

                        data: dataSet,
                        columns: [
                            {data: 'cnpj'}, 
                            {data: 'social_Reason'}, 
                            {data: 'fantasy_name'},
                            {data: 'status'},
                            {data: 'name_responsible'},
                            {data: 'email_responsible'}, 
                            {data: 'monthly_payment'}, 
                            {data: 'activation'},
                            {data: 'price_per_plate'},                      
                            {data: 'user_limit'},
                            {data: 'price_per_extra_user'}
                        //     { data: 'status' },
                        //     { data: 'activated_at' },
                        //     { data: 'connected_at' },
                        //     { data: 'mrc' },
                        //     { data: 'monthly_payment' },
                        //     { data: 'instfee' },
                        //     { data: 'consumption' },
                        //     { data: 'balance' },
                        //     { data: 'imei' },                                                     
                        ]                               
                }); 

    </script>    



    
@endpush
