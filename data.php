<?php
require "data/koneksi.php";

$result = mysqli_query($conn, "select * from stiker");

$stiker = [];

while ($row = mysqli_fetch_assoc($result)) {
    $stiker[] = $row;
}
date_default_timezone_set("Asia/Makassar");

session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styling.css">
    <title>Pertemuan 5 - CRUD</title>
</head>

<body>
    <div class="table">
        <h1>Data Stiker</h1>
        <?php 
        echo date('l '). date('Y-m-d')."<br>";
        echo date_default_timezone_get();
        echo date(' H:i:sa');
        ?>
        <div class="tambah">
            <a href="tambah.php">Tambah</a>
            <a href="index.php">Halaman Utama</a>
            <a href="logout.php">Logout</a>
        </div>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi Stiker</th>
                <th>Jenis Stiker</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php 
            $i = 1;
            if (!empty($stiker)) {
                foreach ($stiker as $stk) : ?>
                    <tr>
                        <td> <?= $i ?> </td>
                        <td> <?php echo $stk["nama_stiker"] ?> </td>
                        <td> <?= $stk["deskripsi_stiker"] ?> </td>
                        <td> <?= $stk["jenis_stiker"] ?> </td>
                        <td> <?= $stk["harga_stiker"] ?> </td>
                        <td class="gambar"> <img src="data/img/<?= $stk['gambar'] ?>" alt="ini gambar"> </td>
                        <td><a href="edit.php?id=<?=$stk["id_stiker"];?>">Edit</a></td>
                        <td><a href="hapus.php?id=<?=$stk["id_stiker"];?>">hapus</a>
                        </td>
                    </tr>
                <?php $i++;
                endforeach; 
            } 
            else { ?>
                <tr>
                    <td colspan="7" style="padding: 10px;">Data Masih Kosong</td>
                </tr>
            <?php }
            ?>
        </table>
    </div>
    
</body>

</html>