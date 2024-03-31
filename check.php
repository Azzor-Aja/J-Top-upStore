<?php 
    session_start();
    require 'network/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="icon" type="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/check.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Azzor Store</title>
</head>
<body>
    <nav>
        <div class="navbar">
        <header class="header">
            <div class="logo">
                <img src="img/logo.png">
                <a href="#">STORE</a>  
            </div>
            <div class="nav" >
                <ul class="tes" id="toggle-icons">
                    <div class="logo2">
                        <img src="img/logo.png">
                        <a href="#">STORE</a>  
                    </div>
                    <li class="hover"><a href="index.php"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                    <div class="line"></div>
                    <li class="hover"><a href="check.html"><i class="fa-solid fa-magnifying-glass"></i>Check Tagihan</a></li>
                    <div class="line"></div>
                    </li>
                    <?php if(!isset ($_SESSION["login"])) { ?>
                        <li class="hover">
                        <a href="php/login.php">
                            <i class="fa-solid fa-user"></i>Login
                        </a>
                        </li>
                        <?php 
                        }else { ?>
                        <li class="hover">
                        <a href="network/logout.php">
                            <i class="fa-solid fa-user"></i>Logout
                        </a>
                        </li>
                    <?php } ?>
                    <div class="line"></div>
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
    
    <!-- Cek Start -->
    <div class="check-all">
        <div class="check-in">
            <div class="check">
                <div class="invoice">
                    <i class="fa-solid fa-magnifying-glass"><h4>Check Invoice</h4></i>
                </div>
                <div class="line"></div>
                <div class="check-button">
                    <i class="fa-solid fa-magnifying-glass"></i><input type="text" placeholder="985xxxxxx">
                </div>
                <div class="check-data">
                    <div class="check-h4">
                        <h4>Check</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/check.js"></script>
</body>
</html>