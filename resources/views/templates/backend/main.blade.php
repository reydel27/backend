<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('templates.backend.includes.head')

<body class="hold-transition sidebar-mini layout-footer-fixed layout-navbar-fixed layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('templates.backend.includes.navbar')
        <!-- /.Navbar -->
        <!-- Main Sidebar Container -->
        @include('templates.backend.includes.sidebar')
        <!-- /.Main Sidebar Container -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Content Header (Page header) -->
                @include('templates.backend.includes.content-header')
                <!-- /.Content Header (Page header) -->
                <!-- Main content -->
                <section class="content" style="padding: 15px .5rem;">
                    @yield('content')
                </section>
            </div>
            <!-- /.Main content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Footer -->
        @include('templates.backend.includes.footer')
        <!-- /.Footer -->
        @include('templates.backend.includes.scripts')
    </div>
</body>

</html>