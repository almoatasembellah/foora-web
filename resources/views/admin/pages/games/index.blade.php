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
                    <h1>Games Page</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.games.index') }}">Games</a></li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
            </div>



            <section class="section">
            <div class="row">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Players Number</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>City</th>
                        <th>Area</th>
                        <th>User</th>
                        <th>Location</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($games as $key => $game)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $game->name }}</td>
                            <td>{{ $game->phone }}</td>
                            <td>{{ $game->players_number }}</td>
                            <td>{{ $game->price }}</td>
                            <td>{{ $game->date }}</td>
                            <td>{{ $game->time }}</td>
                            <td>{{ $game->city->name }}</td>
                            <td>{{ $game->area->name }}</td>
                            <td>{{ $game->user->name }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ $game->location }}">See location</a>
                            </td>
                            <td>{{ $game->created_at->format('d/m/y h:i A') }}</td>

                            <td>
                                <a class="btn-sm btn-info btn"
                                   data-bs-toggle="modal" data-bs-target="#edit{{ $game->id }}">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a class="btn-sm btn-danger btn"
                                   data-bs-toggle="modal" data-bs-target="#delete{{ $game->id }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>


                        <div class="modal fade" id="edit{{ $game->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.games.update', $game) }}" method="post">

                                        <div class="modal-body">
                                            {{ method_field('PUT') }}
                                            @csrf
                                          <div class="form-group">
                                              <label for="area_name" class="form-label">Role Name</label>
                                              <input type="text" class="form-control" name="name" id="area_name"
                                                     value="{{ $game->name }}">
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

                        <div class="modal fade" id="delete{{ $game->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.games.destroy', $game) }}" method="post">

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
