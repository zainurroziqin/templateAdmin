<?php

include 'koneksi.php';

$mahasiswa = "SELECT * FROM mahasiswa";

$data_mahasiswa = mysqli_query($koneksi, $mahasiswa);

?>