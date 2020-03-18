<?php
    $connect = mysqli_connect("mysql.hostinger.com.br","u970163064_spa","spajardim");
        if($connect){
            mysqli_select_db($connect,"u970163064_spa");
        }else{
            echo "Erro Ao conectar com o banco";
        }
?>