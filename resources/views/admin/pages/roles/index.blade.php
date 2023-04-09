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
                    <h1>Roles Page</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <div class="col-md-4 d-flex justify-content-end">
                    <a class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#createRole">Add New Role</a>
                </div>
            </div>

            <div class="modal fade" id="createRole" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                            <button type="button" class="btn-close" style="transform: none"
                                    aria-label="Close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <form action="{{ route('admin.roles.store') }}" method="post">
                            @csrf

                            <div class="px-2 py-1">
                                <label class="form-label" for="name">Role Name</label>
                                <input id="name" type="text" name="name" class="form-control">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>


            <section class="section">
            <div class="row">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $key => $role)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->created_at->format('d/m/y h:i A') }}</td>

                            <td>
                                <a class="btn-sm btn-info btn"
                                   data-bs-toggle="modal" data-bs-target="#edit{{ $role->id }}">
                                    <i class="fa fa-edit text-white"></i>
                                </a>
                                <a class="btn-sm btn-danger btn"
                                   data-bs-toggle="modal" data-bs-target="#delete{{ $role->id }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>


                        <div class="modal fade" id="edit{{ $role->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.roles.update', $role) }}" method="post">

                                        <div class="modal-body">
                                            {{ method_field('PUT') }}
                                            @csrf
                                          <div class="form-group">
                                              <label for="area_name" class="form-label">Role Name</label>
                                              <input type="text" class="form-control" name="name" id="area_name"
                                                     value="{{ $role->name }}">
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

                        <div class="modal fade" id="delete{{ $role->id }}" tabindex="-1"
                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                                        <button type="button" class="btn-close" style="transform: none"
                                                aria-label="Close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="post">

                                        <div class="modal-body">
                                            {{ method_field('Delete') }}
                                            @csrf
                                            <p class="my-1 text-danger">Are You sure you want to delete this Role ?</p>
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
