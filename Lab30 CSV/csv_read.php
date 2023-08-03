<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with CSV file</title>
</head>
<body>
    <?php
        $file = fopen("students.csv","r");
        while (!feof($file)) {
            print_r(fgetcsv($file));
        }
        fclose($file);
    ?>
</body>
</html>