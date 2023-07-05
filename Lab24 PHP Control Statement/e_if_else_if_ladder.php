<?php
    $per = 31;
    if($per>79){
        echo "Distinction";
    }
    else if($per>59){
        echo "First";
    }
    else if($per>44){
        echo "Second";
    }
    else if($per>31){
        echo "Third";
    }
    else{
        echo "Better luck next time";
    }
?>