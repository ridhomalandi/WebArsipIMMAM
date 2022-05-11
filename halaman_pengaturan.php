<?php
include 'koneksi.php';
$query  = mysqli_query ($koneksi, "SELECT *FROM user_level ORDER BY id ASC");


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
          <a class="navbar-brand" href="#">
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
<section class="container">
<h1 class="display-4 fw-bold text-primary">DATA USER</h1>
<a href="tambahdata.php" class="btn btn-primary btn-sm mb-1">+ Tambah Akun</a>
<form action="" method="get">
    <table class = 'table table-striped'>      
        <tr >
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["username"];?></td>
            <td><?php echo $data["password"];?></td>
            <td><?php echo $data["level"];?></td>
            <td>
            <a href="hapus.php?id=<?php echo $data['id']; ?>"class="btn btn-primary">Hapus</a> 
            <a href="ubahdata-akun.php?id=<?php echo $data['id']; ?>" class="btn btn-primary ">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table> </form>
        </section>
        
        <section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L34.3,202.7C68.6,213,137,235,206,234.7C274.3,235,343,213,411,213.3C480,213,549,235,617,240C685.7,245,754,235,823,224C891.4,213,960,203,1029,208C1097.1,213,1166,235,1234,224C1302.9,213,1371,171,1406,149.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      
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