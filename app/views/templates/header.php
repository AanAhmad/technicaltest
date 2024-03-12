<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rent Car</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url; ?>/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url; ?>/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="<?= base_url; ?>/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url; ?>/dist/js/adminlte.min.js"></script>
  <script src="<?= base_url; ?>/dist/js/demo.js"></script>
  <script src="<?= base_url; ?>/plugins/chart.js/Chart.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/lry@1.0.0/demo.js"></script>
  <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
  <style>
    @media screen and (max-width: 767px) {
      .card-body {
        overflow-x: auto;
        display: block;
        white-space: nowrap;
      }

      .table {
        width: 100%;
        display: block;
      }
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header text-capitalize"><?= $_SESSION['role'] ?></span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="logout" data-toggle="modal" data-target="#myModal">
              Keluar
            </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <script>
      $('#logout').on('click', function() {
        let keluar = '<a href="<?= base_url ?>/Log/logout" class="btn btn-danger">Keluar</a>'
        $('.modal-title').html('Keluar');
        $('.modal-body').html('Yakin anda akan keluar?');
        $('#close').html('Batal');
        $('.tombol').html(keluar);
      });
      $(document).ready(function() {
        <?php
        if ($_SESSION['role'] == 'user') {
        ?>
          $(".admin").attr("hidden", true);
        <?php
        }
        ?>
        <?php
        if ($_SESSION['role'] == 'admin') {
        ?>
          $(".user").attr("hidden", true);
        <?php
        }
        ?>
      });
      $(window).on('load', function() {
        let setuju = '<input class="btn btn-success" type="submit" name="status" value="Setuju">'
        let ditolak = '<input class="btn btn-danger" type="submit" name="status" value="Ditolak">'
        $('#setuju').html(setuju);
        $('#ditolak').html(ditolak);
      });
      new DataTable('#report', {
        layout: {
          topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
          }
        }
      });
    </script>