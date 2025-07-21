<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get function in php</title>
</head>
<body>
    <form action="getFunction.php" method="post">
        <label>Name</label><br>
        <input type="text" name="username" required><br>

        <label>Password</label><br>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <?php
    // . is used for the string concatination
    $username = $_POST["username"];
    $password = $_POST["password"];
    echo "<br>Name:{$username}";
    echo "<br>Password:{$password}";
    ?>
</body>
</html>