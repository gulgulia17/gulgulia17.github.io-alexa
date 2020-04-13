<!doctype html>
<html lang="en">
  <head>
    <title>Alexa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="stylesheet" href="/assets/css/main.css"> --}}
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
    @yield('bs')
</head>
<body>
    @include('layoutss.inc.nav')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{asset('vendor/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('vendor/counter/jquery.waypoints.min.js')}}"></script>
    @yield('js')
  </body>
</html>