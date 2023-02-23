<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @include('admin.layouts.styles')
</head>
<body>

@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

@yield('content')

@include('admin.layouts.footer')
@include('admin.layouts.scripts')
</body>
</html>
