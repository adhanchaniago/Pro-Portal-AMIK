<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase">
                            AMIK Datuak Parpatiah Nan Sabatang
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5">
                            LEMBAGA PENELITIAN DAN PENGABDIAN KEPADA MASYARAKAT (LPPM)
                        </h2>
                        <div>
                            <?php if (isset($_SESSION['dosen'])) : ?>
                                <a href="#loginDosen" class="primary-btn2 mb-3 mb-sm-0">Ajukan Penelitian</a>
                            <?php else : ?>
                                <a href="#loginDosen" class="primary-btn2 mb-3 mb-sm-0">Login Dosen</a>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>