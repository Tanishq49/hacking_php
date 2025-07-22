<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    include("./db.php");

    $name = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // Fetch user by username
    $sql = "SELECT * FROM trial WHERE username='$name'";
    $connection = mysqli_query($conn, $sql);

    if (mysqli_num_rows($connection) == 1) {
        $row = mysqli_fetch_assoc($connection);
        // Verify password
        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $row["username"];
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid Credentials";
        }
    } else {
        echo "Invalid Credentials";
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: radial-gradient(ellipse at center, #111 0%, #000 100%);
            overflow: hidden;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .neon-circle {
            position: absolute;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, #00f7ff33, transparent 70%);
            border-radius: 50%;
            z-index: 0;
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.3;
            }
        }

        .login-box {
            z-index: 1;
            background: rgba(20, 20, 30, 0.9);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 40px #0ff4, 0 0 10px #00f2ff88;
            backdrop-filter: blur(10px);
            width: 350px;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .login-box h2 {
            margin: 0 0 25px;
            text-align: center;
            font-weight: 700;
            color: #00f7ff;
            text-shadow: 0 0 10px #00f7ff77;
            letter-spacing: 1px;
        }

        .login-box form {
            display: flex;
            flex-direction: column;
        }

        .login-box input {
            background: #111;
            border: none;
            border-bottom: 2px solid #0ff;
            padding: 12px;
            margin: 15px 0;
            color: #0ff;
            font-size: 1rem;
            border-radius: 4px 4px 0 0;
            transition: 0.3s;
        }

        .login-box input:focus {
            outline: none;
            background: #222;
            box-shadow: 0 0 10px #00f7ff88;
        }

        .login-box input::placeholder {
            color: #888;
        }

        .login-box button {
            margin-top: 20px;
            padding: 12px;
            background: linear-gradient(90deg, #00f7ff, #0051ff);
            color: #000;
            font-weight: bold;
            font-size: 1rem;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 0 15px #00f7ff88;
            transition: all 0.3s ease-in-out;
        }

        .login-box button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px #00f7ffcc;
        }

        @media (max-width: 400px) {
            .login-box {
                width: 90%;
                padding: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="neon-circle"></div>

    <div class="login-box">
        <h2>Login Portal</h2>
        <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit" name="submit">Enter the Grid</button>
        </form>
        <form action="signin.php">
            <button type="submit" name="submit">Dont have an account?</button>
        </form>
    </div>
</body>

</html>