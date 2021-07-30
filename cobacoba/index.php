<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets\bootstrap-4.4.1-dist\css\bootstrap.min.css">

    <?php
        if(isset($_GET['err']) && $_GET['err'] == 'authfailed'){
            echo "<script> alert('Username & password salah'); </script>";
        }
    ?>
</head>
<body>
    <div class="container">
        <div class="card col-md-10 mt-5">
            <center>
                <h3>Login Form</h3>
            </center>
            <br>
            <form action="cek_login.php" method="post">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Login</button>
            </form>
        </div>
    </div>
</body>
</html>