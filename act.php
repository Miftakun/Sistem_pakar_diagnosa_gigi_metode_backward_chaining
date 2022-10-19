<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    $conn = mysqli_connect("localhost", "root", "", "db_pakar");

    $query ="SELECT * FROM `user` WHERE email='$email' && password='$password'";
    $login = mysqli_query($conn, $query);
    $islogin = mysqli_num_rows($login);
    
    if(isset($_POST['login'])) {
        if ($islogin == 1) {
            $_SESSION[`user`] = $id;
            header ("Location: index.php");
            
        }else {
            $msg = "<p class='alert alert-danger' role='alert'> Password Anda Salah</p>";
            header ("Location: index.php?msg=$msg");
        }  
    }else {
        echo "tekan tombol login";
    }
?>