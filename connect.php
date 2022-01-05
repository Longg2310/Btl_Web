<?php
    $conn = mysqli_connect('localhost','root','','thoitrangnam');
    if($conn){
        mysqli_query($conn, "SET NAMES 'UTF8'");
    }else{
        echo "Kết nối thất bại";
    }
?>