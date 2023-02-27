@extends('web.layouts.app')

@section('page-styles')
    <style>
        body {
            background: #201c2b;
            display: flex;
            align-items: center;
            height: 100vh;
        }
        .container{
            margin-top: 70px !important;
        }
    </style>
@endsection

@section('content')
    <div class="container d-flex w-100 align-items-center bg-white rounded-5 p-0">
        <div class="col-md-5">
            <img src="{{ asset('img/login.jpeg') }}" alt="Sample photo" class="img-fluid"/>
        </div>

        <div class="col-md-7">
            <div class="w-100 text-center">
                <h3 class="my-4">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="form-check">
                            <input class="form-check-input" style="float: unset !important" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>


                    <div class="row d-flex justify-content-center my-3">
                        <button type="submit" class="btn btn-primary w-50">
                            {{ __('Login') }}
                        </button>

                    </div>
                </form>

            </div>
        </div>

    </div>

@endsection
