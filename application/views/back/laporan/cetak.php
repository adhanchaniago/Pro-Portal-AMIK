<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
function bln_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('back/_partials/head.php'); ?>
</head>

<body onload="print()">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img src="<?= base_url('assets/frontend/img/banner/AMIK.png'); ?>" style="width: 200px; height: 150px;">
                </center>
            </div>
            <div class="col-md-8">
                <h2>AMIK DAPARNAS</h2>
                <h5>Sistem Informasi Portal AMIK Daparnas</h5>
                <h6>
                    Alamat: Jl. Patimura No.1c, Kp. Jao, Kec. Padang Bar., Kota Padang, Sumatera Barat 25116 <br>
                    Website: https://amikdaparnas-lp3i.ac.id <br>
                    No Tlp.: (0627) 5137388
                </h6>
            </div>
        </div>
        <hr>
        <div id="isi" class="mt-5">
            <center>
                <h4>Data Laporan Per <?= bln_indo($bulanAmbil) ?></h4>
            </center>
            <table class="mt-3 table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Dosen Pengaju</th>
                        <th>Judul Penelitian</th>
                        <th>Status</th>
                        <th width="100px">Mulai</th>
                        <th width="100px">Selesai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bulan as $no => $row) : ?>
                        <tr>
                            <td><?= ++$no ?></td>
                            <td><?= $row->dosen_nama ?></td>
                            <td><?= $row->penelitian_judul ?></td>
                            <td><?= $row->penelitian_status ?></td>
                            <td><?= tgl_indo($row->penelitian_mulai) ?></td>
                            <td><?= tgl_indo($row->penelitian_selesai) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="row mt-5">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                </div>
                <div class="text-center col-md-4">
                    <p>
                        Padang, <?= tgl_indo(date('Y-m-d')) ?>
                    </p>
                    <br>
                    <br>
                    <br>
                    <h5>Pimpinan</h5>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('back/_partials/scripts.php'); ?>
</body>

</html>