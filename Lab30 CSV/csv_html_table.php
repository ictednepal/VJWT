<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with CSV file</title>
</head>

<body>
    <table border="1">
        <?php
            $file = fopen("students.csv", "r"); //opens the CSV file.
                while (($row = fgetcsv($file)) !== false) { //Reads the CSV file row-by-row
                    echo "<tr>";
                        foreach ($row as $col) {
                            echo "<td>$col</td>";
                        }
                        echo "</tr>";
                }
            fclose($file);
        ?>
    </table>
</body>

</html>