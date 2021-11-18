<?php 
    require ('koneksi.php');
    $no = $_GET['No'];
    mysqli_query($koneksi, "DELETE FROM dosen WHERE No='$no'");
    header('Location: ../FrontEnd/dosen.php');
?>