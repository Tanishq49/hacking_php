<?php
session_start();
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        include("./db.php");
        $name = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        //Hashing the password
        $hash = password_hash($password, PASSWORD_DEFAULT);

        //Making the sql query to check the name and the email if exists..
        $sql = "SELECT * FROM trial WHERE username='$name' OR email='$email'";
        $connection = mysqli_query($conn, $sql);
        if (mysqli_num_rows($connection) == 0) {
            $_SESSION["username"] = $name;
            $_SESSION["email"] = $email;
            $sql1 = "INSERT INTO `trial` (`S.No`, `username`, `email`, `password`) VALUES (NULL, '$name', '$email', '$hash')";
            $result = mysqli_query($conn, $sql1);
            header("Location: home.php");
        } else {
            echo "Name or email already registered";
        }
        mysqli_close($conn);
    }
} catch (mysqli_sql_exception) {
    die("Some error occurred. Please refresh the website");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <style>
        /* Animated dark wallpaper using CSS gradients and keyframes */
        body {
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #232526 0%, #414345 100%);
            overflow: hidden;
        }

        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            background: radial-gradient(circle at 20% 20%, #2b5876 0%, transparent 60%),
                radial-gradient(circle at 80% 80%, #4e4376 0%, transparent 60%),
                linear-gradient(120deg, #232526 0%, #414345 100%);
            animation: moveBg 10s linear infinite alternate;
        }

        a {
            text-decoration: none;
            color: white;

        }

        @keyframes moveBg {
            0% {
                background-position: 0% 0%, 100% 100%, 0% 0%;
            }

            100% {
                background-position: 100% 100%, 0% 0%, 100% 100%;
            }
        }

        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(34, 34, 34, 0.95);
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            padding: 40px 32px;
            width: 350px;
            backdrop-filter: blur(6px);
            animation: fadeIn 1.2s cubic-bezier(.68, -0.55, .27, 1.55);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate(-50%, -60%) scale(0.9);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }

        .login-title {
            color: #fff;
            font-size: 2rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 24px;
            letter-spacing: 2px;
            text-shadow: 0 2px 8px #000a;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .login-form input {
            padding: 12px 16px;
            border-radius: 8px;
            border: none;
            background: #232526;
            color: #fff;
            font-size: 1rem;
            transition: box-shadow 0.3s, background 0.3s;
            box-shadow: 0 2px 8px #0002;
        }

        .login-form input:focus {
            outline: none;
            background: #2b5876;
            box-shadow: 0 0 0 2px #4e4376;
        }

        .login-btn {
            padding: 12px 0;
            border-radius: 8px;
            border: none;
            background: linear-gradient(90deg, #2b5876 0%, #4e4376 100%);
            color: #fff;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 2px 8px #0003;
            transition: background 0.3s, transform 0.2s;
        }

        .login-btn:hover {
            background: linear-gradient(90deg, #4e4376 0%, #2b5876 100%);
            transform: scale(1.04);
        }

        .glow {
            box-shadow: 0 0 16px 2px #4e4376;
            animation: glowPulse 1.5s infinite alternate;
        }

        @keyframes glowPulse {
            from {
                box-shadow: 0 0 8px 1px #2b5876;
            }

            to {
                box-shadow: 0 0 24px 4px #4e4376;
            }
        }

        .login-form input::placeholder {
            color: #aaa;
            opacity: 0.8;
        }
    </style>
    <script>
        // Add glow effect to button on focus
        window.onload = function() {
            const btn = document.querySelector('.login-btn');
            btn.addEventListener('focus', function() {
                btn.classList.add('glow');
            });
            btn.addEventListener('blur', function() {
                btn.classList.remove('glow');
            });
        };
    </script>
</head>

<body>
    <div class="animated-bg"></div>
    <div class="login-container">
        <div class="login-title">SignUp</div>
        <form class="login-form" method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="login-btn" name="submit">Submit</button>
        </form>
        <br><br>
        <form action="login.php" class="login-form">
            <button type=" submit" class="login-btn" name="login">
                <a href="login.php">
                    Already have an account?
                </a>
            </button>
        </form>
    </div>
</body>

</html>