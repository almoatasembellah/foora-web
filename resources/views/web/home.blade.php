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
        <div class="container-fluid p-0">
            <div class="owl-first header-first position-relative">

                <div class="owl-first-item position-relative">

                    <div class="text ms-5">
                        <h1><i class='bx bx-football bx-fade-left bx-rotate-90' style='color:#ff9800' >
                            </i>Book a sports <span>Playgrounds</span> <br> with your friends</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adip<br>isicing elit. Consectetur, cum ipsam.</p>
                    </div>

                    <div class ="container lets-form ms-5 my-5 p-3">
                        <form class ="row">
                            <div class ="col-lg mb-3 mb-lg-0">
                                <label class ="text" style="font-weight: 500;">Select Your City</label>
                                <label for="city"></label><select class ="form-select" id="city">
                                    <option value="" disabled selected hidden>Select Your City</option>
                                    <option value="1">Cairo</option>
                                    <option value="2">Giza</option>
                                    <option value="3">Alexandria</option>
                                </select>

                            </div>
                            <div class ="col-lg mb-3 mb-lg-0">
                                <label class="text" style="font-weight: 500;">Area</label>
                                <label for="area"></label><select class="form-select" id="area">
                                    <option value="" selected disabled hidden>Select Your Area</option>
                                    <option value="1"> Haram </option>
                                    <option value="2"> Ain Shams </option>
                                    <option value="3"> Nasr City </option>
                                </select>

                            </div>
                            <div class="col-lg mb-3 mb-lg-0 my-3">
                                <button type="submit" class="main-btn rounded-2  ">Lets Make A Game</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="games">

        <div class="container">
            <div class="row">
                <div class="col-md-14">
                    <h2 class="my-2">Recommended <b>Venues</b></h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">

                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">

                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <div class="box-img">
                                                </div>
                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <div class="box-img">
                                                </div>
                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <div class="box-img">
                                                </div>
                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <div class="box-img">
                                                </div>
                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <div class="box-img">
                                                </div>
                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}"class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <div class="box-img">
                                                </div>
                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
                                                <p><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> 25 EGP</p>
                                                <a href="#" class="btn">Join Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <span class="wish-icon"></span>
                                            <div class="img-box">
                                                <img src="{{ asset('img/kora2.jpg') }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <div class="box-img">
                                                </div>
                                                <h4>Gohary Stadium</h4>
                                                <h4>Ain Shams</h4>
                                                <p>2 Octoper,2023 | Cairo</p>
                                                <h4><i class='bx bxs-watch' style='color:#0a1429' ></i> 9:00 PM</h4>
                                                <h4><i class='bx bxs-user' style='color:#0a1429' ></i> 2/5 Players</h4>
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
                                                <img src="{{ asset('img/profile-img.jpg') }}" class="rounded-circle" alt="">
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
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="{{ asset('img/profile-img.jpg') }}" class="rounded-circle" alt="">
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
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="{{ asset('img/profile-img.jpg') }}" class="rounded-circle" alt="">
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
                                    <div class="col-sm-3 my-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="{{ asset('img/profile-img.jpg') }}" class="rounded-circle" alt="">
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

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <h1 class="text-center mb-4 fw-bolder">About Us</h1>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn">
                    <div class="row g-0 about-bg rounded overflow-hidden">
                        <div class="col text-center">
                            <img class="img-fluid" src="{{ asset('img/about2.jpg') }}">
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
@include('web.layouts.footer')
@endsection
