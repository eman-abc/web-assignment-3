<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'StriveX')</title>
    @stack('style')
    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Header -->
    
        @include('frontend.layouts.header')
    
    <!-- Main Content -->
    
        @yield('main-content')
    

    <!-- Footer -->
    
        @include('frontend.layouts.footer')
   

    @stack('scripts')
</body>
</html>
