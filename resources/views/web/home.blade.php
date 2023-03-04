@extends('web.layouts.app')
@include('web.layouts.navbar')
@section('page-styles')
<style>

    body {
        display: block;
        overflow-x: hidden;

    }

    .first {
        width: 100%;
        min-height: 100vh;
        position: relative;
        background: #0a1429 url({{url('img/background.jpg')}}) no-repeat center right;
        background-size: cover;
        display: grid;
        align-items: center;
        grid-template-columns: repeat(2 , 1fr);
    }
    /* --------------------------------lets Form -------------------------------*/

    .lets-form{

        background: #ffffff;
        margin-top: -4rem;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        position: absolute;
        left: 400px;
        padding: 20px;
    }
    .container form .main-btn {
        padding: 10px 30px;
        border: none;
        border-radius: 0.5rem;
        background: #ff9800;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
    }
    .container form .main-btn:hover {
        background: #2B3940;
    }
    .text h1{
        padding-left: 50px;
        font-size: 2rem;
        letter-spacing: 1.5px;
        color: #FFF;
    }
    .text span{
        color: #ff9800;
    }
    .text p{
        margin: 00.5rem 0 1rem;
        padding-left: 50px;

        color: #d4dbe2;
    }



    /*-------------------------------- Games --------------------*/

    h2 {
        color: #000000;
        font-size: 26px;
        font-weight: 300;
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin: 30px 0 60px;
    }
    h2::after {
        content: "";
        width: 100px;
        position: absolute;
        margin: 0 auto;
        height: 4px;
        border-radius: 1px;
        background: #ff9800;
        left: 0;
        right: 0;
        bottom: -20px;
    }
    .carousel {
        margin: 50px auto;
        padding: 0 70px;
    }
    .carousel .item {
        color: #747d89;
        min-height: 325px;
        text-align: center;
        overflow: hidden;
    }
    .carousel .thumb-wrapper {
        padding: 25px 15px;
        background: #fff;
        border-radius: 6px;
        text-align: center;
        position: relative;
        box-shadow: 0 2px 3px rgba(0,0,0,0.2);
    }
    .carousel .item .img-box {
        height: 120px;
        margin-bottom: 20px;
        width: 100%;
        position: relative;
    }
    .carousel .item img {
        max-width: 100%;
        max-height: 100%;
        display: inline-block;
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        left: 0;
        right: 0;
    }
    .carousel .item h4 {
        font-size: 18px;
    }
    .carousel .item h4, .carousel .item p, .carousel .item ul {
        margin-bottom: 5px;
    }
    .carousel .thumb-content .btn {
        color: #ff9800;
        font-size: 11px;
        text-transform: uppercase;
        font-weight: bold;
        background: none;
        border: 1px solid #ff9800;
        padding: 6px 14px;
        margin-top: 5px;
        line-height: 16px;
        border-radius: 20px;
    }
    .carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
        color: #fff;
        background: #ff9800;
        box-shadow: none;
    }
    .carousel .thumb-content .btn i {
        font-size: 14px;
        font-weight: bold;
        margin-left: 5px;
    }
    .carousel .carousel-control {
        height: 44px;
        width: 40px;
        background: #ff9800;
        margin: auto 0;
        border-radius: 4px;
        opacity: 0.8;
    }
    .carousel .carousel-control:hover {
        background: #78bf00;
        opacity: 1;
    }
    .carousel .carousel-control i {
        font-size: 36px;
        position: absolute;
        top: 50%;
        display: inline-block;
        margin: -19px 0 0 0;
        z-index: 5;
        left: 0;
        right: 0;
        color: #fff;
        text-shadow: none;
        font-weight: bold;
    }
    .carousel .item-price {
        font-size: 13px;
        padding: 2px 0;
    }
    .carousel .item-price strike {
        opacity: 0.7;
        margin-right: 5px;
    }
    .carousel .carousel-control.left i {
        margin-left: -2px;
    }
    .carousel .carousel-control.right i {
        margin-right: -4px;
    }
    .carousel .carousel-indicators {
        bottom: -50px;
    }
    .carousel-indicators li, .carousel-indicators li.active {
        width: 10px;
        height: 10px;
        margin: 4px;
        border-radius: 50%;
        border: none;
    }
    .carousel-indicators li {
        background: rgba(0, 0, 0, 0.2);
    }
    .carousel-indicators li.active {
        background: rgba(0, 0, 0, 0.6);
    }


    .text-small {
        font-size: 0.9rem;
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

    .form-control:focus {
        background: #212529;
    }

    footer {
        background: #0a1429;
    }
</style>
@endsection
@section('content')

    <section class="first">
        <!-- first Start -->
        <div class="container-fluid p-0">
            <div class="owl-first header-first position-relative">
                <div class="owl-first-item position-relative">
                    <div class="text ms-5 ">
                        <h1><i class='bx bx-football bx-fade-left bx-rotate-90' style='color:#ff9800' ></i>Book a sports <span class="f-span">Playgrounds</span> <br> with your friends</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adip<br>isicing elit. Consectetur, cum ipsam.</p>
                    </div>

                    <div class="container lets-form ms-3 my-2 p-3">
                        <form class="row ms-4">
                            <div class="col-lg mb-3 mb-lg-0">
                                <label class="text" style="font-weight: 500;">Select Your City</label>
                                <select class="form-select" id="city">
                                    <option value="" disabled selected hidden>Select Your City</option>
                                    <option value="1">Cairo</option>
                                    <option value="2">Giza</option>
                                    <option value="3">Alexandria</option>
                                </select>

                            </div>
                            <div class="col-lg mb-3 mb-lg-0">
                                <label class="text" style="font-weight: 500;">Area</label>
                                <select class="form-select" id="area">
                                    <option value="" selected disabled hidden>Select Your Area</option>
                                    <option value="1">Haram</option>
                                    <option value="2">Ain Shams</option>
                                    <option value="3">Nasr City</option>
                                </select>

                            </div>
                            <div class="col-lg mb-1 mb-lg-0 my-1">
                                <button type="submit" class="search-button px-0 mx-0"><i class='bx bx-search-alt ms-auto py-0' ></i></button>
                                <button type="submit" class="main-btn rounded-1 mx-1 mb-2" data-bs-toggle="modal" data-bs-target="#lets"
                                        data-bs-whatever="">Let's Find A Game</button>
                            </div>
                            <div class="modal fade" id="lets" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5 fw-bolder" id="exampleModalLabel">Make A Game</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">

                                                        <div class="row justify-content-center">
                                                            <div class="col-md-6">
                                                                <div class="form-group text-center">
                                                                    <label class="h4 fw-bolder">Football Yard</label>
                                                                    <p class="text-muted">Please fill it by yard Name</p>
                                                                    <input type="text" class="form-control" placeholder="Enter stadium name...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row  mb-4">
                                                            <div class="col-md-6">
                                                                <div class="col-md-3-inline">
                                                                    <label class="text fw-bolder h4" style="font-weight: 500;">Select Your City</label>
                                                                    <p class="text-muted">Please select your city</p>
                                                                    <label for="city"></label><select class="form-select" id="city">
                                                                        <option value="" disabled selected hidden>Select Your City</option>
                                                                        <option value="1">Cairo</option>
                                                                        <option value="2">Giza</option>
                                                                        <option value="3">Alexandria</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">

                                                                <div class="col-md-3-inline">
                                                                    <label class="text fw-bolder h4" style="font-weight: 500;">Select Your Area</label>
                                                                    <p class="text-muted">Please select your area</p>
                                                                    <label for="area"></label><select class="form-select" id="area">
                                                                        <option value="" selected disabled hidden>Select Your Area</option>
                                                                        <option value="1">Haram</option>
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
                                                                    <label>
                                                                        <input type="" class="form-control"  placeholder="Enter phone number...">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="h4 fw-bolder">Location</label>
                                                                    <p class="text-muted">Please put the playground location</p>
                                                                    <input type="email" class="form-control" placeholder="Location...">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="h4 fw-bolder">Number of players</label>
                                                                    <p class="text-muted">Put the number you need to fill your game</p>
                                                                    <input type="number" class="form-control" placeholder="Number of players">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="h4 fw-bolder">Price of the game</label>
                                                                    <p class="text-muted">Please put the fees or the game price</p>
                                                                    <input type="number" class="form-control" placeholder="EGP">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="h4 fw-bolder">Date</label>
                                                                    <p class="text-muted">Please put the game date</p>
                                                                    <input type="date" class="form-control" >
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
                                            <button type="button" class="btn btn-warning fw-bolder">Request</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
            <!-- first End -->
    </section>
    <section class="games">

        <div class="container">
            <div class="row">
                <div class="col-md-14">
                    <div class="heading">
                        <h2 class="my-4">Recommended <b>Venues</b></h2>
                        <span>Explore Out Top Deals<i class='bx bx-play bx-rotate-90' style='color:#0a1429' ></i></span>
                        <a href="" class="see">See All</a>
                    </div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

                        <!--carousel items -->
                        <div class="carousel-inner my-3 mx-3">
                            <div class="item active">
                                <div class="row">

                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">

                                            <div class="img-box">
                                                <img src="imags/kora2.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">

                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p><span>2 Octoper,2023</span> <span>|</span> <span>Cairo</span></p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> <span>2</span> <span>/</span> <span>5</span> <span>Players</span></h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="staduims">
        <section class="stadiums">

            <div class="container">
                <div class="row">
                    <div class="col-md-14">
                        <div class="heading">
                            <h2 class="my-4">Recommended <b>Staduims</b></h2>
                            <span>Explore Out Top Staduims<i class='bx bx-play bx-rotate-90' style='color:#0a1429' ></i></span>
                            <a href="" class="see">See All</a>
                        </div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

                            <!--carousel items -->
                            <div class="carousel-inner my-3 mx-3">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-3 my-3">
                                            <div class="thumb-wrapper">

                                                <div class="img-box">
                                                    <img src="imags/stadium.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">

                                                    <h4>Almasa Stadium</h4>
                                                    <h4>Nasr City | Cairo</h4>
                                                    <p><i class='bx bxs-dollar-circle' style='color:#32aa37' ></i> <span>300</span> <span>EGP</span></p>
                                                    <a href="#" class="btn">Book Now</a>
                                                </div>
                                            </div>
                                        </div>

                                            </div>
                                        </div>


                                            </div>
                                        </div>
                                            </div>
                                        </div>

                                    </div>
        </section>
    </section>

    <section class="Stars">

        <div class="container">
            <div class="row">
                <div class="col-md-14">
                    <h2 class="my-2">Our <b>Stars</b></h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="imags/profile.jpeg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="thumb-content">

                                                <h4>Mutasim Yasser</h4>
                                                <div class="stars">
                                                    <i class='bx bxs-star' style='color:#ff9800'  ></i>
                                                    <i class='bx bxs-star' style='color:#ff9800'  ></i>
                                                    <i class='bx bxs-star' style='color:#ff9800'  ></i>
                                                    <i class='bx bxs-star' style='color:#ff9800'  ></i>
                                                    <i class='bx bxs-star-half' style='color:#ff9800' ></i>
                                                </div>
                                                <p><i class='bx bxs-star-half' style='color:#ff9800' ></i>9.0</p>

                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <!-- About Start -->
        <div class="container-xxl py-5">
            <h1 class="text-center mb-4 fw-bolder">About Us</h1>
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col text-center">
                                <img class="img-fluid rounded-2" src="imags/about.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn">
                        <h1 class="mb-4">We Help To Get The Football Playgrounds And Find A Talent</h1>
                        <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus illum neque incidunt et inventore.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Lorem ipsum dolor sit amet consectetur.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>
@include('web.layouts.footer')
@endsection
