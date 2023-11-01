<?php
require "data/koneksi.php";

$date = date("Y-m-d H-i-sa");

if (isset($_POST["tambah"])) {
    $nama = $_POST["nama_stiker"];
    $jenis = $_POST["jenis_stiker"];
    $deskripsi = $_POST["deskripsi_stiker"];
    $harga = $_POST["harga_stiker"];
    //Upload
    $gambar = $_FILES["gambar"]['name'];
    $explode = explode('.', $gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date $nama.$ekstensi";
    $temp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($temp, 'data/img/'.$gambar_baru)){
        $result = mysqli_query($conn, "insert into stiker 
        (id_stiker, nama_stiker, jenis_stiker, deskripsi_stiker, harga_stiker, gambar) 
        values ('', '$nama', '$jenis', '$deskripsi', '$harga', '$gambar_baru')");

        if ($result) {
            echo "
                    <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'data.php';
                    </script>
                ";
        } else {
            echo "
                <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'tambah.php';
                </script>
            ";
        }   
    }
    else{
        echo "Gagal Menghapus";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style/styleform.css">
</head>

<body>
    <div class="kotak_login">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="txt_field">
                <input type="text" name="nama_stiker" id="" placeholder="Nama Stiker" required> <br>
            </div>
    
            <div class="txt_field">
                <input type="text" name="deskripsi_stiker" id="" placeholder="Deskripsi Stiker" required> <br>
            </div>
            
            <div class="txt_field">
                <input type="number" name="harga_stiker" placeholder="Harga Stiker" required> <br>
            </div>

            <label for="">Jenis Stiker</label> <br>
            <select class="select" name="jenis_stiker" id="" required>
                <option value="penyanyi">penyanyi</option>
                <option value="kartun">kartun</option>
                <option value="anime">anime</option>
                <option value="logo">logo</option>
                <option value="doodle">doodle</option>
            </select>
            
            <div class="gambar"> 
                <input type="file" name="gambar" id="" required>
            </div>

            <div class="button">
                <input type="submit" name="tambah"></input>
                <a href="data.php">Kembali</a>
            </div>
        </form>
    </div>
</body>

</html>