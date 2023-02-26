@extends('web.layouts.app')

@section('content')

@include('web.layouts.navbar')

@guest()
    <h1>Welcome to {{ config('app.name') }}</h1>
@else
    <h1>Hello, {{ Auth::user()->name }}</h1>
@endguest
@endsection
