<?php
    $marks = array(
        "Ram" => 56,
        "Sita" => 97,
        "Laxman" => 99
    );

    $address = array(
        "Ram" => "Anakantar",
        "Sita" => "Ghopteodar",
        "Laxman" => "Timro Dil ma"
    );
    $address["Hanuman"] = "Hawa";


    echo "Marks of sita = ".$marks["Sita"]."<br/>";

    // foreach ($marks as $key => $value) {
    //     echo "The marks of ".$key." is ".$value."<br/>";
    // }

    foreach ($address as $key => $value) {
        echo $key." lives in ".$value."<br/>";
    }
?>