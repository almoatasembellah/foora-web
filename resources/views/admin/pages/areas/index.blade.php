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
        <div class="pagetitle">
            <h1>Areas Page</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('admin.areas.index') }}">Areas</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($areas as $key => $area)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $area->name }}</td>
                            <td>{{ $area->city->name }}</td>
                            <td>{{ $area->created_at->format('d/m/y h:i A') }}</td>

                            <td>
                                <a class="btn-sm btn-info btn"
                                   data-bs-toggle="modal" data-bs-target="#edit{{ $area->id }}">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a class="btn-sm btn-danger btn"
                                   data-bs-toggle="modal" data-bs-target="#delete{{ $area->id }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>


                        <div class="modal fade" id="edit{{ $area->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Area</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.areas.update', $area) }}" method="post">

                                        <div class="modal-body">
                                            {{ method_field('PUT') }}
                                            @csrf
                                          <div class="form-group">
                                              <label for="area_name" class="form-label">Area Name</label>
                                              <input type="text" class="form-control" name="name" id="area_name"
                                                     value="{{ $area->name }}">
                                          </div>

                                            <div class="form-group my-2">
                                                <label for="city_name" class="form-label">City Name</label>
                                                <select class="form-select" name="city_id" id="city_name">
                                                    @foreach($cities as $city)
                                                        <option value="{{ $city->id }}" {{ $area->city->id === $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-info text-white">Edit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>

                        <div class="modal fade" id="delete{{ $area->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Area</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.areas.destroy', $area) }}" method="post">

                                        <div class="modal-body">
                                            {{ method_field('Delete') }}
                                            @csrf
                                            <p class="my-1 text-danger">Are You sure you want to delete this City ?</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
