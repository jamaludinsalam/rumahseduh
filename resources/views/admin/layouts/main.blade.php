<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.addons.css')}}">
        <!-- endinject -->
        <!-- plugin css for this page -->
       
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
        <!-- endinject -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
        <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
        <link rel="stylesheet" href="{{asset('admin/dropzone/dropzone.css')}}">
        @yield('tinymce')
       
        
        
        
        
    </head>
              
    <body>
        <div class="container-scroller">
            @include('admin.layouts.partials.navbar')
        
            <div class="container-fluid page-body-wrapper">
                @include('admin.layouts.partials.sidebar')
                    <div class="main-panel">
                        <div class="content-wrapper">
                            @yield('content')
                            @include('admin.layouts.partials.footer')
                        </div>
                    </div>
        <!-- main-panel ends -->
            </div>
      <!-- page-body-wrapper ends -->
        </div>
    <!-- container-scroller -->



    <!-- plugins:js -->
  {{-- <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('vendors/js/vendor.bundle.addons.js')}}"></script> --}}
  <!-- endinject -->
  <!-- Plugin js for this page-->
 
  <script src="{{asset('admin/dropzone/dropzone.js')}}"></script>
  <script src="{{asset('admin/dropzone/customdropzone.js')}}"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('admin/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('admin/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  <script src="{{asset('admin/sweetalert/sweetalert.min.js')}}"></script>
  @include('sweet::alert')
  
</body>
</html>