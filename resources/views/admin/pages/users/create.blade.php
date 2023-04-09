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
                <form action="{{ route('admin.users.store') }}" method="post">
                    @csrf

                    <div class="px-2 py-1">
                        <label class="form-label" for="name">Name</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>


                    <div class="px-2 py-1">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email"
                               class="form-control" name="email"
                               value="{{ old('email') }}" required autocomplete="email">
                    </div>

                    <div class="px-2 py-1">
                        <label for="age" class="form-label">Age</label>
                        <input id="age" type="number"
                               class="form-control" name="age"
                               value="{{ old('age') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="height" class="form-label">Height</label>
                        <input id="height" type="number"
                               class="form-control" name="height"
                               value="{{ old('height') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="weight" class="form-label">Weight</label>
                        <input id="weight" type="number"
                               class="form-control" name="weight"
                               value="{{ old('weight') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="phone" class="form-label">Phone</label>
                        <input id="phone" type="number"
                               class="form-control" name="phone"
                               value="{{ old('phone') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="role_id" class="form-label">Role</label>
                        <select class="form-select" name="role_id" id="role_id">
                           @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="px-2 py-1">
                        <label for="city_id" class="form-label">City</label>
                        <select class="form-select" name="city_id" id="city_id">
                            @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="px-2 py-1">
                        <label for="area_id" class="form-label">Area</label>
                        <select class="form-select" name="area_id" id="area_id">
                            @foreach($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="px-2 py-1">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                               class="form-control" name="password"
                               required autocomplete="new-password">
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
