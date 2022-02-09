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
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Responsive Table</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Responsive Table</li>
                    </ol>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Example</h4>
                        <p class="card-title-desc">This is an experimental awesome solution for responsive
                            tables with complex data.</p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                <table id="table_id" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th data-priority="1">cnpj</th>
                                            <th data-priority="2">Razão Social</th>
                                            <th data-priority="3">Nome Fantasia</th>
                                            <th data-priority="4">Status</th>
                                            <th data-priority="5">Nome do Responsavel</th>
                                            <th data-priority="6">Email do responsavel</th>
                                            <th data-priority="7">Mes de pagamento</th>
                                            <th data-priority="8">Ativaçao</th>
                                            <th data-priority="9">Preço por plano</th>
                                            <th data-priority="10">Limite de usuario</th>
                                            <th data-priority="11">preco usuario extra</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                                            <td>597.74</td>
                                            <td>12:12PM</td>
                                            <td>14.81 (2.54%)</td>
                                            <td>582.93</td>
                                            <td>597.95</td>
                                            <td>597.73 x 100</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                        </tr>
                                        <tr>
                                            <th>AAPL <span class="co-name">Apple Inc.</span></th>
                                            <td>378.94</td>
                                            <td>12:22PM</td>
                                            <td>5.74 (1.54%)</td>
                                            <td>373.20</td>
                                            <td>381.02</td>
                                            <td>378.92 x 300</td>
                                            <td>378.99 x 100</td>
                                            <td>505.94</td>
                                            <td>597.91 x 300</td>
                                            <td>731.10</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->



        {{-- <table id="table_id" class="table table-hover" >
            <thead>
                <tr style="background-color: #283D92; color:white;">
                    <th>Company</th>
                                            <th data-priority="1">Last Trade</th>
                                            <th data-priority="3">Trade Time</th>
                                            <th data-priority="1">Change</th>
                                            <th data-priority="3">Prev Close</th>
                                            <th data-priority="3">Open</th>
                                            <th data-priority="6">Bid</th>
                                            <th data-priority="6">Ask</th>
                                            <th data-priority="6">1y Target Est</th>
                

                </tr>  
                
            </thead>
            <tbody>
                
            </tbody>
        
        </table> --}}

    </div>
</div>






       

  

@endsection

@push('script-js')        
   
{{-- <script src="{{asset('datatables.bundle.js')}}"></script> --}}
    {{-- <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Responsive Table js -->
    <script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script> --}}
    <!-- App js -->
    <script src="assets/js/app.js"></script>

    {{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/af-2.3.7/b-2.2.2/b-colvis-2.2.2/b-html5-2.2.2/b-print-2.2.2/cr-1.5.5/date-1.1.1/fc-4.0.1/fh-3.2.1/kt-2.6.4/r-2.2.9/rg-1.1.4/rr-1.2.8/sc-2.0.5/sb-1.3.1/sp-1.4.0/sl-1.3.4/sr-1.1.0/datatables.min.js"></script> --}}

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.7/js/autoFill.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/colreorder/1.5.5/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/4.0.1/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.2.1/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/keytable/2.6.4/js/dataTables.keyTable.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowgroup/1.1.4/js/dataTables.rowGroup.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchbuilder/1.3.1/js/dataTables.searchBuilder.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchbuilder/1.3.1/js/searchBuilder.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/searchPanes.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/staterestore/1.1.0/js/dataTables.stateRestore.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/staterestore/1.1.0/js/stateRestore.bootstrap5.min.js"></script>

@endpush

@push('customized-js')

    <script>

            $('#table_id').DataTable({
                        "scrollX": true,                                
                        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, 80]],
                        responsive: true,             
                        colReorder: true,
                        keys: true,
                        dom: 'Bfrtip',
                        buttons: [
                            'excel',
                            'csv',                            
                            'print'
                            // 'pageLength',         
                            // 'colvis',
                            ]

                        // data: dataSet,
                        // columns: [
                        //     { data: 'login' }, 
                        //     {data: 'description'},
                        //     { data: 'carrier_name'},                          
                        //     { data: 'callerid' },
                        //     { data: 'iccid' },
                        //     { data: 'status' },
                        //     { data: 'activated_at' },
                        //     { data: 'connected_at' },
                        //     { data: 'mrc' },
                        //     { data: 'monthly_payment' },
                        //     { data: 'instfee' },
                        //     { data: 'consumption' },
                        //     { data: 'balance' },
                        //     { data: 'imei' },                                                     
                        // ]
            }); 


            // $(document).ready( function () {
            //     $('#table_id').DataTable();
            // } );

            // $(function()
            // {
            //     $(".table-responsive").responsiveTable({
            //     addDisplayAllBtn:"btn btn-secondary",
            //     buttons: [
            //                 'excel',
            //                 'csv',                            
            //                 'print',
            //                 'pageLength',         
            //                 'colvis',
            //                 ],
            
            // })           
            // ,$(".btn-toolbar [data-toggle=dropdown]").attr("data-bs-toggle","dropdown")
                
            
            // });

           
    </script>    



    
@endpush
