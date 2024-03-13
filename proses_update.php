<?php
require_once("database.php");
$id = $_POST['id'];
$kode_brg = $_POST['kode_brg'];
$nama_brg = $_POST['nama_brg'];
$kategori =  $_POST['kategori'];
$merk = $_POST['merk'];
$jumlah = $_POST['jumlah'];
$sql2 = update("UPDATE barang SET kode_brg='$kode_brg', nama_brg='$nama_brg', kategori='$kategori'
, merk='$merk', jumlah='$jumlah' WHERE id = '$id' ");
if ($sql2) {
    header("location:admin.php");
    exit();

} else {
    header("location:../home.php");
}

?>