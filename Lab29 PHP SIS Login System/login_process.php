<?php
session_start();
require_once("connection.php");
if(isset($_POST['submit'])){
    $_SESSION['last_login_timestamp'] = time();
    if(empty($_POST['user']) || empty($_POST['pass'])){
        // echo "Please fill up the form.";
        header("location:index.php");
    }
    else{
        $u = $_POST['user'];
        $p= $_POST['pass'];
        $query = "SELECT * FROM `users` WHERE `uname` = '$u' AND `upass` ='$p'  ";
        $result = mysqli_query($conn,$query);
        if(mysqli_fetch_assoc($result)){
            $_SESSION['login_user'] = $u;
            header("location:welcome.php"); 
        }
        else{
            header("location:index.php?Invalid=Invalid Credentials.");
        }
    }
}
?>