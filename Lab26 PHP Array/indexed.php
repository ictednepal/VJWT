<?php
    // $marks = array(23,45,67,78,95);
    // $marks = [23,45,67,78,95];
    $marks[0] = 23;
    $marks[1] = 45;
    $marks[2] = 67;
    $marks[3] = 78;
    $marks[4] = 95;
    $marks[5] = 90;

    // foreach ($marks as $mark) {
    //    echo "The mark is = $mark"."<br/>";
    // }

    $size = count($marks);
    for ($i=0; $i < $size; $i++) { 
        echo "The mark is = ".$marks[$i]."<br/>";
    }
?>