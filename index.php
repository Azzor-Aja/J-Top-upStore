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
    <link rel="stylesheet" href="css/style.css">
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
                    <li class="hover">
                        <a href="index.php">
                            <i class="fa-solid fa-house-chimney"></i>Home
                        </a>
                    </li>
                    <li class="hover">
                        <a href= "check.php"> 
                            <i class="fa-solid fa-magnifying-glass"></i>Check Tagihan
                        </a>
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
                </ul>
            <div class="icons" onclick="openNav()">
                <div class="bar1 trigger"></div>
                <div class="bar2 trigger"></div>
                <div class="bar3 trigger"></div>
            </div>
            </div>
        </header>
        </div>
        <div class="carousel">
            <div class="carousel-inner">
              <div style=" background-image: url(img/corousell.png); background-size: contain; background-position: center;" class="carousel-item"></div>
              <div style=" background-image: url(img/corousell3.png); background-size: contain; background-position: center;" class="carousel-item"></div>
              <div style=" background-image: url(img/corousell2.png); background-size: contain; background-position: center;" class="carousel-item"></div>
              <div style=" background-image: url(img/corousell3.png); background-size: contain; background-position: center;" class="carousel-item"></div>
            </div>
        </div>
    </nav>

    <!-- Search Start -->
    
    <div class="search"> 
        <div class="nav-search">
            <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a> 
        </div>
        <div class="search-in" id="search-in"> 
            <ul id="myMenu">
                <li><a href="html/valorant.html"><img src="img_payment/valorant.webp"><h5>Valorant</h5></a></li>
                <li><a href="html/mole.html"><img src="img_payment/mole.webp"><h5>Mobile Legend</h5></a></li>
                <li><a href="html/pubg.html"><img src="img_payment/pubg.webp"><h5>PUBG Mobile</h5></a></li>
                <li><a href="html/freefire.html"><img src="img_payment/freefire.jpeg"><h5>FreeFire</h5></a></li>
            </ul>
        </div>
    </div>

    <!-- Search End -->
    <div class="h3">
        <div class="h3-in">
            <h3><i class="fa-solid fa-scroll"></i>Sedang Populer</h3>
        </div>
    </div>

    <!-- List Menu Start -->
    <div class="container">
        <div class="grid-container">
            <div class="grid-item1">
                <a href="php/mole.php?id=1">
                    <img src="img_payment/mole.webp">
                    <div class="h5">
                        <h5>Mobile Legend</h5>
                        <h6>Moonton</h6>
                    </div>
                </a>
            </div>
            <div class="grid-item5">
                <a href="php/freefire.php?id=2">
                    <img src="img_payment/freefire.jpeg">
                    <div class="h5">
                        <h5>Free Fire</h5>
                        <h6>Garena</h6>
                    </div>
                </a>
            </div>
            <div class="grid-item2">
                <a href="php/pubg.php?id=3">
                    <img src="img_payment/pubg.webp">
                    <div class="h5">
                        <h5>PUBG Mobile</h5>
                        <h6>Tencent</h6>
                    </div>
                </a>
            </div>
            <div class="grid-item3">
                <a href="php/genshin.php?id=4">
                    <img src="img_payment/genshin-beranda.webp">
                    <div class="h5">
                        <h5>Genshin Impact</h5>
                        <h6>Mihoyo</h6>
                    </div>
                </a>
            </div>  
            <div class="grid-item4">
                <a href="php/valorant.php?id=5">
                    <img src="img_payment/valorant.webp">
                    <div class="h5">
                        <h5>Valorant</h5>
                        <h6>Riot</h6>
                    </div>
                </a>
            </div>
            <div class="grid-item6">
                <a href="php/cod.php?id=6">
                    <img src="img_payment/cod.webp">
                    <div class="h5">
                        <h5>Call Of Duty</h5>
                        <h6>Garena</h6>
                    </div>
                </a>
            </div>  
            <div class="grid-item7">
                <a href="php/coc.php?id=7">
                    <img src="img_payment/coc.webp">
                    <div class="h5">
                        <h5>Clash Of Clan</h5>
                        <h6>Supercell</h6>
                    </div>
                </a>
            </div>
            <div class="grid-item">
                <a href="php/impact3.php?id=8">
                    <img src="img_payment/hi3.webp">
                    <div class="h5">
                        <h5>Honkai Impact 3</h5>
                        <h6>Mihoyo</h6>
                    </div>
                </a>
            </div>
            <div class="grid-item8">
                <a href="php/star_rail.php?id=9">
                    <img src="img_payment/star_rail.webp">
                    <div class="h5">
                        <h5>Honkai: Star Rail</h5>
                        <h6>Mihoyo</h6>
                    </div>
                </a>
            </div>  
        </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>   