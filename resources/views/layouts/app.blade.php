<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RAEP</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('app.css')}}">
        <link rel="stylesheet" href="{{asset('modern.css')}}">
        <script type="text/javascript" src="{{asset('main.js')}}"></script>

    
    </head>
    <body>
        @include('inc.navbar')
        @include('inc.errors')
        <div class="container">
            @yield('sadrzaj')
       </div>
    </body>
     

</html>
