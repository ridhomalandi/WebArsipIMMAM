<?php
include "koneksi.php";
$sql=mysqli_query ($koneksi, "SELECT * FROM surat_keluar WHERE id='$_GET[id]'");
$data=mysqli_fetch_array ($sql);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="latihan.css">
    
    <title>Pengaturan</title>
  </head>
  <body id='home'>

  <?php 
	session_start();
    // cek apakah yang mengakses halaman ini sudah login (harus login terlebih dahulu)
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style='background-color: dodgerblue;'> 
        <div class="container">
          <a class="navbar-brand" href="halaman_admin.php">
            <img src="img/imm.png" alt="imm" width="15" >
            E-ARSIP IMM ADAM MALIK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" aria-current="page" href="halaman_admin.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg> Home</a>             
            </div>
          </div>
        </div>
      </nav>
<!-- Pengaturan-->
<section class="container ">
<h1 class="display-4 fw-bold text-primary text-center">DATA SURAT KELUAR</h1>
<form class = 'me-mb-3 ' method="post">
<div class="mb-3">
    <label for="no_surat" class="form-label">Nomor Surat</label>
    <input type="text" class="form-control" name= "no_surat" id="no_surat" required value="<?php echo $data ['no_surat']; ?>">
  </div>
  <div class="mb-3">
    <label for="tanggal_keluar" class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="tanggal_keluar" id="tanggal_keluar" required value="<?php echo $data ['tanggal_keluar']; ?>">
  </div>
  <div class="mb-3">
    <label for="perihal_surat" class="form-label">Perihal</label>
    <input type="text" class="form-control" name= "perihal_surat" id="perihal_surat" required value="<?php echo $data ['perihal_surat']; ?>">
  </div>
  <div class="mb-3">
    <label for="tujuan_surat" class="form-label">Tujuan</label>
    <input type="text" class="form-control" name= "tujuan_surat" id="tujuan_surat" required value="<?php echo $data ['tujuan_surat']; ?>">
  </div>
  <div class="mb-3">
    <label for="keterangan_surat" class="form-label">Keterangan</label>
    <input type="text" class="form-control" name= "keterangan_surat" id="keterangan_surat" required value="<?php echo $data ['keterangan_surat']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="update">Submit</button>

</form>
        </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L34.3,202.7C68.6,213,137,235,206,234.7C274.3,235,343,213,411,213.3C480,213,549,235,617,240C685.7,245,754,235,823,224C891.4,213,960,203,1029,208C1097.1,213,1166,235,1234,224C1302.9,213,1371,171,1406,149.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      </section>
      <!--akhir pengaturan-->

      <!--Footer-->
      <footer class='bg-primary text-white pb-4 text-center'>
        <p>created by <a href='https://www.instagram.com/immadammalik/' class='text-white fw-bold' style="text-decoration:none ">IMM Adam Malik</a></p>
      </footer>
      <!--akhir Footer-->

   

 <!--Drop Menu kebawah-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

<?php
include 'koneksi.php';
    if (isset ($_POST["update"])){
    //ambil data tiap elemen dalam form
    //htmlspecialchars berguna agar web tidak bisa dihack dengan memasukkan script
    mysqli_query($koneksi, "UPDATE surat_keluar SET
    no_surat = '$_POST[no_surat]',
    tanggal_keluar = '$_POST[tanggal_keluar]',
    perihal_surat = '$_POST[perihal_surat]',
    tujuan_surat = '$_POST[tujuan_surat]',
    keterangan_surat = '$_POST[keterangan_surat]'
    WHERE id='$_GET[id]'");

 if (mysqli_affected_rows($koneksi)>0){
    echo"
    <script>
        alert('data berhasil ditambahkan');
        document.location.href='halaman_surat-keluar.php';
        </script>";
} else{
    echo" <script>
    alert('data gagal ditambahkan');
    document.location.href='halaman_surat-keluar.php';
    </script>";
}
} ?>
  </body>
</html>