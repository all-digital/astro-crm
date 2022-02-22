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
                                <h5 class="text-white font-size-20">Seja bem vindo ao Astro!</h5>
                                <p class="text-white-50 mb-0">Sistema de rastreamento.</p>
                                <a href="index.html" class="logo logo-admin mt-4">
                                    {{-- <img src="assets/images/logo-sm-dark.png" alt="" height="55"> --}}
                                    <img src="{{asset('assets/images/logo-sm-dark.png')}}" alt="" height="55">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>                                   
                                        
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label" for="password">{{ __('Password') }}</label>                                   

                                        <input type="password" id="password" autocomplete="current-password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror                                    
                                    </div>


                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    
                                        <button type="submit" class="btn btn-primary w-100 waves-effect waves-light mt-3">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link mt-2" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif                               

                                </form>
                            </div>

                        </div>
                    </div>
                

                </div>
            </div>
        </div>
    </div>

@endsection
