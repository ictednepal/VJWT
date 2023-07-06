<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Working with PHP date and time</h1>
    <?php
        // echo "The date is ". date("y/m/d")."<br/>";
        // echo "The date is ". date("y-m-d")."<br/>";
        // echo "The date is ". date("y.m.d")."<br/>";
        // echo "The date is ". date("Y/m/d")."<br/>";
        // echo "The date is ". date("Y/M/d")."<br/>";
        // echo "The date is ". date("Y/M/D")."<br/>";
        // echo "The day is ". date("l")."<br/>";
        // echo "The year is ". date("Y")."<br/>";

        // h - indicating 12 hours time format with leading 0 (00-12)
        // i - minutes, with leading 0 (00-59)
        // s - seconds, with leading 0 (00-59)
        // a - AM,PM

        echo "The time is ".date("h:i:s")."<br/>";
        echo "The time is ".date("h:i:sa")."<br/><br/>";

        echo "The time in Nepal is " . "<br/>";
        date_default_timezone_set("Asia/Kathmandu");
        echo "The time is ".date("h:i:sa")."<br/>";

        // strtotime is a built-in function in php that converts human understandable time and date format into unix time
        $myTime = strtotime("9:45 am May 05 1994");
        echo "The date and time is ".date("Y/m/d h:i:sa",$myTime);

    ?>
</body>

</html>