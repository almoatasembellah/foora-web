@extends('web.layouts.app')
@include('web.layouts.navbar')
@section('page-styles')
    <style>

        .profile-tab-nav {
            min-width: 250px;
        }

        .nab a.nav-link {


            color: #000000;

        }

    </style>
@endsection
@section('content')
    <section class="py-5 my-5 mb-5">
        <div class="container">

            <div class="back-color rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right me-4">
                    <div class="p-5 ms-0">
                        <div>
                            <div class="d-flex justify-content-start ms-2">
                                <img src="imags/profile.jpeg" id="photo" class="rounded-circle" alt=""
                                     style="width: 80px; height: 80px;"/>
                            </div>
                            <h5 class="fw-bolder mt-3">Mutasim Yasser</h5>

                        </div>
                        <div class="profile-tab">

                            <div class="nav flex-column nab" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a class="nav-link active" id="Personal-tab" data-toggle="pill" href="#Personal"
                                   role="tab" aria-controls="Personal" aria-selected="true">
                                    <i class='bx bxs-user-detail'></i>
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

                        <div class="row my-2">

                            <h3 class="mb-4 fw-bolder">Player Info</h3>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                                <a href="{{ route('edit-profile') }}" class="btn btn-dark me-md-2" type="button">Edit
                                    profile</a>

                            </div>
                            <p class="text-muted">You can see the player's Skills here</p>
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

                                        <p class="card-text text-muted">{{Auth::user()->name}}</p>
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
                                                <p class="card-text text-muted"><i class='bx bx-detail display-6 '
                                                                                   style='color:#f9800a'></i></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">{{Auth::user()->age}}</p>
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
                                                <p class="card-text text-muted"><i class='bx bx-body display-6'
                                                                                   style='color:#f9800a'></i></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">{{Auth::user()->weight}}</p>
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
                                                <p class="card-text text-muted"><i class='bx bx-body display-6'
                                                                                   style='color:#f9800a'></i></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">{{Auth::user()->height}}</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="Skills" role="tabpanel" aria-labelledby="Skills-tab">
                        <div class="row my-5">
                            <h3 class="mb-4 fw-bolder">Mutasim Skills</h3>
                            <p class="text-muted">You can see the player's Skills here</p>
                            <div class="col-sm-5 mb-3 mb-sm-0 my-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row ">
                                            <div class="col-sm-6 col-md-9">
                                                <h5 class="card-title">Speed</h5>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <p class="card-text text-muted"><i class='bx bx-run display-6'
                                                                                   style='color:#ff9800'></i></p>
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
                                                <p class="card-text text-muted"><i
                                                        class='bx bx-football bx-fade-up display-6'
                                                        style='color:#ff9800'></i></p>
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
                                                <p class="card-text text-muted"><i
                                                        class='bx bx-football bx-fade-right display-6'
                                                        style='color:#ff9800'></i></p>
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
                                                <p class="card-text text-muted"><i class='bx bxs-group display-6'
                                                                                   style='color:#ff9800'></i></p>
                                            </div>
                                        </div>

                                        <p class="card-text text-muted">89</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="matches" role="tabpanel" aria-labelledby="matches-tab">
                        <h3 class="mb-4 fw-bolder">Match history</h3>

                        <div class="row my-4">
                            <div class="row">
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 " alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4" style="width: 20rem; height: 20rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2" alt="...">
                                    <div class="card-body fw-bolder px-1 my-2">
                                        <h6>Gohary Stadium</h6>
                                        <h6 class="my-1"><i class='bx bxs-star' style='color:#ff9800'></i>6.5</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429'></i> <span>2 Octoper,2023</span>
                                            <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'></i>25 EGP
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
@endsection
