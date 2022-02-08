@extends('layouts.app')

@section('nav-header')

 <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="page-title mb-0 font-size-18">SERVIÇOS</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    
@endsection

@section('content')
      

    {{-- @livewire('table-services') --}}
    {{-- <livewire:table-services></livewire:table-services> --}}
    @include('components.table-services')

@endsection

@push('script-js')

    <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Table Editable plugin -->
    <script src="{{asset('assets/libs/table-edits/build/table-edits.min.js')}}"></script>

    {{-- <script src="{{asset('assets/js/pages/table-editable.int.js')}}"></script> --}}

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="{{'assets\libs\inputmask\min\jquery.inputmask.bundle.min.js'}}"></script>

@endpush
