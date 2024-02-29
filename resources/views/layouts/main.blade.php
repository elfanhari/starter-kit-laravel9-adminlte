<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @isset($title)
        Starter Kit LARAVEL 9 dan AdminLTE | {{ $title }}
    @else
        Starter Kit LARAVEL 9 dan AdminLTE
    @endisset
  </title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  {{-- Select 2 --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" integrity="sha256-FdatTf20PQr/rWg+cAKfl6j4/IY3oohFAJ7gVC3M34E=" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css"> <!-- for live demo page -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/adminlte/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/adminlte/plugins/summernote/summernote-bs4.min.css">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  {{-- Yajra Datatable --}}
  <link href="/yajra/datatable.css" rel="stylesheet">
  {{-- MY CSS --}}
  <link rel="stylesheet" href="/customize/style.css">
  {{-- Datatable Simple --}}
  {{-- <link rel="stylesheet" href="/extensions/simple-datatables/style.css">
  <link rel="stylesheet" href="/extensions/simple-datatables.css"> --}}

  @yield('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'Figtree'">
<div class="wrapper">

  @include('layouts.navbar')

  @include('layouts.sidebar')

  <div class="content-wrapper">
    @yield('content')
  </div>

  @include('pages.auth.logout')

  <!-- Preloader -->
  {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="" src="/img/loader.gif" alt="Loader" height="60" width="60">
  </div> --}}

  @include('layouts.footer')

  <!-- Control Sidebar -->
  @include('layouts.control-sidebar')
</div>
<!-- ./wrapper -->

{{-- JS --}}

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/adminlte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/adminlte/plugins/moment/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/adminlte/dist/js/pages/dashboard.js"></script>
{{-- Tooltips --}}
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });
</script>
<script>
  $(function () {
    $('[data-toggle="modal"]').tooltip()
  });
</script>
{{-- Popovers --}}
<script>
  $(function () {
    $('[data-toggle="popover"]').popover()
  });
  $('.popover-dismiss').popover({
  trigger: 'focus'
  })
</script>
{{-- Select2 --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js" integrity="sha256-AFAYEOkzB6iIKnTYZOdUf9FFje6lOTYdwRJKwTN5mks=" crossorigin="anonymous"></script> --}}
<script src="/customize/select2/script.js"></script>
<script>
  $(document).ready(function() {
    $('.selectTwo').select2();
  });
</script>


{{-- Datatables Simple --}}
{{-- <script src="/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="/extensions/simple-datatables.js"></script> --}}

{{-- Yajra Datatable --}}
<script src="/yajra/datatable.js"></script>
<script>
  $(document).ready(function(){
    $('#myTable').DataTable();
  });
</script>
@include('partials.toast')

</body>
</html>
