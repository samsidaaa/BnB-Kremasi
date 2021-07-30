<?php
include 'koneksi.php';

$id = $_GET['id'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];

$image = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));


$sql = "update buku set judul = '$judul', tahun = '$tahun', pengarang = '$pengarang',
         harga = '$harga', gambar = '$image' where id_buku = '$id'";



$val = $db->query($sql);

if ($val) {
    echo "sukses";
    header("location: home.php");
}
