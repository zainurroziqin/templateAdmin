<?php
    require ('koneksi.php');
    $no = $_GET['No'];
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE No='$no'");
    header('Location: ../FrontEnd/mahasiswa.php');
    
?>