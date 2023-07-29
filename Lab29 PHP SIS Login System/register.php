<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Register your details</title>
</head>
<body>
    <h1>Student User Registration</h1>
    <table>
        <form action="register_process.php" method="POST">
            <tr>
                <td><label for="username">Username :</label></td>
                <td><input type="text" name="user" id="username" placeholder="Enter username"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="pass" id="password" placeholder="Enter password"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>