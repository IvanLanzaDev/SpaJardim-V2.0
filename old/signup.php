<?php 
    
    $email = $_POST['email_user'];
    $senha = $_POST['senha_user'];

    include('connect.class.php');

    $query_user = mysqli_query($connect,"SELECT * FROM user WHERE email_user = '$email' AND senha_user = '$senha'");
    $count_user = mysqli_num_rows($query_user);

    if($count_user > 0){
        session_start();
        $_SESSION["email_user"] = $email;
        $_SESSION["senha_user"] = $senha;
        header("Location: admin.php");
    }else{
        header("Location: login.php");
    }
?>