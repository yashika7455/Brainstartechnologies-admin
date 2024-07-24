<!DOCTYPE html>
<html lang="en">

<head>



  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title', 'Default Title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle JS (includes Popper.js) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- Favicons -->
  <link href="../empassests/img/favicon.png" rel="icon">
  <link href="../empassests/img/apple-touch-icon.png" rel="apple-touch-icon">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../empassests/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../empassests/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../empassests/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../empassests/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../empassests/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../empassests/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../empassests/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="../empassests/css/style.css" rel="stylesheet">

  <meta name="description" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- Additional head content -->

</head>

<body>

  <div class="wrapper">
    @include('layouts.aside') <!-- Sidebar -->

    <div class="main">
      @include('layouts.header') <!-- Header -->

      <main>
        @yield('content') <!-- Page content -->
      </main>

      @include('layouts.footer') <!-- Footer -->
    </div>
  </div>

  <!-- Vendor JS Files -->
 

  <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('/empassests/js/main.js') }}"></script>
<script src="{{ asset('/empassests/js/emp.js') }}"></script>
<script src="../empassests/vendor/apexcharts/apexcharts.min.js"></scrip>
  <script src="../empassests/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../empassests/vendor/chart.js/chart.umd.js"></script>
  <script src="../empassests/vendor/echarts/echarts.min.js"></script>
  <script src="../empassests/vendor/quill/quill.js"></script>
  <script src="../empassests/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../empassests/vendor/tinymce/tinymce.min.js"></script>
  <script src="../empassests/vendor/php-email-form/validate.js"></script>
</body>

</html>