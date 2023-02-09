<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>TropisAnimal||Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assetsadmin/images/favicon.png')}}">
    <link href="{{asset('assetsadmin/vendor/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsadmin/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetsadmin/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
       
      {{-- Navbar --}}
      @include('admin.navbar')
      {{-- End Navbar --}}

      {{-- SideBar --}}
      @include('admin.sidebar')
      {{-- End SideBar --}}

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
              @yield('isi')
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assetsadmin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assetsadmin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('assetsadmin/js/custom.min.js')}}"></script>

    <script src="{{asset('assetsadmin/vendor/chartist/js/chartist.min.js')}}"></script>

    <script src="{{asset('assetsadmin/vendor/moment/moment.min.js')}}"></script>
    <script src="{{asset('assetsadmin/vendor/pg-calendar/js/pignose.calendar.min.js')}}"></script>


    <script src="{{asset('assetsadmin/js/dashboard/dashboard-2.js')}}"></script>
    <!-- Circle progress -->

</body>

</html>