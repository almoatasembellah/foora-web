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
               <form action="{{ route('admin.stadiums.update' , $stadium) }}" method="post">
                   @csrf
                   @method('PUT')

                   <div class="px-2 py-1">
                       <label class="form-label" for="name">Name</label>
                       <input id="name" type="text" name="name" class="form-control" value="{{ old('name') ?? $stadium->name }}">
                   </div>



                   <div class="px-2 py-1">
                       <label for="city_name" class="form-label">City Name</label>
                       <select class="form-select" name="city_id" id="city_name">
                           @foreach($cities as $city)
                               <option
                                   value="{{ $city->id }}" {{ $stadium->city->id === $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                           @endforeach
                       </select>
                   </div>

                   <div class="px-2 py-1">
                       <label for="area_name" class="form-label">Area Name</label>
                       <select class="form-select" name="area_id" id="area_name">
                           @foreach($areas as $area)
                               <option
                                   value="{{ $area->id }}" {{ $stadium->area->id === $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
                           @endforeach
                       </select>
                   </div>


                   <div class="px-2 py-1">
                       <label class="form-label" for="phone">Phone</label>
                       <input id="phone" type="text" name="phone" class="form-control" value="{{ old('phone') ?? $stadium->phone }}">
                   </div>

                   <div class="px-2 py-1">
                       <label class="form-label" for="location_url">Location URL</label>
                       <input id="location_url" type="text" name="location_url" class="form-control" value="{{ old('location_url') ?? $stadium->location_url }}">
                   </div>


                   <div class="px-2 py-1">
                       <label class="form-label" for="facebook_url">Facebook URL</label>
                       <input id="facebook_url" type="text" name="facebook_url" class="form-control" value="{{ old('facebook_url') ?? $stadium->facebook_url }}">
                   </div>

                   <div class="px-2 py-1">
                       <label class="form-label" for="instagram_url">Instagram URL</label>
                       <input id="instagram_url" type="text" name="instagram_url" class="form-control" value="{{ old('instagram_url') ?? $stadium->instagram_url }}">
                   </div>

                   <div class="px-2 py-1">
                       <label class="form-label" for="space">Space</label>
                       <input id="space" type="number" name="space" class="form-control" value="{{ old('space') ?? $stadium->space }}">
                   </div>

                   <div class="px-2 py-1">
                       <label for="type" class="form-label">Type</label>
                       <select class="form-select" name="type" id="type">
                           <option value="0" {{ $stadium->type === 0 ? 'selected' : '' }}>Five</option>
                           <option value="1" {{ $stadium->type === 1 ? 'selected' : '' }}>Seven</option>
                           <option value="2" {{ $stadium->type === 2 ? 'selected' : '' }}>Eleven</option>
                       </select>
                   </div>


                   <div class="px-2 py-1">
                       <label for="gross_type" class="form-label">Gross Type</label>
                       <select class="form-select" name="gross_type" id="gross_type">
                           <option value="0" {{ $stadium->gross_type === 0 ? 'selected' : '' }}>Natural grass</option>
                           <option value="1" {{ $stadium->gross_type === 1 ? 'selected' : '' }}>Artificial grass</option>
                       </select>
                   </div>

                   <div class="px-2 py-1">
                       <label for="owner_id" class="form-label">Venue Owner</label>
                       <select class="form-select" name="owner_id" id="owner_id">
                           @foreach($venueOwners as $venueOwner)
                               <option value="{{ $venueOwner['id'] }}" {{ $stadium->owner_id === $venueOwner['id'] ? 'selected' : '' }}>{{ $venueOwner['name'] }}</option>
                           @endforeach
                       </select>
                   </div>

                   <div class="modal-footer my-4 w-100">
                       <div class="col-md-6 px-3">
                           <button type="button" class="btn btn-secondary w-100" data-bs-dismiss="modal">Close</button>
                       </div>
                       <div class="col-md-6">
                           <button type="submit" class="btn btn-primary w-100">Update</button>
                       </div>
                   </div>
               </form>
           </div>

        </section>

    </main>
@endsection
