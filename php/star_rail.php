<?php 
    session_start();
    require '../network/config.php';
    require '../network/populer.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="icon" type="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Azzor Store</title>
</head>
<body>

    <nav>
        <div class="navbar">
        <header class="header">
            <div class="logo">
                <img src="../img/logo.png">
                <a href="#">STORE</a>  
            </div>
            <div class="nav" >
                <ul class="tes" id="toggle-icons">
                    <div class="logo2">
                            <img src="img/logo.png">
                            <a href="#">STORE</a>  
                    </div>
                    <li class="hover">
                        <a href="../index.php">
                            <i class="fa-solid fa-house-chimney"></i>Home
                        </a>
                    </li>
                    <li class="hover">
                        <a href= "../check.php"> 
                            <i class="fa-solid fa-magnifying-glass"></i>Check Tagihan
                        </a>
                    </li>
                    <?php if(!isset ($_SESSION["login"])) { ?>
                        <li class="hover">
                        <a href="login.php">
                            <i class="fa-solid fa-user"></i>Login
                        </a>
                        </li>
                        <?php 
                        }else { ?>
                        <li class="hover">
                        <a href="../network/logout.php">
                            <i class="fa-solid fa-user"></i>Logout
                        </a>
                        </li>
                    <?php } ?>
                </ul>
            <div class="icons" onclick="openNav()">
                <div class="bar1 trigger"></div>
                <div class="bar2 trigger"></div>
                <div class="bar3 trigger"></div>
            </div>
            </div>
        </header>
        </div>
    </nav>
    
    <div class="layout">
        <div class="main-all">
            <div class="main">
                <div class="menu">
                    <img src=<?= "../img_payment/" . $result ['imageBg'] ?> >
                    <div class="img">
                        <img src=<?= "../img_payment/" . $result ['image'] ?> >
                    </div>
                    <div class="text">
                        <h2><?= $result ['judul'] ?></h2>
                        <div class="line"></div>
                        <h4>Open 24 jam</h4>
                        <p>Top Up Diamond game Resmi di jamin 100% Legal , Murah , Aman & Terpercaya di <a href="../index.php"> AZZORSTORE</a>.</p>
                        <p>Cara Top Up Shard di Honkai Star Rail :</p>
                        <ol>
                            <li>Masukan ID</li>
                            <li>Pilih Nominal Shard</li>
                            <li>Pilih Metode Pembayaran</li>
                            <li>Klik Order Now & Lakukan Pembayaran</li>
                            <li>Shard Akan Masuk Otomatis ke Akun Anda</li>
                        </ol>
                    </div>
                </div>
                <div class="top-up">
                    <div class="id">
                        <div class="h3">
                            <h3>Lengkapi Data</h3>
                        </div>
                        <div class="button">
                            <i class="fa-solid fa-magnifying-glass"></i><input type="text" placeholder="Masukan User ID...">
                        </div>
                    </div>
                    <div class="item">
                        <div class="h3">
                            <h3>Pilih Nominal Diamond</h3>
                        </div>
                        <div class="word">
                            <h5>Top Up</h5>
                            <div class="line"></div>
                        </div>
                        <div class="container">
                            <div class="grid-container">
                                <?php
                                $data = "SELECT * FROM `kategori` WHERE `kategori` = 'rail'";
                                $tampilkan = mysqli_query($connect, $data);
                                while ($data = mysqli_fetch_assoc($tampilkan)): 
                                ?>
                                <div class="grid-item">
                                    <h5><?= $data ['item'] ?></h5>
                                    <h6>RP <?= $data ['price'] ?></h6>
                                </div>
                                <?php endwhile ?>
                            </div>
                        </div>
                    </div>
                    <div class="e-commerce">
                        <div class="h3">
                            <h3>Pilih Pembayaran</h3>
                        </div>
                        <div class="qris-all">
                            <div class="qris-in">
                                <div class="qris-logo">
                                    <div class="icon">
                                        <i class="fa-solid fa-wallet"></i><h4>QRIS</h4>
                                    </div>
                                    <div class="qris">  
                                        <img src="../img_payment/payment.webp">
                                    </div>
                                </div>
                            </div>
                            <div class="qris-in">
                                <div class="qris-logo">
                                    <div class="icon">
                                        <i class="fa-solid fa-wallet"></i><h4>E-Wallet</h4>
                                    </div>
                                    <div class="qris-wallet">
                                        <div class="img">  
                                            <img src="../img_payment/dana.webp">
                                            <img src="../img_payment/shope.webp">
                                            <img src="../img_payment/ovo.webp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="e-commerce">
                        <div class="h3">
                            <h3>Pembayaran</h3>
                        </div>
                        <div class="pay-all">
                            <div class="pay-in">
                                <div class="pay-bttn">
                                    <p>Bayar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    
    <script src="../js/payment.js"></script>
</body>
</html>