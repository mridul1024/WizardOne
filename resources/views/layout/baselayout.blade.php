<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')

    @yield('content')

    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    
    
    @include('aboutus')

    
    <br>
    <br>
    <br>
    <br>
    <br>


    @include('services')

    <br>
    <br>
    <br>
    <br>
    <br>

    @include('recentprojects')

    <br>
    <br>
    <br>
    <br>
    <br>

    @include('team')

    <br>
    <br>
    <br>
    <br>
    <br>

    @include('sitefooter')

</body>

</html>