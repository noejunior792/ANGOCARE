<!DOCTYPE html>
<html lang="en">


 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ANGOCARE</title>
        <meta name="description" content="Qompac UI is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
        <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard,">
        <meta name="author" content="Iqonic Design">
        <meta name="DC.title" content="Qompac UI Responsive Bootstrap 5 Admin Dashboard Template">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="{{asset('assets/css/core/libs.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/vendor/sheperd/dist/css/sheperd.css')}}">

        <!-- Flatpickr css -->
        <link rel="stylesheet" href="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.css')}}">








        <!-- qompac-ui Design System Css -->
        <link rel="stylesheet" href="{{asset('assets/css/qompac-ui.min.css')}}">

        <!-- Custom Css -->
        <link rel="stylesheet" href="{{asset('assets/css/custom.min.css')}}">
        <!-- Dark Css -->
        <link rel="stylesheet" href="{{asset('assets/css/dark.min.css')}}">

        <!-- Customizer Css -->
        <link rel="stylesheet" href="{{asset('assets/css/customizer.min.css')}}" >

        <!-- RTL Css -->
        <link rel="stylesheet" href="{{asset('assets/css/rtl.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/vendor/swiperSlider/swiper-bundle.min.css')}}">
        <!-- css personalizado -->
        <link rel="stylesheet" href="{{asset('assets/css/costumized/style.css')}}">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">    </head>




</head>
<body class="">
 <!-- loader Start -->
        <div id="loading">
            <div class="loader simple-loader">
                <div class="loader-body ">
                    <img src="../assets/images/loader.webp" alt="loader" class="image-loader img-fluid " width="15%">
                </div>
            </div>
        </div>
  <!-- loader END -->

         @yield('conteudo')

         <script src="{{asset('assets/js/core/libs.min.js')}}"></script>
         <!-- Plugin Scripts -->


         <!-- Flatpickr Script -->
         <script src="{{asset('assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
         <script src="{{asset('assets/js/plugins/flatpickr.js')}}" defer></script>



           <!-- Select2 Script -->
           <script src="{{asset('assets/js/plugins/select2.js')}}" defer></script>




         <!-- Slider-tab Script -->
         <script src="{{asset('assets/js/plugins/slider-tabs.js')}}"></script>





         <!-- Lodash Utility -->
         <script src="{{asset('assets/vendor/lodash/lodash.min.js')}}"></script>
         <!-- Utilities Functions -->
         <script src="{{asset('assets/js/iqonic-script/utility.min.js')}}"></script>
         <!-- Settings Script -->
         <script src="{{asset('assets/js/iqonic-script/setting.min.js')}}"></script>
         <!-- Settings Init Script -->
         <script src="{{asset('assets/js/setting-init.js')}}"></script>
         <!-- External Library Bundle Script -->
         <script src="{{asset('assets/js/core/external.min.js')}}"></script>
         <!-- Widgetchart Script -->
         <script src="{{asset('assets/js/charts/widgetcharts.js')}}" defer></script>
         <!-- Dashboard Script -->
         <script src="{{asset('assets/js/charts/dashboard.js')}}" defer></script>
         <!-- qompacui Script -->
         <script src="{{asset('assets/js/qompac-ui.js')}}" defer></script>
         <script src="{{asset('assets/js/sidebar.js')}}" defer></script>




</body>

</html>
