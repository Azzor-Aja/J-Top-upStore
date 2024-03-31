<?php
    require 'config.php';
    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        switch ($id){
            case $id:
                $sql = "SELECT * FROM `jenis` WHERE `id` = '$id'";
                $show = mysqli_query($connect, $sql);
                $result = mysqli_fetch_assoc($show);
                $populer = $result ['populer'];
                $populer = $populer + 1;
                $tes = "UPDATE `jenis` SET `populer`='$populer' WHERE id = $id"; 
                $insertpop = mysqli_query($connect, $tes);
                break;
            default:
            header("location:../index.php");
            exit;
        }
    } else {
        header("location:../index.php");
        exit;
    }
?>