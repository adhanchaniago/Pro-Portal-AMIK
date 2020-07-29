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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Data <?= ucfirst($this->uri->segment(1)) ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="<?= site_url(ucfirst($this->uri->segment(1))) ?>" class="btn btn-success btn-sm ml-5">Back</a> <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIDN : </label><?= $dosens->dosen_nidn ?>
                                </div>
                                <div class="form-group">
                                    <label>Password : </label><?= $dosens->dosen_pass ?>
                                </div>
                                <div class="form-group">
                                    <label>Nama : </label><?= $dosens->dosen_nama ?>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin : </label><?= ($dosens->dosen_jkel == 0) ? "Laki-Laki" : "Perempuan" ?>
                                </div>
                                <div class="form-group">
                                    <label>Alamat : </label><?= $dosens->dosen_alamat ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pendidikan : </label><?= $dosens->dosen_pdd ?>
                                </div>
                                <div class="form-group">
                                    <label>Status : </label><?= $dosens->dosen_status ?>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Masuk : </label><?= $dosens->dosen_tgl_msk ?>
                                </div>
                                <div class="form-group">
                                    <label>Email : </label><?= $dosens->dosen_email ?>
                                </div>
                                <div class="form-group">
                                    <label>No HP : </label><?= $dosens->dosen_nohp ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
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