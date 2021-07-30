<?php

    //memanggil file koneksi.php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "select * from auth where username = '$username' and 
    password = '$password'";

    $val = $db -> query($sql);
    
    if ($val -> num_rows == 1){
      

        echo "login berhasil";
        header("location: home.php");
    }else{
        header("location: index.php?err=authfailed");
        echo "login gagal";
    }

?>