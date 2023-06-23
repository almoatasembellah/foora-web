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
            <div class="col-md-4 d-flex justify-content-end">
                <a class="btn btn-primary text-center" href="{{ route('admin.stadiums.create') }}">Add New
                    Stadium</a>
            </div>
        </div>


        <section class="section">
            <div class="row">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Owner</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>Phone</th>
                        <th>Location</th>
                        <td>Space</td>
                        <td>Type</td>
                        <td>Gross Type</td>
                        <td>Social Media</td>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($stadiums as $key => $stadium)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                <img style="width: 50px; height: 50px;" src="{{ $stadium->image === 'stadium.png' ? asset('img/stadium.png') : asset("$stadium->image") }}" alt="{{ $stadium['name'] }}">
                            </td>
                            <td>{{ $stadium->owner->name }}</td>
                            <td>{{ $stadium->name }}</td>
                            <td>{{ $stadium->city->name }}</td>
                            <td>{{ $stadium->area->name }}</td>
                            <td>{{ $stadium->phone ?? '---' }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ $stadium->location_url }}" target="_blank">See location</a>
                            </td>

                            <td>{{ $stadium->space }}</td>
                            <td>{{ getStadiumType($stadium->type) }}</td>
                            <td>{{ getStadiumGrossType($stadium->gross_type) }}</td>
                            <td>
                                <a class="btn-primary btn" href="{{ $stadium->facebook_url }}" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a class="btn-danger btn" href="{{ $stadium->instagram_url }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </td>

                            <td>{{ $stadium->created_at->format('d/m/y h:i A') }}</td>

                            <td>
                                <a class="btn-info btn" href="{{ route('admin.stadiums.edit' , $stadium) }}">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a class="btn-danger btn"
                                   data-bs-toggle="modal" data-bs-target="#delete{{ $stadium->id }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="delete{{ $stadium->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Stadium</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.stadiums.destroy', $stadium) }}" method="post">

                                        <div class="modal-body">
                                            {{ method_field('Delete') }}
                                            @csrf
                                            <p class="my-1 text-danger">Are You sure you want to delete this Stadium
                                                ?</p>
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
