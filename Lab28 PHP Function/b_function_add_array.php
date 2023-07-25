<?php
    function addMarks($num){
        $sum = 0;
        foreach ($num as $value) {
            $sum +=$value; // $sum = $sum + $value
        }
        return $sum;
    }
        
    $ramMarks = [23,45,67,89,78];
    $sumRamMarks = addMarks($ramMarks);
    $sitaMarks = [78,90,77,99,34];
    $sumSitaMarks = addMarks($sitaMarks);
    echo "Ram's total marks = $sumRamMarks <br/>";
    echo "Sita's total marks = $sumSitaMarks";
?>
