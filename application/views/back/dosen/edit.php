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
                        <h3 class="box-title">Edit Data <?= ucfirst($this->uri->segment(1)) ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <a href="<?= site_url(ucfirst($this->uri->segment(1))) ?>" class="btn btn-success btn-sm ml-5">Back</a> <br><br>
                        <form method="POST" action="<?= site_url('Dosen/Update'); ?>">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NIDN</label>
                                        <input value="<?= $dosens->dosen_id ?>" required type="hidden" name="id">
                                        <input value="<?= $dosens->dosen_nidn ?>" required type="text" class="form-control" name="nidn" placeholder="NIDN">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input value="<?= $dosens->dosen_pass ?>" required type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input value="<?= $dosens->dosen_nama ?>" required type="text" class="form-control" name="nama" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jkel" class="form-control">
                                            <option value="0">Laki-Laki</option>
                                            <option value="1">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" class="form-control">
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pendidikan</label>
                                        <select name="pdd" class="form-control">
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="Tetap">Tetap</option>
                                            <option value="Tidak Tetap">Tidak Tetap</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tanggal Masuk</label>
                                        <input value="<?= $dosens->dosen_tgl_msk ?>" required type="date" class="form-control" name="msk" placeholder="Tanggal Masuk">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input value="<?= $dosens->dosen_email ?>" required type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input value="<?= $dosens->dosen_nohp ?>" required type="number" class="form-control" name="nohp" placeholder="No HP">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" cols="3" rows="3" class="form-control"><?= $dosens->dosen_alamat ?></textarea>
                                    </div>
                                </div>
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