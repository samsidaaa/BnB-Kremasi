<?php
    include 'koneksi.php';

    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $pengarang = $_POST['pengarang'];
    $harga = $_POST['harga'];

    $image = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));

    $sql = "insert into buku (judul, tahun, pengarang, harga, gambar) values ('$judul','$tahun','$pengarang','$harga','$image')";

    $res = $db -> query($sql);

    if($res){
        echo "data berhasil ditambah";
        header("location:home.php");
    }
?>