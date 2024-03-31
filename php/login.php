<?php
    session_start();
    require '../network/config.php';
    

    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($connect, "SELECT * FROM `user` WHERE email='$email'");
        if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            
            if(isset($_POST["checkbox"])){
                setcookie('ini', $row['id'] , time() + 60 * 60 * 24 * 7);
                setcookie('itu', hash('sha256', $row['username']) , time() + 60 * 60 * 24 * 7);
                header("Location: ../index.php");
                $_SESSION["login"] = true;

            }else{
                setcookie('ini', $row['id'] , time() + 30);
                setcookie('itu', hash('sha256', $row['username']) , time() + 10);
                header("Location: ../index.php");
                $_SESSION["login"] = true;
            }
            
        }else{
            echo "<script>alert('Password salah')</script>";
        }

    }else{
        echo "<script>alert('Email tidak ada')</script>";
    }
    }


    // if(isset($_POST["submit"])){
    //     $_SESSION["login"] = true;
    //     if(isset ($_SESSION["login"])){
    //                 header("Location: ../index.php");
    //     }
    // }

    // if(isset($_COOKIE['ini']) && isset($_COOKIE['itu'])){
    //     $ini = $_COOKIE['ini'];
    //     $itu = $_COOKIE['itu'];
    
    //     $result = mysqli_query($connect, "SELECT username FROM user WHERE id=$ini");
    //     $row = mysqli_fetch_assoc($result);
    
    //     if($itu === hash('sha256', $row['username'])){
    //         $_SESSION["login"] = true;
    //     }
    // }
    // if (isset ($_SESSION["login"])) {
    //             header("Location: ../index.php");
    //             exit;
    //         }

    
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="icon" type="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Azzor Store</title>
</head>
<body>
        <div class="container-all">
            <div class="container-in">
                <div class="containerF">
                <div class="img">
                    <img src="../img/gameBg.jpg">
                </div>
                <div class="form">
                    <img src="../img/shadow.png">
                    <div class="regis">
                        <h3>Login</h3>
                    <form action="" method="post">
                        <ul>
                        
                            <li>
                                <label for="email"></label>
                                <input type="email" name="email" id="email" placeholder="Email..." required>
                                <div class="icon">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </li>
                            <li>
                                <label for="password"></label>
                                <input type="password" name="password" id="password" placeholder="password..." required>
                                <div class="icon">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                            </li>
                            <li style="margin-left: 45px;">
                                <label style="font-size: 15px;" for="checkbox">Remember Me</label>
                                <input style="width: 50px;height: 20px;" type="checkbox" name="checkbox" id="checkbox">
                            </li>
                        </ul>
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <div class="h4">
                        <h4> Not a Member? <a href="register.php"> Sign Up now </a></h4>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>
</html>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>