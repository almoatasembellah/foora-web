@extends('web.layouts.app')

@section('page-styles')
    <style>
        body {
            background: #201c2b;
            display: flex;
            align-items: center;
            height: 100vh;
        }

        .container {
            margin-top: 70px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container d-flex w-100 align-items-center bg-white rounded-5 p-0">
        <div class="col-md-5 bg-success">
            <img src="{{ asset('img/players.JPG') }}" alt="Sample photo" class="img-fluid"/>
        </div>

        <div class="col-md-7">
            <div class="w-100 text-center">
                <h3 class="my-4">Register</h3>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text"
                                   class="form-control @error('name') is-invalid @enderror" name="name"
                                   value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                   class="form-control @error('email') is-invalid @enderror" name="email"
                                   value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password"
                               class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password"
                                   required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm"
                               class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    {{--the new fields starts here--}}                {{--the new fields starts here--}}
                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text"
                                   class="form-control @error('phone') is-invalid @enderror" name="phone"
                                   value="{{ old('phone') }}" required autocomplete="phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('age') }}</label>
                        <div class="col-md-6">
                            <input id="age" type="text" class="form-control @error('age') is-invalid @enderror"
                                   name="age" value="{{ old('age') }}" required autocomplete="age">
                            @error('age')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="phone"
                               class="col-md-4 col-form-label text-md-end">{{ __('height') }}</label>
                        <div class="col-md-6">
                            <input id="height" type="text"
                                   class="form-control @error('height') is-invalid @enderror" name="height"
                                   value="{{ old('height') }}" required autocomplete="height">
                            @error('height')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phone"
                               class="col-md-4 col-form-label text-md-end">{{ __('weight') }}</label>
                        <div class="col-md-6">
                            <input id="weight" type="text"
                                   class="form-control @error('weight') is-invalid @enderror" name="weight"
                                   value="{{ old('weight') }}" required autocomplete="weight">
                            @error('weight')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
