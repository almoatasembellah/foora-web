@extends('web.layouts.app')
@include('web.layouts.navbar')

@section('content')
    <h1>{{ $user->name }}</h1>

    <img src="{{ asset($user->image)  }}" alt="user profile">
@endsection
