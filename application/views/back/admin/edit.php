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
                        <form method="POST" action="<?= site_url('Admin/Update'); ?>">
                            <div class="form-group">
                                <label>Username</label>
                                <input value="<?= $admins->admin_id ?>" required type="hidden" name="id">
                                <input value="<?= $admins->admin_username ?>" required type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input value="<?= $admins->admin_password ?>" required type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input value="<?= $admins->admin_nama ?>" required type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
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