<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset('default/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/app.css') }}">

</head>
<body>
    
    {{-- content --}}
    @yield('content')

    {{-- javascript files --}}
    <script src="{{ asset('default/js/jquery.min.js') }}"></script>
    <script src="{{ asset('default/js/popper.min.js') }}"></script>
    <script src="{{ asset('default/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('default/js/app.js') }}"></script>

</body>
</html>
