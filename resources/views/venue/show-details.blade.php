@extends('web.layouts.app')
@include('web.layouts.navbar')
@section('web.layouts.styles')
<style>

    .info-container {
        padding: 60px;
        margin: 15px 0;
        display: grid;
    }
    .info-container .images {
        grid-gap: 5px;
    }
    .info-container .images .img-holder img {
        width: 100%;
        display: block;
        border-radius: 10px;
    }
    .info-container .basic-info {

        grid-area: info;
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .info-container .basic-info {
        color: #ff9800;
    }


    .info-container .basic-info p {
        font-weight: 600;
    }
    .info-container .basic-info .game-info-span {
        font-size: 16px;
        font-weight: 700;
    }

    .info-container .basic-info span {
        font-weight: 600;
        font-size: 16px;
    }

    .info-container .basic-info {
        grid-area: basic-info;
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .info-container .basic-info h1 {
        font-size: 18px;
    }

    .info-container .basic-info p {
        color: #ff9800;
        font-size: 14px;
        line-height: 1.5;
    }

    .info-container .basic-info .contacts {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 5px;
        color: #808080;
    }

    .info-container .basic-info .contacts i {
        margin-right: 5px;
    }




</style>
@endsection
@section('content')
    <section class="py-5 my-5 ">
        <div class="info-container">

            <!-- Row 1 - Image -->
            <div class="row mb-2 d-flex justify-content-center" >
                <div class="row-cols-md-3 d-flex justify-content-center">
                    <div class="images">
                        <div class="img-holder">
                            <img src="{{asset("img/kora2.jpg")}}" id="img-fluid" class="images-responded" alt=""
                                 style="width: 600px; height: 400px;" />

                        </div>

            </div>

                <div class="col-md-2 d-flex justify-content-center">
                    <div class="basic-info  ">
                        <h5 class="fw-bolder my-4">Gohary Stadium</h5>
                        <h6>Cairo | AinShams</h6>
                        <p><i class='bx bxs-user' style='color:#0a1429' ></i> <span>3</span> <span>/</span> <span>5</span> <span>Players</span></p>
                        <span class="game-info-span"><i class='bx bxs-watch' style='color:#0a1429' ></i>9:00 PM</span>
                        <p><a href="https://goo.gl/maps/SFVgLDmrnCKfWkt76"><i class='bx bx-map' undefined ></i>Open on maps</a></p>
                        <div class="contacts">
                            <h5>Contacts :</h5>
                            <li><i class='bx bxs-phone'></i>+20 1145484064</li>
                            <li><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i>50 EGP</li>
                            <li><i class='bx bxs-calendar'></i>22-2-2023</li>
                            <li><i class='bx bx-id-card'></i>Rezk</li>
                        </div>

                        <button type="button" class="btn btn-warning text-white btn-lg d-grid gap-3 col-12 ms-1 my-3">Join the lineup</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    @include('web.layouts.footer')
@endsection

