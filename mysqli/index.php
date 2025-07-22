<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="login-card">
        <h2>Sign In</h2>
        <form method="post" action="index.php" autocomplete="off">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button class="login-btn" type="submit" name="submit">Login</button>
        <?php
        if(isset($_POST["submit"])){
            $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);  
            $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
            //Assigning the values in the session
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location: index.php");
        }
        ?>
        </form>
        <div class="footer">
            Don't have an account? <a href="">Register</a>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>