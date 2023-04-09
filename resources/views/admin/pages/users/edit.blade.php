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
                <h1>Users Page</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        </div>


        <section class="section">

            <div class="container">
                <form action="{{ route('admin.users.update' , $user) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="px-2 py-1">
                        <label class="form-label" for="name">Name</label>
                        <input id="name" type="text" name="name" class="form-control" value="{{ old('name') ?? $user->name }}">
                    </div>


                    <div class="px-2 py-1">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email"
                               class="form-control" name="email"
                               required autocomplete="email" value="{{ old('email') ?? $user->email }}">
                    </div>

                    <div class="px-2 py-1">
                        <label for="age" class="form-label">Age</label>
                        <input id="age" type="number"
                               class="form-control" name="age"
                               value="{{ old('age') ?? $user->age }}">
                    </div>

                    <div class="px-2 py-1">
                        <label for="height" class="form-label">Height</label>
                        <input id="height" type="number"
                               class="form-control" name="height"
                               value="{{ old('height') ?? $user->height }}">
                    </div>

                    <div class="px-2 py-1">
                        <label for="weight" class="form-label">Weight</label>
                        <input id="weight" type="number"
                               class="form-control" name="weight"
                               value="{{ old('weight') ?? $user->weight }}">
                    </div>

                    <div class="px-2 py-1">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="number"
                               class="form-control" name="phone"
                               value="{{ old('phone') ?? $user->phone }}">
                    </div>

                    <div class="px-2 py-1">
                        <label for="role_id" class="form-label">Role</label>
                        <select class="form-select" name="role_id" id="role_id">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}" {{ $user->role_id === $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="px-2 py-1">
                        <label for="city_id" class="form-label">City</label>
                        <select class="form-select" name="city_id" id="city_id">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}" {{ $user->city_id === $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="px-2 py-1">
                        <label for="area_id" class="form-label">Area</label>
                        <select class="form-select" name="area_id" id="area_id">
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}" {{ $user->area_id === $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="px-2 py-1">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                               class="form-control" name="password"
                              autocomplete="new-password">
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
