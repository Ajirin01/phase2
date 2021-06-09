<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Digi-Realm E-learning Authentication System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('site/dashboard/plugins/fontawesome-free/css/all.min.css')}}" />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link
      rel="stylesheet"
      href="{{asset('site/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="{{asset('site/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('site/dashboard/plugins/jqvmap/jqvmap.min.css')}}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('site/dashboard/dist/css/adminlte.min.css')}}" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="{{asset('site/dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"
    />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('site/dashboard/plugins/daterangepicker/daterangepicker.css')}}" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('site/dashboard/plugins/summernote/summernote-bs4.css')}}" />
    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
  </head>
  <body class="hold-transition login-page">
          @yield('content')
          <!-- /.content -->
        {{-- </div> --}}
        <!-- /.content-wrapper -->
        <!-- /.control-sidebar -->
        <!-- /.content -->
      {{-- </div> --}}
      <!-- /.content-wrapper -->
      <footer class="">
        {{-- <p>Copyright © <script> var date = new Date(); document.write(date.getFullYear())</script> Powered by <a href="http://digirealm.com.ng/">Digi-Realm City Solution </a></p> --}}

        <strong
          >Copyright &copy;<script> var date = new Date(); document.write(date.getFullYear())</script> Powered by 
          <a href="http://digirealm.com.ng/">Digi-Realm City Solution </a>.</strong
        >
        {{-- All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.6-pre
        </div> --}}
        <script></script>
      </footer>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('site/dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('site/dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('site/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('site/dashboard/plugins/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('site/dashboard/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('site/dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('site/dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('site/dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('site/dashboard/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('site/dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('site/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('site/dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('site/dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('site/dashboard/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('site/dashboard/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('site/dashboard/dist/js/demo.js')}}"></script>
  </body>
</html>
