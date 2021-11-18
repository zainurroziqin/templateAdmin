<?php 
require ('koneksi.php');
$no = $_GET['No'];
mysqli_query($koneksi, "DELETE FROM staff WHERE No='$no'");
header('Location: ../FrontEnd/pegawai.php');
?>