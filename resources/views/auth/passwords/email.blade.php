@extends('layouts.app')


@section('content')

<div class="account-pages my-5 pt-sm-5">
    <div class="container" style="margin-top:-150px;">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-login text-center">
                        <div class="bg-login-overlay"></div>
                        <div class="position-relative">
                            <h5 class="text-white font-size-20">Astro de Rastreamento</h5>
                            <p class="text-white-50 mb-0">Recuperação de senha</p>

                            <a href="index.html" class="logo logo-admin mt-4">
                                <img src="{{asset('assets/images/logo-sm-dark.png')}}" alt="" height="55">
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-5">

                        <div class="p-2">

                            @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="alert alert-info text-center mb-4" role="alert">
                                    Enter your Email and instructions will be sent to you!
                                </div>
     

                                <div class="mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>
                                    <input id="useremail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-0">
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary w-md waves-effect waves-light"
                                            type="submit">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection
