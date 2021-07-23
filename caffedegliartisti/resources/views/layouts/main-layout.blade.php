<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caffè Degli Artisti</title>
    <!-- FAVICON.ICO --> 
    <link rel="icon" href="{{ asset('/storage/graphics/logo.png') }}">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&display=swap" rel="stylesheet"> 
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <!-- JS -->
    <script src="{{asset('/js/app.js')}}"></script>
</head>
<body>
    <div id=app class=boss-container>
        @include('components.header')

        @yield('content')

        @include('components.footer')
    </div>
</body>
</html>