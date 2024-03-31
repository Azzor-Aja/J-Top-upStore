 <?php 
    require '../network/config.php';
    require '../network/function.php';

    if (isset ($_POST["submit"])) {

        if (registrasi($_POST) > 0 ) {
            echo "<script>
                    alert ('Data baru berhasil di tambahkan');
                 </script>";
                 header ("Location: login.php");
                 exit;
        }  else {
            echo mysqli_error($connect);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="icon" type="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/register.css">
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
                        <h3>Sign Up</h3>
                    <form action="" method="post">
                        <ul>
                            <li>
                                <label for="username"></label>
                                <input type="text" name="username" id="username" placeholder="Username...">
                                <div class="icon">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </li>
                            <li>
                                <label for="email"></label>
                                <input type="email" name="email" id="email" placeholder="Email...">
                                <div class="icon">
                                <i class="fa-solid fa-user"></i>
                                </div>
                            </li>
                            <li>
                                <label for="password"></label>
                                <input type="password" name="password" id="password" placeholder="password...">
                                <div class="icon">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                            </li>
                            <li>
                                <label for="password2"></label>
                                <input type="password" name="password2" id="password2" placeholder="Reenter password...">
                                <div class="icon">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                            </li>
                        </ul>
                        <button type="submit" name="submit">Sign Up</button>
                    </form>
                    <div class="h4">
                        <h4> Already have an account? <a href="login.php"> Login Here </a></h4>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>
</html>