<?php 
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM buku_organisasi WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: halaman_buku-organisasi.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
?>