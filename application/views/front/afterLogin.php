<!DOCTYPE html>
<html lang="en">

<head>

     <?php $this->load->view('front/_partials/head.php'); ?>
</head>

<body>
     <!--================ Start Header Menu Area =================-->
     <?php $this->load->view('front/_partials/menu.php'); ?>
     <!--================ End Header Menu Area =================-->

     <!--================ Start Home Banner Area =================-->
     <?php $this->load->view('front/_partials/banner.php'); ?>
     <!--================ End Home Banner Area =================-->

     <!--================ Start Feature Area =================-->
     <section id="LPPM" class="feature_area section_gap_top">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-lg-8">
                         <div class="main_title">
                              <h2 class="mb-3">Apa itu <br> Lembaga Penelitian dan Pengabdian Masyarakat (LPPM) ?</h2>
                              <p class="text-capitalize">
                                   Lembaga Penelitian dan Pengabdian Kepada Masyarakat (LPPM) adalah unsur pelaksana akademik yang melaksanakan sebagian tugas pokok dan fungsi di bidang Penelitian dan Pengabdian Kepada Masyarakat.
                              </p>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-4 col-md-6">
                         <div class="single_feature">
                              <div class="icon"><span class="flaticon-student"></span></div>
                              <div class="desc">
                                   <h4 class="mt-3 mb-2">Visi</h4>
                                   <p class="text-justify text-capitalize">
                                        Membangun Budaya Meneliti Dan Mengabdi Secara Produktif Dan Berkualitas
                                   </p>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="single_feature">
                              <div class="icon"><span class="flaticon-book"></span></div>
                              <div class="desc">
                                   <h4 class="mt-3 mb-2">Misi</h4>
                                   <p class="text-justify text-capitalize">
                                        Menjadikan LPPM AMIK Daparnas sebagai pusat riset dan pusat pengabdian kepada masyarakat di bidang ilmu pengetahuan, teknologi, pendidikan, dan seni yang berkualitas.
                                   </p>
                              </div>
                         </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                         <div class="single_feature">
                              <div class="icon"><span class="flaticon-earth"></span></div>
                              <div class="desc">
                                   <h4 class="mt-3 mb-2">Motto</h4>
                                   <p class="text-justify text-capitalize">
                                        Disiplin, Produktif, Sinergis
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!--================ End Feature Area =================-->

     <!--================ Start Registration Area =================-->
     <div id="loginDosen" class="section_gap registration_area">
          <div class="container">
               <div class="row align-items-center">
                    <!-- <div class="col-lg-7">
                         <div class="row clock_sec clockdiv" id="clockdiv">
                              <div class="col-lg-12">
                                   <h1 class="mb-3">Silahkan Login</h1>
                                   <p>
                                        Hanya dosen AMIK Daparnas yang dapat melakukan login, jika ada belum memiliki akun silahkan hubungi administrator dengan cara klik <a href="">disini</a>.
                                   </p>
                              </div>
                         </div>
                    </div> -->
                    <div class="col-lg-12 ">
                         <div class="register_form">
                              <h3>AMIK Daparnas</h3>
                              <p>Ajukan Judul Penelitian</p>
                              <div class="row">
                                   <?php var_dump($_SESSION['dosen']->dosen_id); ?>
                                   <form action="<?= site_url('Ajukan'); ?>" method="POST" enctype="multipart/form-data">
                                        <div class="col-lg-12 form_group">
                                             <input name="id" value="<?= $_SESSION['dosen']->dosen_id; ?>" type="hidden" />
                                             <input name="judul" placeholder="Judul Penelitian" required type="text" />
                                             <input name="mulai" required="" type="date" />
                                             <input name="selesai" required="" type="date" />
                                             <input name="file" required="" type="file" />
                                             <p class="help-block text-left">Pilih File</p>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                             <button type="submit" class="primary-btn">Ajukan</button>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!--================ End Registration Area =================-->

     <!--================ Start Trainers Area =================-->
     <section id="pengumuman" style="padding-top: 70px;" class="trainer_area section_gap_top">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-lg-5">
                         <div class="main_title">
                              <h2 class="mb-3">Pengumuman</h2>
                              <p>
                                   Pengumuman Bersifat Singkat Padat dan Jelas
                              </p>
                         </div>
                    </div>
               </div>
               <div class="row justify-content-center d-flex align-items-center">
                    <?php foreach ($beritas as $rowBerita) : ?>
                         <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
                              <div class="thumb d-flex justify-content-sm-center">
                                   <img class="img-fluid" src="img/trainer/t1.jpg" alt="" />
                              </div>
                              <div class="meta-text text-sm-center">
                                   <h4><?= $rowBerita->berita_judul ?></h4>
                                   <p class="designation"><?= $rowBerita->berita_post ?></p>
                                   <div class="mb-4">
                                        <p>
                                             <?= $rowBerita->berita_isi ?>
                                        </p>
                                   </div>
                                   <div class="align-items-center justify-content-center d-flex">
                                   </div>
                              </div>
                         </div>
                    <?php endforeach ?>

               </div>
          </div>
     </section>
     <!--================ End Trainers Area =================-->

     <!--================ Start Events Area =================-->
     <div id="list" class="events_area" style="padding: 60px 0 100px;">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-lg-8">
                         <div class="text-center">
                              <h2 class="text-white">List Penelitian yang di Ajukan</h2>
                              <p>
                                   Berikut Judul Penelitian yang Telah di Terima
                              </p>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-lg-12">
                         <div class="text-center ">
                              <table class=" table-dark table table-bordered">
                                   <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Dosen</th>
                                        <th>NIDN</th>
                                        <th>Status</th>
                                   </tr>
                                   <?php foreach ($penelitians as $no => $row) : ?>
                                        <tr>
                                             <th><?= ++$no ?></th>
                                             <th><?= $row->penelitian_judul ?></th>
                                             <th><?= $row->dosen_nama ?></th>
                                             <th><?= $row->dosen_nidn ?></th>
                                             <th><?= $row->penelitian_status ?></th>
                                        </tr>
                                   <?php endforeach ?>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!--================ End Events Area =================-->

     <!--================ Start footer Area  =================-->
     <?php $this->load->view('front/_partials/footer.php'); ?>
     <!--================ End footer Area  =================-->

     <?php $this->load->view('front/_partials/scripts.php'); ?>
</body>

</html>