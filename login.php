<?php
session_start();
require 'data/koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header('Location: index.php');
            exit;
        }
    }
    
    else if($username == "admin" && $password == "admin"){
        $_SESSION["login"] = true;
        $_SESSION["username"] = $username;
        header("Location: data.php");
        exit;
    }
    $error = true;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/stylelogin.css">
</head>
<body>
    <div class="kotak_login">
        <h1>Login</h1>
        <form action="" method="POST">
            <div class="txt_field">
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="txt_field">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="button">
                <input type="submit" value="Login" name="login">
                <div class="regis_link">
                    Tidak Punya Akun? <a href="regis.php">Register</a><br>
                    <a href="index.php">Halaman Utama</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>