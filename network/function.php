<?php
    require 'config.php';

function query($query){
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
 
function registrasi ($data) {
    global $connect;

    $username = strtolower (stripslashes ($data["username"]));
    $email = strtolower ($data["email"]);
    $password = mysqli_real_escape_string ($connect, $data["password"]);
    $password2 = mysqli_real_escape_string ($connect, $data ["password2"]);

    $result = mysqli_query ($connect , "SELECT username from user WHERE username = '$username'");
   
    if (mysqli_fetch_assoc ($result)) {
        echo "<script>
                alert('Username telah terdaftar');
            </script>";

            return false;
    }

    $result2 = mysqli_query($connect, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc ($result2)) {
        echo "<script>
            alert ('Email telah terdaftar');
            </script>";

            return false;
    }
    if( $password !== $password2) {
        echo "<script>
                alert ('password tidak sesuai!');
              </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT); 
    $kode = hash ('sha256', $username);
    mysqli_query($connect, "INSERT INTO user (`username`, `password`, `email`, `kode`) VALUES ('$username', '$password', '$email', '$kode')");
    return mysqli_affected_rows($connect);
}

// function create($data){

//     global $connect;

//     $user = $_COOKIE['itu'];
//     $user = mysqli_query($connect, "SELECT * FROM user WHERE kode = '$user'");
//     $user = mysqli_fetch_assoc($user);
    
//     $imageBg = $data["imageBg"];
//     $image = $data["image"];
//     $judul = $data["judul"];

//     $result1 = mysqli_query($connect, "SELECT judul FROM jenis WHERE judul='$judul'");

//     if(mysqli_fetch_assoc($result1)){
//         echo "<script>alert('Judul sudah terdaftar')</script>";

//         return false;
//     }

//     mysqli_query($connect, "INSERT INTO `jenis` (`imageBg`, `image`, `judul`) VALUES ('$imageBg','$image','$judul','1')");

//     return mysqli_affected_rows($connect);
    
// }

?>