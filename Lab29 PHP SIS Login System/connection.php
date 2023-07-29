<?php
    $conn = mysqli_connect("localhost","root","","db_sls");
    if(!$conn){
        die("Cannnot connect database ".mysqli_errno($conn));
    }
?>