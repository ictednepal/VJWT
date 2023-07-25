<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Student Information System</title>
</head>

<body>
    <h1>SIS-Please Login </h1>
    <form action="login_process.php" method="POST">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="user" id="username" placeholder="Enter your username..."></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="pass" id="password" placeholder="Enter your password..."></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" name="submit" value="Login">
                    <button><a href="register.php">Register</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>