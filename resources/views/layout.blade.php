<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Farm</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
    <link href="{{asset('summernote/summernote.css')}}" rel="stylesheet">
    <script src="{{asset('summernote/summernote.js')}}"></script>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css')}}"
          rel="stylesheet">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js')}}"></script>
    <script src="{{asset('https://code.jquery.com/jquery-3.5.1.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('https://use.fontawesome.com/releases/v6.1.0/js/all.js')}}" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
@include('sweetalert::alert')
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="#">Farm Manager</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                   aria-describedby="btnNavbarSearch"/>
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
               aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link" href="{{route('farm.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tree"></i></div>
                        Farm
                    </a>
                    <a class="nav-link" href="{{route('crop.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-leaf"></i></div>
                        Crop
                    </a>

                    <a class="nav-link" href="{{route('category.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-list-ul"></i></div>
                        Categories
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                farm manager
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">

        @yield('content')

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Kimutai's Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#describe').summernote({
            placeholder: 'Write a little something about your farm',
            tabsize: 2,
            height: 100
        })
    });
</script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bunscriptdle.min.js')}}"
        crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/demo/chart-area-demo.js')}}"></>
<script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js')}}"></script>
<link href="{{asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css')}}" rel="stylesheet">
</body>
</html>
