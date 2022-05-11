<?php 
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM surat_keluar WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: halaman_surat-keluar.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}
?>