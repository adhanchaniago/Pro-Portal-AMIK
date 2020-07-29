<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?= site_url('/'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#LPPM">LPPM</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#pengumuman" class="nav-link ">Pengumuman</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#list" class="nav-link ">List Penelitian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#map">Map</a>
                        </li>
                        <?php if (isset($_SESSION['dosen'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('LogoutDosen'); ?>">Logout</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#loginDosen">Login</a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>