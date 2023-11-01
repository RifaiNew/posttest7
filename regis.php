<?php
    require 'data/koneksi.php';

    if(isset($_POST['regis'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        if(mysqli_fetch_assoc($result) || $username == "admin"){
            $error = true;
        } 
        else {
            // 92
            if($password === $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);

                $result = mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
                if(mysqli_affected_rows($conn) > 0){
                    echo "
                        <script>
                            alert('Registrasi Berhasil!');
                            document.location.href = 'login.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Registrasi Gagal!');
                            document.location.href = 'regis.php';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Konfirmasi Password tidak sesuai!');
                        document.location.href = 'regis.php';
                    </script>
                ";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/styleLogin.css">
</head>
<body>
    <div class="kotak_login">
        <h1>Registrasi</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="txt_field">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="txt_field">
                <input type="password" name="cpassword" placeholder="Konfirmasi Password" required>
            </div>
            <div class="button2">
                <input type="submit" value="Register" name="regis">
                <div class="regis_link">
                    Sudah Punya Akun? <a href="login.php">Login</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>