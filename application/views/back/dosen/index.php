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
                        <h3 class="box-title">List Data <?= ucfirst($this->uri->segment(1)) ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="<?= site_url('Dosen/Add') ?>" class="btn btn-primary btn-sm">Tambah Data</a> <br><br>
                        <table id="example1" class="mt-3 table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIDN</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Status</th>
                                    <th>No Hp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dosens as $no => $row) : ?>
                                    <tr>
                                        <td width="10px"><?= ++$no ?></td>
                                        <td><?= $row->dosen_nidn ?></td>
                                        <td><?= $row->dosen_nama ?></td>
                                        <td><?= ($row->dosen_jkel == 0) ? "Laki-Laki" : "Perempuan" ?></td>
                                        <td><?= $row->dosen_status ?></td>
                                        <td><?= $row->dosen_nohp ?></td>
                                        <td width="150px">
                                            <a href="<?= site_url('Dosen/Detail/' . $row->dosen_id); ?>" class="btn btn-success btn-sm">Detail</a>
                                            <a href="<?= site_url('Dosen/' . $row->dosen_id); ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= site_url('Dosen/Delete/' . $row->dosen_id); ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
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