<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.head')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        @include('admin.includes.header')

        @include('admin.includes.menul')

        @yield('content')

        <!-- Footer Start -->
        @include('admin.includes.footer')
    </div>
    <!-- END wrapper -->

    @include('admin.includes.js')

</body>

</html>
