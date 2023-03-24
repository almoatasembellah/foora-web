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
    <section class="py-1 my-3 mb-3">
        <div class="container ">

            <div class="back-color rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav ">

                    <div class=" nav flex-column nab my-2 mx-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
                           aria-controls="account" aria-selected="true">
                            <i class="fa fa-home text-center mr-1"></i>
                            Edit Profile
                        </a>
                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                           aria-controls="password" aria-selected="false">
                            <i class="fa fa-key text-center mr-1"></i>
                            Change Password
                        </a>
                        <a class="nav-link" id="matches-tab" data-toggle="pill" href="#matches" role="tab"
                           aria-controls="matches" aria-selected="false">
                            <i class='bx bx-history'></i>
                            Your Matches
                        </a>
                        <a class="nav-link" id="joined-matches-tab" data-toggle="pill" href="#joined-matches" role="tab"
                           aria-controls="joined-matches" aria-selected="false">
                            <i class='bx bx-history'></i>
                            Joined Matches
                        </a>
                        <a class="nav-link" id="contact-tab" data-toggle="pill" href="#contact" role="tab"
                           aria-controls="contact" aria-selected="false">
                            <i class="fa fa-user text-center mr-1"></i>
                            Contact Us
                        </a>

                        <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab"
                           aria-controls="notification" aria-selected="false">
                            <i class="fa fa-bell text-center mr-1"></i>
                            Notification
                        </a>
                    </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <h3 class="mb-4 fw-bolder">Account Settings</h3>
                        <div class="p-4 mx-3">
                            <div>
                                <div class="profile-pic-div d-flex justify-content-start">
                                    <img src="img/profile.jpeg"
                                         id="photo" class="rounded-circle" alt="" style="width: 100px; height: 100px;" />
                                    <div class="justify-content-start my-5 mx-4">
                                        <div class="btn btn-primary btn-rounded btn-sm">
                                            <label class="form-label text-white m-1" for="file" id="uploadBtn">Choose photo</label>
                                            <input type="file" class="form-control d-none" id="file" />
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="Mutasim Yasser" placeholder="type the new name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" value="mutasim0@gmail.com" placeholder="type the new email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control" value="+20 1145484064" placeholder="type the new phone number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Weight</label>
                                    <input type="number" class="form-control" value="65" placeholder="type the new weight">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Height</label>
                                    <input type="number" class="form-control" value="165" placeholder="type the new height">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="number" class="form-control" value="21" placeholder="type the new age">
                                </div>
                            </div>

                        </div>
                        <div>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <h3 class="mb-4 fw-bolder">Password Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Old password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="matches" role="tabpanel" aria-labelledby="matches-tab">
                        <h3 class="mb-4 fw-bolder">Your matches history</h3>
                        <p class="text-muted">Manage and edit your games requests.</p>
                        <div class="row">
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#edit-request"
                                               data-bs-whatever="">Edit Request</a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal fade" id="cancel-request" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Cancel Request</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to cancel your request ?</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-primary">Yes Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="edit-request" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">Edit Your Game Request</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                                    <!-- <h3 class="mb-4 fw-bolder">Request</h3> -->
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-6">
                                                            <div class="form-group text-center">
                                                                <label class="h4 fw-bolder">Football Yard</label>
                                                                <p class="text-muted">Please fill it by yard Name</p>
                                                                <input type="text" class="form-control" value="Gohary Staduim">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row  mb-4">
                                                        <div class="col-md-6">
                                                            <div class="col-md-3-inline">
                                                                <label class="text fw-bolder h4" style="font-weight: 500;">Select Your City</label>
                                                                <p class="text-muted">Please select your city</p>
                                                                <select class="form-select" id="city">

                                                                    <option value="1" class="active">Cairo</option>
                                                                    <option value="2">Giza</option>
                                                                    <option value="3">Alexandria</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="col-md-3-inline">
                                                                <label class="text fw-bolder h4" style="font-weight: 500;">Select Your Area</label>
                                                                <p class="text-muted">Please select your area</p>
                                                                <select class="form-select" id="area">
                                                                    <option value="1" class="active">Haram</option>
                                                                    <option value="2">Ain Shams</option>
                                                                    <option value="3">Nasr City</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="h4 fw-bolder">Phone number</label>
                                                                <p class="text-muted">Please fill it by your phone Number</p>
                                                                <input type="" class="form-control" value="+20 114548464">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="h4 fw-bolder">Location</label>
                                                                <p class="text-muted">Please put the playground location</p>
                                                                <input type="email" class="form-control" value="https://goo.gl/maps/6xr1BXzRu2aaJEVe8">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="h4 fw-bolder">Number of players</label>
                                                                <p class="text-muted">Put the number you need to fill your game</p>
                                                                <input type="number" class="form-control" value="4">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="h4 fw-bolder">Price of the game</label>
                                                                <p class="text-muted">Please put the fees or the game price</p>
                                                                <input type="number" class="form-control" value="25">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="h4 fw-bolder">Date</label>
                                                                <p class="text-muted">Please put the game date</p>
                                                                <input type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="h4 fw-bolder">Time</label>
                                                                <p class="text-muted">Please put the game time</p>
                                                                <input type="time" class="form-control" placeholder="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary fw-bolder" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-warning fw-bolder">Save Changes</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="joined-matches" role="tabpanel" aria-labelledby="joined-matches-tab">
                        <h3 class="mb-4 fw-bolder">Your joined matches history</h3>
                        <p class="text-muted">Manage and cancel your joined games.</p>
                        <div class="row">
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2  alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card d-block my-1 mx-4"style="width: 22rem; height: 24rem;">
                                    <img src={{asset("img/background.jpg")}} class="card-img-top my-2 alt="...">
                                    <div class="card-body fw-bolder px-1">
                                        <h6>Gohary Stadium</h6>
                                        <p class="my-1"><i class='bx bxs-watch' style='color:#0a1429' ></i> <span>2 Octoper,2023</span> <span>|</span> <span>9:00 PM</span></p>
                                        <p class="my-1"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></p>

                                        <div class="my-3">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#cancel-joined-request"
                                               data-bs-whatever="" class="btn btn-danger mx-2">Cancel Request</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="modal fade" id="cancel-joined-request" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Cancel Request</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to cancel your request ?</p>
                                        <p>You have 3 hours left</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-primary">Yes Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h3 class="mb-4 fw-bolder">Contact Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" placeholder="type your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="type your email address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Your Comment</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Contact us</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                        <h3 class="mb-4 fw-bolder">Notification Settings</h3>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notification1">
                                <label class="form-check-label" for="notification1">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, dolore!
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notification2" >
                                <label class="form-check-label" for="notification2">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat, repellendus?
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notification3" >
                                <label class="form-check-label" for="notification3">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, dicta.
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Update</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
