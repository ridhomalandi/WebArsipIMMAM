<?php

$koneksi = mysqli_connect("localhost","root","","user_ta");

$id=$_GET['id'];
$surat = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM surat_masuk WHERE id=$id"));

if (isset ($_POST["submit"])){

  $direktori = "filesurat_masuk/";
  $file = $_FILES ['file']['name'];
  move_uploaded_file($_FILES['file']['tmp_name'], $direktori.$file);

    //ambil data tiap elemen dalam form
    //htmlspecialchars berguna agar web tidak bisa dihack dengan memasukkan script
    $tanggal_masuk = htmlspecialchars ( $_POST["tanggal_masuk"]);
    $no_surat = htmlspecialchars ($_POST["no_surat"]);
    $pengirim_surat = htmlspecialchars ($_POST["pengirim_surat"]);
    $perihal_surat =htmlspecialchars ( $_POST["perihal_surat"]);
    $keterangan_surat =htmlspecialchars ( $_POST["keterangan_surat"]);
    

    $query  = "UPDATE surat_masuk SET 
                tanggal_masuk='$tanggal_masuk',
                no_surat='$no_surat',
                pengirim_surat='$pengirim_surat',
                perihal_surat='$perihal_surat',
                keterangan_surat='$keterangan_surat',
                file = '$file'
                WHERE id = $id";
    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi)>0){
        echo"
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='halaman_surat-masuk.php';
            </script>";
    } else{
        echo" <script>
        alert('data gagal ditambahkan (No surat kemungkinan sudah ada)');
        document.location.href='halaman_surat-masuk.php';
        </script>";
    }
}
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
    
    <title>Surat Masuk</title>
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
            <input
                action="action"
                onclick="window.history.go(-1); return false;"
                type="submit"
                value="Kembali"
                class="btn btn-light"
            />             
            </div>
          </div>
        </div>
      </nav>
<!-- Pengaturan-->
<section class="container ">
<h1 class="display-4 fw-bold text-primary text-center">DATA SURAT MASUK</h1>
<form class = 'me-mb-3 ' method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
    <input type="date" class="form-control" name= "tanggal_masuk" id="tanggal_masuk" required value="<?= $surat['tanggal_masuk']?>">
  </div>
  <div class="mb-3">
    <label for="no_surat" class="form-label">Nomor Surat</label>
    <input type="text" class="form-control" name="no_surat" id="no_surat" required value="<?= $surat['no_surat']?>">
  </div>
  <div class="mb-3">
    <label for="pengirim_surat" class="form-label">Pengirim</label>
    <input type="text" class="form-control" name= "pengirim_surat" id="pengirim_surat" required value="<?= $surat['pengirim_surat']?>">
  </div>
  <div class="mb-3">
    <label for="perihal_surat" class="form-label">Perihal</label>
    <input type="text" class="form-control" name= "perihal_surat" id="perihal_surat" required value="<?= $surat['perihal_surat']?>">
  </div>
  <div class="mb-3">
    <label for="keterangan_surat" class="form-label">Keterangan</label>
    <input type="text" class="form-control" name= "keterangan_surat" id="keterangan_surat" required value="<?= $surat['keterangan_surat']?>">
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">File Surat</label>
    <input type="file" class="form-control" name= "file" id="file" required value="file/<?= $surat['file']?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

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
    
  </body>
</html>