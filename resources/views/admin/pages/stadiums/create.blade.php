@extends('admin.layouts.app')

@section('content')
    <main id="main" class="main">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif


        @if ($errors->any())

            <div class="alert alert-danger">
                <ul class="py-2 list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif
        <div class="row">
            <div class="pagetitle  col-md-8">
                <h1>Stadiums Page</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.stadiums.index') }}">Stadiums</a>
                        </li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        </div>


        <section class="section">

           <div class="container">
               <form action="{{ route('admin.stadiums.store') }}" method="post">
                   @csrf

                   <div class="px-2 py-1">
                       <label class="form-label" for="name">Name</label>
                       <input id="name" type="text" name="name" class="form-control">
                   </div>



                   <div class="px-2 py-1">
                       <label for="city_name" class="form-label">City Name</label>
                       <select class="form-select" name="city_id" id="city_name">
                           @foreach($cities as $city)
                               <option
                                   value="{{ $city->id }}">{{ $city->name }}</option>
                           @endforeach
                       </select>
                   </div>

                   <div class="px-2 py-1">
                       <label for="area_name" class="form-label">Area Name</label>
                       <select class="form-select" name="area_id" id="area_name">
                           @foreach($areas as $area)
                               <option
                                   value="{{ $area->id }}">{{ $area->name }}</option>
                           @endforeach
                       </select>
                   </div>

                   <div class="px-2 py-1">
                       <label class="form-label" for="location_url">Location URL</label>
                       <input id="location_url" type="text" name="location_url" class="form-control">
                   </div>


                   <div class="px-2 py-1">
                       <label class="form-label" for="facebook_url">Facebook URL</label>
                       <input id="facebook_url" type="text" name="facebook_url" class="form-control">
                   </div>

                   <div class="px-2 py-1">
                       <label class="form-label" for="instagram_url">Instagram URL</label>
                       <input id="instagram_url" type="text" name="instagram_url" class="form-control">
                   </div>

                   <div class="px-2 py-1">
                       <label class="form-label" for="space">Space</label>
                       <input id="space" type="number" name="space" class="form-control">
                   </div>

                   <div class="px-2 py-1">
                       <label for="type" class="form-label">Type</label>
                       <select class="form-select" name="type" id="type">
                           <option value="0">Five</option>
                           <option value="1">Seven</option>
                           <option value="2">Eleven</option>
                       </select>
                   </div>


                   <div class="px-2 py-1">
                       <label for="gross_type" class="form-label">Gross Type</label>
                       <select class="form-select" name="gross_type" id="gross_type">
                           <option value="0">Natural grass</option>
                           <option value="1">Artificial grass</option>
                       </select>
                   </div>

                   <div class="modal-footer my-4 w-100">
                       <div class="col-md-6 px-3">
                           <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Close</button>
                       </div>
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-success w-100">Add</button>
                       </div>
                   </div>
               </form>
           </div>

        </section>

    </main>
@endsection
