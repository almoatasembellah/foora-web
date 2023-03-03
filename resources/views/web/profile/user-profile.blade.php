@extends('web.layouts.app')
@include('web.layouts.navbar')
@section('page-styles')
    <style>
        .glass{
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 20px;
            border:1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .back-color {
            color: #000000;
            font-weight: 500;

        }


        .profile-tab-nav {
            min-width: 250px;
        }

        .tab-content {
            flex: 1;
        }

        .form-group {
            margin-bottom: 2rem;
            border-radius: 3rem;
        }
    </style>
@endsection
@section('content')
    <section class="py-5 my-5 mb-5">
        <div class="container glass">

            <div class="back-color rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right me-4">
                    <div class="p-5 ms-0">
                        <div>
                            <div class="d-flex justify-content-start ms-2">
                                <img src="{{ url(Auth::user()->picture ??
                                '/public/img/soccer-player.png') }}" class="img-profile rounded-circle" alt="User Image" width="24" height="24">
                            </div>
                            <h5 class="fw-bolder mt-4">{{ $user->name }}</h5>
                            <p class="text-muted">{{ $user->email }}</p>

                        </div>
                        <div class="profile-tab-nav border-right">

                            <div class="nav flex-column nab" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a class="nav-link active" id="Personal-tab" data-toggle="pill" href="#Personal"
                                   role="tab" aria-controls="Personal" aria-selected="true">

                                    <i class='bx bxs-user'></i>
                                    Personal Information
                                </a>
                                <a class="nav-link" id="Skills-tab" data-toggle="pill" href="#Skills" role="tab"
                                   aria-controls="Skills" aria-selected="false">

                                    <i class='bx bxs-color'></i>
                                    Skills
                                </a>
                                <a class="nav-link" id="matches-tab" data-toggle="pill" href="#matches" role="tab"
                                   aria-controls="matches" aria-selected="false">
                                    <i class='bx bx-history'></i>
                                    Match History
                                </a>



                            </div>

                        </div>

                    </div>

                </div>

                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="Personal" role="tabpanel" aria-labelledby="Personal-tab">
                        <div class="row my-5">
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Name</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"><i class='bx bx-user-circle display-6'
                                                                                   style='color:#f9800a'></i></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">{{ $user->name }}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Date of birth</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"><i class='bx bxs-calendar display-6'
                                                                                   style='color:#f9800a'></i></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">17/7/1999</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Age</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">{{ $user->age  }}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Weight</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">{{ $user->weight }}</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Height</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">{{ $user->height }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="Skills" role="tabpanel" aria-labelledby="Skills-tab">
                        <div class="row my-5">
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Speed</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">89</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Dribling</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">89</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Shoot</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">89</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Team</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">89</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="matches" role="tabpanel" aria-labelledby="matches-tab">
                        <h3 class="mb-4 fw-bolder">Your matches history</h3>
                        <div class="row my-5 ">
                            <div class="card d-block my-1 mx-4"style="width: 20rem; height: 20rem;">
                                <img src="{{ asset('img/background2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body fw-bolder px-1">
                                    <h6>Gohary Stadium</h6>
                                    <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'  ></i>6.5</h6>
                                    <p class="my-1">2 Octoper,2023 | 9:00 PM</p>
                                    <p class="my-1">25 EGP</p>
                                </div>
                            </div>
                            <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                <img src="{{ asset('img/background2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body fw-bolder px-1">
                                    <h6>Gohary Stadium</h6>
                                    <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'  ></i>6.5</h6>
                                    <p class="my-1">2 Octoper,2023 | 9:00 PM</p>
                                    <p class="my-1">25 EGP</p>
                                </div>
                            </div>
                            <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                <img src="{{ asset('img/background2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body fw-bolder px-1">
                                    <h6>Gohary Stadium</h6>
                                    <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'  ></i>6.5</h6>
                                    <p class="my-1">2 Octoper,2023 | 9:00 PM</p>
                                    <p class="my-1">25 EGP</p>
                                </div>
                            </div>
                            <div class="card d-block my-1 mx-4"style="width: 20rem; height: 20rem;">
                                <img src="{{ asset('img/background2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body fw-bolder px-1">
                                    <h6>Gohary Stadium</h6>
                                    <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'  ></i>6.5</h6>
                                    <p class="my-1">2 Octoper,2023 | 9:00 PM</p>
                                    <p class="my-1">25 EGP</p>
                                </div>
                            </div>
                            <div class="card d-block my-1 mx-4"style="width: 20rem; height: 20rem;">
                                <img src="{{ asset('img/background2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body fw-bolder px-1">
                                    <h6>Gohary Stadium</h6>
                                    <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'  ></i>6.5</h6>
                                    <p class="my-1">2 Octoper,2023 | 9:00 PM</p>
                                    <p class="my-1">25 EGP</p>
                                </div>
                            </div>
                            <div class="card d-block my-1 mx-4"style="width: 20rem; height: 20rem;">
                                <img src="{{ asset('img/background2.jpg') }}" class="card-img-top" alt="...">
                                <div class="card-body fw-bolder px-1">
                                    <h6>Gohary Stadium</h6>
                                    <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'  ></i>6.5</h6>
                                    <p class="my-1">2 Octoper,2023 | 9:00 PM</p>
                                    <p class="my-1">25 EGP</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
@endsection
