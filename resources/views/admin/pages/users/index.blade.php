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
                <h1>User Page</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="col-md-4 d-flex justify-content-end">
                <a class="btn btn-primary text-center" href="{{ route('admin.users.create') }}">Add New
                    User</a>
            </div>
        </div>


        <section class="section">
            <div class="row">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Height</th>
                        <td>Weight</td>
                        <td>Phone</td>
                        <td>Role</td>
                        <td>City</td>
                        <td>Area</td>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->height }}</td>
                            <td>{{ $user->weight }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->role->name }}</td>
                            <td>{{ $user->city->name }}</td>
                            <td>{{ $user->area->name }}</td>
                            <td>{{ $user->created_at->format('d/m/y h:i A') }}</td>

                            <td>
                                <a class="btn-info btn" href="{{ route('admin.users.edit' , $user) }}">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a class="btn-danger btn"
                                   data-bs-toggle="modal" data-bs-target="#delete{{ $user->id }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.users.destroy', $user) }}" method="post">

                                        <div class="modal-body">
                                            {{ method_field('Delete') }}
                                            @csrf
                                            <p class="my-1 text-danger">Are You sure you want to delete this User
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
