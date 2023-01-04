<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magang | @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css?v=3.2.0')}}">

    <body class="hold-transition sidebar-mini">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Logout</a>
                </li>
            </ul>
        </nav>
        
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{asset('AdminLTE/index3.html')}}" class="brand-link">
                <img src="{{asset('AdminLTE/dist/img/logounsika.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">MAGANG FASILKOM</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @include('page.nav')
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                @yield('title')
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
            </div>
            <strong>Copyright &copy; 2022/2023 <a href="https://adminlte.io">Frise Anesha Lutia</a>.</strong> All rights reserved.
        </footer>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

    <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
    </body>
</html>