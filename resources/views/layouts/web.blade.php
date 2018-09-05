{{-- <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                             <li><a class="nav-link" href="{{route('blog')}}">Posts</a></li>
                              <li><a class="nav-link" href="{{route('acerca')}}">Acerca</a></li>
                               <li><a class="nav-link" href="{{route('contacto')}}">Contacto</a></li>
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                           
                            
                   
                           
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
           
            @yield('content')
        </main>
    </div>
   
     
</body>
</html>
 --}}








<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Coop', 'cOP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">

    
</head>
<body>
    @include('web/partials.navbar')
    @include('web/partials.jumbo')
     <main role="main" class="container-fluid">
        @yield('content')
    </main><!-- /.container -->


<footer class="container-fluid py-5 bg-info text-white"> 

<div class="card bg-transparent border-info">
  <div class="card-header">
    <div class="mx-auto" style="width: 100px;">
        <a href="{{route('contacto')}}"><button type="button" class="btn btn-outline-dark btn-sm">Contactanos</button></a>
    </div>
  </div>
  <div class="card-body">
    
      <div class="row">
      <div class="fb-like ml-2" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true">
    </div>
     
     <div class="float-right float-md-none"><a href="https://www.facebook.com/luis.silva.777701"><button type="button" class="btn btn-outline-dark btn-sm ml-2"><i class="fab fa-facebook-square fa-2x"></i></button></a></div>
     </div>

</div>
    <blockquote class="blockquote mb-0">
      <footer class="blockquote-footer"><p class="text-center text-white">2018 | Todos los derechos reservados</p></cite></footer>
    </blockquote>
  </div>
</div>
     
</footer>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


</body>
</html>
