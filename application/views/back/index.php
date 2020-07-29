<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <?php $this->load->view('back/_partials/head.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <?php $this->load->view('back/_partials/top-bar.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php $this->load->view('back/_partials/side-bar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php $this->load->view('back/_partials/bc.php'); ?>

      <!-- Main content -->
      <section class="content container-fluid">
        <div class="row">
          <!-- left column -->
          <h2 class="text-center">Selamat Datang di Halaman Administrator</h2>
          <!--/.col (right) -->

        </div>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php $this->load->view('back/_partials/footer.php'); ?>

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <?php $this->load->view('back/_partials/scripts.php'); ?>

</body>

</html>