@extends('layouts.app2')

@section('nav-header')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Cliente</h4>
        </div>
    </div>
</div>
<!-- end page title -->

@endsection

@section('content')

    @can('create-service')
        <h1>gerente autorizado </h1>
    @endcan

    {{-- <h1>Teste 2 </h1> --}}
@endsection

@push('script-js')
    <script src="{{asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    
    <script src="{{asset('assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>

   
    <script src="{{asset('assets/js/app.js')}}"></script>

    <script src="{{asset('assets\libs\inputmask\min\jquery.inputmask.bundle.min.js')}}"></script>
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endpush

