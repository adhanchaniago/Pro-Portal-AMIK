<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/frontend/img/AMIK.png'); ?>" class="" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $_SESSION['user']->admin_nama ?></p>
                <!-- Status -->
            </div>
        </div>


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Management Website</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="<?= site_url('Admin'); ?>"><i class="fa fa-user"></i> <span>Administrator</span></a></li>
            <li><a href="<?= site_url('Dosen'); ?>"><i class="fa fa-users"></i> <span>Dosen</span></a></li>
            <li><a href="<?= site_url('Berita'); ?>"><i class="fa fa-newspaper-o"></i> <span>Berita</span></a></li>
            <li><a href="<?= site_url('Penelitian'); ?>"><i class="fa fa-bank "></i> <span>Penelitian</span></a></li>
            <li><a href="<?= site_url('Laporan'); ?>"><i class="fa fa-book "></i> <span>Laporan</span></a></li>
            <li><a href="<?= site_url('LogoutAdmin'); ?>"><i class="fa fa-lock "></i> <span>Logout</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>