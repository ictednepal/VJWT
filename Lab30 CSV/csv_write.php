<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with CSV file</title>
</head>
<body>
    <?php
        $names = array(
            "ram,ram@gmail.com,25",
            "sita,sita@yahoo.com,22",
            "hari,hari@outlook.com,21"
        );
        $file = fopen("students.csv","w");
            foreach ($names as $line) {
                fputcsv($file,explode(',',$line));
            }
        fclose($file);
    ?>
</body>
</html>