<?php
    $students = array(
        "Ram" => array(
            "address" => "Kathmandu",
            "email" => "cuteram@gmail.com",
            "marks" => 89
        ),
        "Sita" => array(
            "address" => "Bhaktapur",
            "email" => "handsomeram@gmail.com",
            "marks" => 47
        ),
        "Laxman" => array(
            "address" => "Pokhara",
            "email" => "lax@gmail.com",
            "marks" => 67
        ),
        "Hari" => array(
            "address" => "Chitwan",
            "email" => "yourhari@gmail.com",
            "marks" => 45
        )
    );

    echo "Email id of ram = ".$students["Ram"]["email"];

?>