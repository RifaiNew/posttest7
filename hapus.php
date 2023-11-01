<?php
require "data/koneksi.php";

$stiker = [];
$id = $_GET["id"];


$results = mysqli_query($conn, "select * from stiker where id_stiker = '$id'");
while ($row = mysqli_fetch_assoc($results)) {
    $stiker[] = $row;
}

foreach ($stiker as $stk) :
    $status=unlink('data/img/'.$stk['gambar']);    
    if($status){  
        mysqli_query($conn, "delete from stiker where id_stiker = '$id'");   
        echo "
        <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'data.php';
        </script>
        ";
    }else{  
        mysqli_query($conn, "delete from stiker where id_stiker = '$id'");
        echo "
        <script>
        document.location.href = 'data.php';
        </script>";
    }  
endforeach;
