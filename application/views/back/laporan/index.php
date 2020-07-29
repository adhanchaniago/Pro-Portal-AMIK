<!DOCTYPE html>
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
                        <h3 class="box-title">Data <?= ucfirst($this->uri->segment(1)) ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- <a href="<?= site_url('Admin/Add') ?>" class="btn btn-primary btn-sm">Tambah Data</a> <br><br> -->
                        <form action="<?= site_url('Laporan/Cetak'); ?>" method="POST" class="col-md-6">
                            <div class="form-group">
                                <label>Bulan</label>
                                <input type="month" value="<?= date('Y-m') ?>" name="bulan" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cetak</button>
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