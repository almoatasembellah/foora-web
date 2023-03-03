@extends('web.layouts.app')

@section('page-styles')
    <style>
        body {
            display: block;
            overflow-x: hidden;
            background-color: #0a1429;
        }

        .header-welcome .container,
        .page-header .container {
            position: relative;
            padding: 45px 0 45px 35px;
            border-left: 15px solid #ff9800;
        }

        .header-welcome .container::before,
        .header-welcome .container::after,
        .page-header .container::before,
        .page-header .container::after {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            width: 100px;
            height: 15px;
            background: #ff9800;
        }

        .header-welcome .container::after,
        .page-header .container::after {
            top: 100%;
            margin-top: -15px;
        }

        .row span {
            color: #ff9800;
        }

        @media (max-width: 768px) {
            .header-welcome .owl-welcome-item {
                position: relative;
                min-height: 500px;
            }

            .header-welcome .owl-welcome-item h1 {
                font-size: 30px;
                font-weight: 600;
            }
        }

        a {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        footer h5 {
            color: #ff9800;
        }

        a:hover, a:focus {
            text-decoration: none;
        }

        .form-control {
            background: #212529;
            border-color: #545454;
        }

    </style>
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="owl-welcome header-welcome position-relative">
            <div class="owl-welcome-item position-relative">
                <img class="welcome-img img-fluid" src="{{ asset('img/background2.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-10 h-100 d-flex align-items-center">
                    <div class="container ms-5">
                        <div class="row justify-content-center">
                            <div class="col-12 col-7">
                                <h1 class="display-4 text-white animated slideInDown mb-4 fw-bolder">We Make Your Way
                                    <span>Easy</span></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Your best Platform to prove your talent
                                    and track our raising Stars.</p>
                                <a href="{{ route('login') }}"
                                   class="btn btn-warning py-md-3 px-md-5 me-3 animated slideInLeft fw-bolder">Login</a>
                                <a href="{{ route('register') }}"
                                   class="btn btn-secondary py-md-3 px-md-5 animated slideInRight fw-bolder">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('web.layouts.footer')
@endsection
