<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    $sql = "delete from buku where id_buku = '$id'";
    $res = $db -> query($sql);

    if($res){
        header('location: home.php');
    }
?>