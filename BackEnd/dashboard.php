<?php

include 'koneksi.php';

$mahasiswa = "SELECT * FROM mahasiswa";

$data_mahasiswa = mysqli_query($koneksi, $mahasiswa);

$jumlah_mahasiswa = mysqli_num_rows($data_mahasiswa);


$dosen = "SELECT * FROM dosen";

$data_dosen = mysqli_query($koneksi, $dosen);

$jumlah_dosen = mysqli_num_rows($data_dosen);

$pegawai = "SELECT * FROM staff";

$data_pegawai = mysqli_query($koneksi, $pegawai);

$jumlah_pegawai = mysqli_num_rows($data_pegawai);

?>