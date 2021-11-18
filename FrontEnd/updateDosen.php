<?php
include ('../BackEnd/koneksi.php');

$no = $_GET['No'];

$querySelect = "SELECT * FROM dosen WHERE No='$no'";
$result = mysqli_query($koneksi, $querySelect);

    while($row = mysqli_fetch_array($result)) {
        $no = $row['No'];
        $nip = $row['NIP'];
        $nidn = $row['NIDN'];
        $nama= $row['Nama'];
        $jabatan = $row['Jabatan'];
    }

if(isset($_POST['submit'])) {
    $no = $_POST['no'];
    $nip   = $_POST['nip'];
    $nidn  = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];

    $query = "UPDATE dosen SET NIP = '$nip', NIDN = '$nidn', Nama = '$nama', Jabatan = '$jabatan' WHERE No = '$no'";
    $result = mysqli_query($koneksi, $query);
    header("Location: dosen.php");
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    
    <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">

    <title>Praktikum Luring</title>
  </head>
  <body>
    <!-- Navbar-->
    <!-- Merubah bg-light menjadi bg-warning fixed-top-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>KAMPUS</b></a>
  <!-- Hapus Button NAV s.d penutup UL dan tambahkan ml-auto pada Class - Form-->
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <div class="icon ml-4">
        <h5>
            <i class="fas fa-envelope mr-3" data-toogle="tooltip" title="Surat Masuk"></i>
            <i class="fas fa-bell mr-3" data-toogle="tooltip" title="Notifikasi"></i>
            <i class="fas fa-sign-out-alt mr-3" data-toogle="tooltip" title="Sign Out"></i>
        </h5>
    </div>

</nav>
<!-- Akhir Navbar-->

<!-- Membuat Content-->
<div class="row no-gutters mt-5">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="mahasiswa.php"><i class="fas fa-user-graduate mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Dosen</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-user-edit mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="jadwal.php"><i class="fas fa-calendar-alt mr-2"></i>Jadwal Praktikum</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="nilai.php"><i class="fas fa-paper-plane mr-2"></i>Nilai Mahasiswa</a><hr class="bg-secondary">
      </li>
    </ul>
  </div>
  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-tachometer mr-2"></i>Update Dosen</h3><hr>
    <div class="row text-white">
        <div class="card col-md-7 mx-auto p-5">
        
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Dosen</h1>
            </div>
            <form  class= "user" method="POST" action="updateDosen.php">

              <input type="hidden" name="no" value="<?php echo $no ?>">

                <div class="form-group">
                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan NIP..." name="nip" value="<?php echo $nip?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan NIDN..." name="nidn" value="<?php echo $nidn?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"  placeholder="Masukkan Nama..." name="nama" value="<?php echo $nama?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Masukkan Jabatan..." name="jabatan" value="<?php echo $jabatan?>" required autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                    Update Dosen
                </button>
            </form>
        </div>
    </div>
  </div>
</div>
<!-- Akhir Content-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/JavaScript" src="admin.js"></script>
    </body>
</html>