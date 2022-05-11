<?php 
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tabel_inventaris WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: halaman_inventaris.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
?>