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
                        <form method="POST" action="<?= site_url('Penelitian/Update'); ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="hidden" name="id" value="<?= $Penelitians->penelitian_id ?>">
                                    <input type="hidden" name="admin" value="<?= $_SESSION['user']->admin_id ?>">
                                    <div class="form-group">
                                        <select class="form-control" name="status">
                                            <option value="Belum Di Cek">Belum Di Cek</option>
                                            <option value="Di Setujui">Di Setujui</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm">Update Status</button>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Judul Penelitian : </label><?= $Penelitians->penelitian_judul ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Status : </label><?= $Penelitians->penelitian_status ?>
                                    </div>
                                    <div class="form-group">
                                        <label>File : </label><?= $Penelitians->penelitian_file ?> <a href="<?= base_url('upoad/document/' . $Penelitians->penelitian_file); ?>" target="_blank">Download</a>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Mulai : </label><?= $Penelitians->penelitian_mulai  ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Selesai : </label><?= $Penelitians->penelitian_selesai ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dosen Pengaju : </label><?= $Penelitians->dosen_nama ?>
                                    </div>
                                    <div class="form-group">
                                        <label>NIDN : </label><?= $Penelitians->dosen_nidn ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Pendidikan : </label><?= $Penelitians->dosen_pdd ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Dosen : </label><?= $Penelitians->dosen_status ?>
                                    </div>
                                    <div class="form-group">
                                        <label>No HP : </label><?= $Penelitians->dosen_nohp  ?>
                                    </div>
                                </div>
                            </div>
                        </form>
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