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
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Default Datatable</h4>
                    <p class="card-title-desc">DataTables has most features enabled by default, so all
                        you need to do to use it with your own tables is to call the construction
                        function: <code>$().DataTable();</code>.
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
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
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    {{-- <!-- Datatable init js -->  {{--exemplo datatable --}}
    {{-- <script src="assets/js/pages/datatables.init.js"></script> --}}

    <!-- App js -->
    <script src="assets/js/app.js"></script>


@endpush

@push('customized-js')

    <script>


                  dataSet = [ {'Name':"teste table",
                            'Position':"teste table",
                           'Office':"teste table",
                            'Age':"teste table",                         
                            'Start date':"teste table" ,
                            'Salary':"teste table" ,
                            'Name':"teste table" ,
                            'Position1':"teste table" ,
                            'Office1':"teste table" ,
                            'Age1':"teste table" ,
                            'Start date1':"teste table" ,
                            'Salary1':"teste table" },

                            {'Name':"teste passou",
                            'Position':"teste passou",
                           'Office':"teste passou",
                            'Age':"teste passou",                         
                            'Start date':"teste passou" ,
                            'Salary':"teste passou" ,
                            'Name':"teste passou" ,
                            'Position1':"teste passou" ,
                            'Office1':"teste passou" ,
                            'Age1':"teste passou" ,
                            'Start date1':"teste passou" ,
                            'Salary1':"teste passou" }
                        ]


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
                
                        data: dataSet,
                        columns: [
                            {data: 'Name' }, 
                            {data: 'Position'},
                            {data: 'Office'},
                            { data: 'Age'},                          
                            { data: 'Start date' },
                            { data: 'Salary' },
                            { data: 'Name' },
                            { data: 'Position1' },
                            { data: 'Office1' },
                            { data: 'Age1' },
                            { data: 'Start date1' },
                            { data: 'Salary1' }                                                   
                        ]               
                })

                // ,$("#datatable-buttons").DataTable({lengthChange:!1,buttons:["copy","excel","pdf","colvis"]}).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$("#datatable_length select").addClass("form-select form-select-sm")
                                   
            });

           
    </script>    



    
@endpush
