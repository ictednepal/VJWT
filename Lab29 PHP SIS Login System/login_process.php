<?php
    if(isset($_POST['submit'])){
        $u = $_POST['user'];
        $p = $_POST['pass'];

        // if($u=="" || $p==""){
        if(empty($u)|| empty($p)){
            // echo "Please fill up the login form";
            header("location:index.php");
        }
        else{
            if($u=="ram" && $p=="pass@123"){
                header("location:welcome.php");
            }
        }
    }
?>