<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="latihan.css">
    
    <title>Selamat Datang</title>
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
          <a class="navbar-brand" href="#home">
            <img src="img/imm.png" alt="imm" width="15" >
            E-ARSIP IMM ADAM MALIK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" aria-current="page" href="#home">Home</a>
              <a class="nav-link" href="#about">About</a>
              <a class="nav-link" href="#menuarsip">Menu Arsip</a>
              <a class = "nav-link btn btn-sm btn-outline-danger" href="logout.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>

      <!-- Jumbotron-->
      <section class="jumbotron text-center">
        <img src="img/logoimm.jpeg" alt="IMM" width="200" class='rounded-circle img-thumbnail'>
        <h1 class="display-4 fw-bold text-primary">E-ARSIP IMM ADAM MALIK</h1>
        <p class="lead mx-5">Sistem Informasi Arsip (E-Arsip) IMM Adam Malik adalah sistem yang digunakan untuk menyimpan data-data penting guna memudahkan dalam
          menjalankan administrasi di dalam Organisasi itu sendiri. Sistem ini sendiri dikelola oleh Sekretaris Umum dan Sekrtaris Bidang selaku penanggungjawab administrasi
        di dalam Bidang maupun Organisasi secara keseluruhan</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L34.3,149.3C68.6,171,137,213,206,229.3C274.3,245,343,235,411,218.7C480,203,549,181,617,149.3C685.7,117,754,75,823,90.7C891.4,107,960,181,1029,208C1097.1,235,1166,213,1234,202.7C1302.9,192,1371,192,1406,192L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </section>
      <!--Akhir Jumbotron-->

      <!--About-->
      <section id="about">
        <div class = 'container '>
          <div class='row text-center'>
            <div class="col">
              <h2>ABOUT</h2>
              
            </div>
          </div>
          <div class="row pt-3 text-center">
              <div class="col-md-12" >
                <figure class="figure" >
                  <img src="img/ridhom.png" class="figure-img" width='180' alt="sekum">
                  <figcaption class="figure-caption text-center" >Sekretaris Umum</figcaption>
                </figure>
                
              <p>Nama Lengkap : Ridho Malandi <br> Jurusan : Informatika (2018) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/uliv.png" class="figure-img" width='180' alt="sekbidor">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang Organisasi</figcaption>
              </figure>
              <p>Nama Lengkap : Ulivia Febrianti <br> Jurusan : Ilmu Komunikasi (2019) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/labib.png" class="figure-img" width='180' alt="sekbider">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang Kader</figcaption>
              </figure>
              <p>Nama Lengkap : Labib Majid <br> Jurusan : Informatika (2019) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/icha.png" class="figure-img" width='180' alt="sekbidhikmah">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang Hikmah</figcaption>
              </figure>
              <p>Nama Lengkap : Frischa Aura Salsabilla B <br> Jurusan : Informatika (2019) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/caca.png" class="figure-img" width='180' alt="sekbidrpk">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang RPK</figcaption>
              </figure>
              <p>Nama Lengkap : Salsabila Azzahra <br> Jurusan : Ilmu Komunikasi (2019) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/novi.png" class="figure-img" width='180' alt="sekbidspm">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang SPM</figcaption>
              </figure>
              <p>Nama Lengkap : Novi Arya Sukmaningrum <br> Jurusan : Informatika (2019) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/lucky.png" class="figure-img" width='180' alt="sekbidwati">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang IMMawati</figcaption>
              </figure>
              <p>Nama Lengkap : Lucky Anggari <br> Jurusan : Informatika (2019) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/fiya.png" class="figure-img" width='180' alt="sekbidtkk">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang Tabligh</figcaption>
              </figure>
              <p>Nama Lengkap : Fiya Is Karima <br> Jurusan : Informatika (2019) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="col-md-3">
              <figure class="figure">
                <img src="img/putri.png" class="figure-img" width='180' alt="sekbidmedia">
                <figcaption class="figure-caption text-center" >Sekretaris Bidang Medkom</figcaption>
              </figure>
              <p>Nama Lengkap : Putri Sekar Pratiwi <br> Jurusan : Ilmu Komunikasi (2018) <br> Universitas Muhammadiyah Surakarta</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#afeeee" fill-opacity="1" d="M0,224L80,197.3C160,171,320,117,480,117.3C640,117,800,171,960,176C1120,181,1280,139,1360,117.3L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
      </section>
      <!--akhir About-->
      <!-- Menu -->
      <section id='menuarsip'>
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h2 class='text-white fw-bold' ><a id='gradient'>MENU ARSIP</a></h2>
            </div>
          </div>
          <div class="row pt-5 text-center">
            <div class="col-md-4 mb-3">
              <div class="figure">
                <img src="img/suratmasuk.png" width='150' alt="menu">
                <div class="card-body">
                  <h5 class="card-title">Surat Masuk</h5>
                  <p class="card-text">Silahkan masukkan data surat masuk pada menu ini</p>
                  <a href="halaman_surat-masuk.php" class="btn btn-primary" >Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="figure" >
                <img src="img/suratkeluar.png" width='150' alt="menu">
                <div class="card-body">
                  <h5 class="card-title">Surat Keluar</h5>
                  <p class="card-text">Silahkan masukkan data surat keluar pada menu ini</p>
                  <a href="halaman_surat-keluar.php" class="btn btn-primary" >Selengkapnya</a>
                </div>
              </div>
            </div> 
            <div class="col-md-4 mb-3">
              <div class="figure" >
                <img src="img/buku.png" width='150' alt="menu">
                <div class="card-body">
                  <h5 class="card-title">Buku Organisasi</h5>
                  <p class="card-text">Silahkan masukkan data buku pada menu ini</p>
                  <a href="halaman_buku-organisasi.php" class="btn btn-primary" >Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L48,202.7C96,213,192,235,288,218.7C384,203,480,149,576,122.7C672,96,768,96,864,112C960,128,1056,160,1152,181.3C1248,203,1344,213,1392,218.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </section>
      <!--akhir menu-->

      <!--Footer-->
      <footer class='bg-primary text-white pb-4 text-center'>
        <p>created by <a href='https://www.instagram.com/immadammalik/' class='text-white fw-bold' style="text-decoration:none ">IMM Adam Malik</a></p>
      </footer>
      <!--akhir Footer-->



 <!--Drop Menu kebawah-->
      <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>