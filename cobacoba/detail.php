<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>

    <?php
    include "koneksi.php";

    $id = (isset($_GET['id'])) ? $_GET['id'] : "";

    $sql = "select * from buku where id_buku ='$id'";

    $val = $db->query($sql);

    $res = $val->fetch_assoc();
    ?>
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets\bootstrap-4.4.1-dist\css\bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card col-md-10 mt-5">
            <center><h3>Edit Data Buku</h3></center>
            
            <form action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Judul Buku</label>
                    <input type="text" name="judul" value="<?php echo $res['judul']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="number" name="tahun" value="<?php echo $res['tahun']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Pengarang</label>
                    <input type="text" name="pengarang" value="<?php echo $res['pengarang']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" name="harga" value="<?php echo $res['harga']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="gambar" value="" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Update</button>
            </form>
        </div>
    </div>
</body>

</html>