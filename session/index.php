<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Dark Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --bg: #18181b;
            --card-bg: #23232a;
            --accent: #6366f1;
            --input-bg: #2a2a35;
            --text: #f3f4f6;
            --error: #ef4444;
        }
        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .login-card {
            background: var(--card-bg);
            padding: 2.5rem 2rem;
            border-radius: 1.2rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.45);
            width: 100%;
            max-width: 370px;
            animation: fadeInUp 1s cubic-bezier(.68,-0.55,.27,1.55);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .login-card h2 {
            margin-bottom: 1.5rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 1.2rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 1rem;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 0.7rem;
            background: var(--input-bg);
            color: var(--text);
            font-size: 1rem;
            transition: box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(99,102,241,0.07);
            transform: translateX(-10px);
        }
        input:focus {
            outline: none;
            box-shadow: 0 0 0 2px var(--accent);
        }
        .login-btn {
            width: 100%;
            padding: 0.85rem 0;
            background: linear-gradient(90deg, var(--accent) 0%, #3b82f6 100%);
            color: #fff;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 0.7rem;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 4px 16px rgba(99,102,241,0.15);
        }
        .login-btn:hover {
            background: linear-gradient(90deg, #3b82f6 0%, var(--accent) 100%);
            transform: translateY(-2px) scale(1.03);
        }
        .login-card .footer {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 0.95rem;
            color: #a1a1aa;
        }
        .login-card .footer a {
            color: var(--accent);
            text-decoration: none;
            transition: text-decoration 0.2s;
        }
        .login-card .footer a:hover {
            text-decoration: underline;
        }
    </style>
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
        </form>
        <div class="footer">
            Don't have an account? <a href="">Register</a>
        </div>
    </div>
    <?php
    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);  
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        //Assigning the values in the session
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("Location: home.php");
    }
    ?>
    <script>
        // Smooth background animation
        let x = 20, y = 30;
        let targetX = x, targetY = y;

        function animateBg() {
            // Gradually move towards target
            x += (targetX - x) * 0.08;
            y += (targetY - y) * 0.08;
            document.body.style.background = `radial-gradient(circle at ${x}% ${y}%, #6366f1 0%, transparent 60%), var(--bg)`;
            requestAnimationFrame(animateBg);
        }

        setInterval(() => {
            targetX = Math.random() * 80 + 10;
            targetY = Math.random() * 60 + 20;
        }, 4000);

        animateBg();
    </script>
</body>
</html>