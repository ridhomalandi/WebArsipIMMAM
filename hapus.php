<?php 
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM user_level WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: halaman_pengaturan.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
?>