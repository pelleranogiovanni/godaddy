<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('CMS Coop. Ladrilleros', 'CMS Coop. Ladrilleros') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    
    <link rel="icon" type="image/png" href="img/icon.png">
    {{-- agregado --}}



  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/posts" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CMS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ADMINISTRADOR</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                        <!-- Authentication Links -->
                        @guest
                           {{--  <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
                        @else
                            {{-- <li><a class="nav-link" href="{{route('tags.index')}}">Etiquetas</a></li>
                            <li><a class="nav-link" href="{{route('categories.index')}}">Categorias</a></li>
                            <li><a class="nav-link" href="{{route('posts.index')}}">Post</a></li> --}}
                             <li class="dropdown user user-menu">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                

                                 <ul class="dropdown-menu">
                                  <!-- User image -->
                                  <br>
                                  <li>
                                    <a href="{{route('perfil')}}" class="btn btn-outline-secondary">Editar Perfil</a>
                                  </li>

                                  <hr>
                                    <li class="">
                    
                                      <p>
                                       ¿Desea Salir?
                                      </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer bg-blue">
                    
                                      <div class="pull-right">
                                        
                                        <a class="btn btn-default" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                      </div>
                                    </li>
                                 </ul>
                              
                              </li>
                            
                        @endguest
                    </ul>
              </li>
              
            </ul>
          </div>

        </nav>



      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="">
                <i class="fa fa-file"></i>
                <span>Posts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('posts.index')}}"><i class="fa fa-circle-o"></i>Listar Posts</a></li>
                <li><a href="{{route('posts.create')}}"><i class="fa fa-circle-o"></i>Crear Post</a></li>
              </ul>
            </li>
            
            {{-- <li class="treeview">
              <a href="#">
                <i class="fa fa-tags"></i>
                <span>Tags</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('tags.index')}}"><i class="fa fa-circle-o"></i> Listar Tags</a></li>
                <li><a href="{{route('tags.create')}}"><i class="fa fa-circle-o"></i> Crear Tags</a></li>
              </ul>
            </li> --}}
            <li class="treeview">
              <a href="#">
                <i class="fa fa-tasks"></i>
                <span>Categorías</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('categories.index')}}"><i class="fa fa-circle-o"></i> Listar Categorías</a></li>
                <li><a href="{{route('categories.create')}}"><i class="fa fa-circle-o"></i> Crear Categoría</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Publicidad</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('publicities.index')}}"><i class="fa fa-circle-o"></i> Administrar Publicidad</a></li>
                
              </ul>
            </li>
             {{-- <li>
              <a href="#">
                <i class="fa fa-cogs"></i> <span>Usuario</span>
              </a>
            </li> --}}
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">CMS</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                {{-- CONTENIDO --}}
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">

                        <main class="py-4">
            @if(session('info'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-success">
                                {{session('info')}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

             @if(session('infoError'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-danger">
                                {{session('infoError')}}
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if(count($errors))
                 <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
                              

                           </div>
                        </div>
                        
                      </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Artisoft</b> 
        </div>
        <strong>Copyright &copy; 2018.</strong> Todos los derechos reservados.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
