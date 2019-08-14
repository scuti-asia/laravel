<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Admin panel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed sidebar-lg-show pace-done pace-done" cz-shortcut-listen="true">
    @include('layouts.elements.admin-header')
    <div class="app-body">
        @include('layouts.elements.admin-sidebar')
        <main class="main">
            <ol class="breadcrumb">
                @yield('breadcrumb')
            </ol>
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>

    </div>
    @include('layouts.elements.admin-footer')
</body>
</html>
