@extends('web.layouts.app')
@include('web.layouts.navbar')
@section('page-styles')

@endsection
@section('content')

    <div class="container">
        <div class="title">
           <h1>Featured Stadiums</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4 d-flex justify-content-center">
            <div class="col">
                <label class="text" style="font-weight: 500;">Select Your City</label>
                <select class="form-select" id="city">
                    <option value="" disabled selected hidden>Select Your City</option>
                    <option value="1">Cairo</option>
                    <option value="2">Giza</option>
                    <option value="3">Alexandria</option>
                </select>
            </div>
            <div class="col">
                <label class="text" style="font-weight: 500;">Select Your Area</label>
                <select class="form-select" id="area">
                    <option value="" selected disabled hidden>Select Your Area</option>
                    <option value="1">Haram</option>
                    <option value="2">Ain Shams</option>
                    <option value="3">Nasr City</option>
                </select>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
            <!-- Card 1 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
            <!-- Card 1 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
            <!-- Card 1 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
            <!-- Card 1 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col text-center">
                <div class="card staduim-img p-4 rounded-2">
                    <div class="overflow-hidden rounded-2">
                        <img src="imags/stadium.png" class=" card-img-top" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="fw-bolder">Almasa Staduim</h4>
                        <h5 class="fw-bolder">Nasr City | Cairo</h5>
                        <p class="m-0 fw-bolder"><i class='bx bxs-dollar-circle' style='color:#32aa37'  ></i> <span>300</span> EGP</p>
                        <button class="btn btn-outline-warning fw-bolder mt-3">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="bg-transparent" aria-label="Page navigation" >
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>


@endsection
