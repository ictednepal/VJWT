<?php
    // $students = array(
    //     "Ram" => array(
    //         "address" => "Kathmandu",
    //         "email" => "cuteram@gmail.com",
    //         "marks" => 89
    //     ),
    //     "Sita" => array(
    //         "address" => "Bhaktapur",
    //         "email" => "handsomeram@gmail.com",
    //         "marks" => 47
    //     ),
    //     "Laxman" => array(
    //         "address" => "Pokhara",
    //         "email" => "lax@gmail.com",
    //         "marks" => 67
    //     ),
    //     "Hari" => array(
    //         "address" => "Chitwan",
    //         "email" => "yourhari@gmail.com",
    //         "marks" => 45
    //     )
    // );

    // echo "Email id of ram = ".$students["Ram"]["email"];

    $student = array(
        array(
            "address" => "Kathmandu",
            "marks" => 58,
            "email" => "ram@gmail.com"
        ),
        array(
            "address" => "Bhaktapur",
            "marks" => 78,
            "email" => "sita@gmail.com"
        ),
        array(
            "address" => "Lalitpur",
            "marks" => 99,
            "email" => "hari@gmail.com"
        ),
    );

    // echo $student[2]["address"];
    $keys = array_keys($student);
    for ($i=0; $i < count($student) ; $i++) { 
        echo "<br/>";
        foreach ($student[$keys[$i]] as $key => $value) {
            echo $value . "<br/>";
        }
    }

?>
