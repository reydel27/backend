<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@if( config('backend.name') != '') {{ config('backend.name') }} @else Admin Panel @endif @yield('title')</title>
    @include('templates.backend.includes.head.seo')
    @include('templates.backend.includes.head.styles')
    @include('templates.backend.includes.head.fonts')
    @include('templates.backend.includes.head.scripts-on-head')
</head>