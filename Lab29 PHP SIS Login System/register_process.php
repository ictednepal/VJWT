<?php
require_once("connection.php");
if(isset($_POST['submit'])){
    if(empty($_POST['user']) || empty($_POST['pass'])){
        header("location:index.php");
    }
    else{
        $u = $_POST['user'];
        $p= $_POST['pass'];

        $query = "INSERT INTO `users`(`uname`, `upass`) VALUES ('$u','$p'); ";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<h1>A new user created successfully.</h1>";
            echo "<script>setTimeout(\"location.href = 'index.php'; \",2000); </script>";
        }
        else{
            header("location:index.php");
        }
    }
}
?>