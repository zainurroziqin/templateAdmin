<?php 
include 'koneksi.php';
// include '../FrontEnd/tambahMahasiswa.php';

if(isset($_POST['submit'])) {
    $nim   = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $prodi = $_POST['prodi'];


    $query = "INSERT INTO mahasiswa ('','nim', 'nama', 'alamat', 'jenisKelamin', 'prodi') VALUES('','$nim, '$nama', '$alamat', '$jenisKelamin', '$prodi')";
    $result = mysqli_query($koneksi, $query);
    header('Location: ../FrontEnd/tambahMahasiswa.php');
}

?>