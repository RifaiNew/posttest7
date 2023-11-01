<?php 
session_start();
date_default_timezone_set("Asia/Makassar");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Toko Stiker</title>
</head>
<body id="body">

    <header id="header">
        <div class="container">
            <div class="navbar-left">
                <a href="index.php" class="logo-atas">
                    TOKO STIKER
                </a>
            </div>
            <div class="navbar-right">
                <input type="text" name="" id="" placeholder="Search...">
                <a href="#">Home</a>
                <a href="about.html">About Me</a>
                <a href="regis.php">Daftar</a>
                <a href="login.php">Login</a>
                <a href="logout.php">Logout</a>
                <button class="buttonNav" id="btn" onclick="darkmode()">DARK</button>
            </div>
        </div>
    </header>
    
    <div class="upper-content" id="upper-content">
        <div class="container">
            <div class="left-content">
                <div class="tanggal">
                    <?php 
                    echo date('l '). date('Y-m-d')."<br>";
                    echo date_default_timezone_get();
                    echo date(' H:i:sa');
                    ?>
                </div>
                <br><br>
                <h1>TOKO STIKER</h1>
                <h1>PESAN ONLINE</h1>
                <p>Easy online ordering, 4 day turnaround and free online proofs. Free shipping.</p>
                <div class="buttons">
                    <a href="" class="button button1">Shop Now</a>
                    <a href="" class="button button2">Get Samples</a>
                </div>

            </div>
            <div class="right-content">
                <img src="style/image/test.webp" alt="">
            </div>
        </div>
    </div>
    <div class="mid-content">
        <div class="container">
            <div class="card">
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="https://assets.stickermule.com/image/upload/c_lfill,fl_lossy,f_auto,q_auto:best,w_auto/re-store-shared/custom-stickers.png" alt="">
                    </div>
                    <p>Custom Sticker</p>
                </a>
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="https://assets.stickermule.com/image/upload/c_lfill,fl_lossy,f_auto,q_auto:best,w_auto/re-store-shared/custom-labels.png" alt="">
                    </div>
                    <p>Custom Labels</p>
                </a>
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="https://assets.stickermule.com/image/upload/c_lfill,fl_lossy,f_auto,q_auto:best,w_auto/re-store-shared/custom-packaging.png" alt="">
                    </div>
                    <p>Custom Packaging</p>
                </a>
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="https://assets.stickermule.com/image/upload/c_lfill,fl_lossy,f_auto,q_auto:best,w_auto/re-store-shared/custom-t-shirts.png" alt="">
                    </div>
                    <p>Custom t-shirt</p>
                </a>
            </div>
        </div>
    </div>

    <div class="bottom-content">
        <div class="container">
            <div class="judul">
                <p>Sticker</p>
            </div>
            <div class="card">
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="style/image/terraria1.webp" alt="">
                    </div>
                    <p>Sticker Terrariar</p>
                </a>
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="https://m.media-amazon.com/images/I/41mUioOIbBL._AC_UF894,1000_QL80_.jpg" alt="">
                    </div>
                    <p>Sticker Squidward</p>
                </a>
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLw5SP6K9tExrkUB0QrmQ5dcIjC7geh_tVlw&usqp=CAU" alt="">
                    </div>
                    <p>Sticker Spongebob</p>
                </a>
                <a href="" class="card-content">
                    <div class="logo-card">
                        <img src="https://down-id.img.susercontent.com/file/3b490fb991a39e62d952c071a814b0f6" alt="">
                    </div>
                    <p>Sticker Star Wars</p>
                </a>
            </div>
        </div>
    </div>

    <div class="mid-content">
        <div class="container">
            <div class="judul">
                <p>Tentang Toko Stiker</p>
            </div>
            <div class="main-content">
                <p id="paragraf" style="display: none; color: rgba(113, 50, 0, 0.8);">Website TOKO STIKER ini merupakan sebuah website untuk memesan stiker jadi secara online maupun stiker cetak</p>
                <button class="button" id="button" onclick="tambahElement()">TAMPILKAN</button>
            </div>
        </div>
    </div>

    <div class="bottom-content">
        <div class="container">
            <div class="judul">
                <p>Data Anda</p>
            </div>
            <div class="main-content">
                <?php 
                    if(isset($_SESSION["username"])  ){?>
                        <p id="paragraf" style="color: rgba(113, 50, 0, 0.8);">HALO, <?php echo "Nama Saya : ", $_SESSION["username"]?></p>
                <?php } ?>
            </div>
        </div>
    </div>


    <footer id="footer">
        <div class="container">
            <div class="footer-container">
                <b>
                    Syarat Penggunaan
                </b>
                <b>
                    Kebijakan Privasi
                </b>
                <b>
                    Hubungi Kami
                </b>
            </div>
            <p>
                @Copyright 2023 Rifai Ananda Ramadhana | All Right Reserved
            </p>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>
