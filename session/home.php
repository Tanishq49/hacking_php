<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug Bounty & Ethical Hacking Services</title>
    <style>
        body {
            background: #181818;
            color: #f5f5f5;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background: #23272a;
            padding: 2rem 0 1rem 0;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        header h1 {
            color: #00ffae;
            font-size: 2.5rem;
            margin: 0;
        }
        nav {
            margin-top: 1rem;
        }
        nav a {
            color: #f5f5f5;
            text-decoration: none;
            margin: 0 1rem;
            font-weight: 500;
            transition: color 0.2s;
        }
        nav a:hover {
            color: #00ffae;
        }
        .container {
            max-width: 900px;
            margin: 2rem auto;
            background: #222;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.4);
            padding: 2rem;
        }
        h2 {
            color: #00ffae;
        }
        .cta {
            display: inline-block;
            background: #00ffae;
            color: #181818;
            padding: 0.75rem 2rem;
            border-radius: 6px;
            font-size: 1.1rem;
            font-weight: bold;
            text-decoration: none;
            margin-top: 1.5rem;
            transition: background 0.2s;
        }
        .cta:hover {
            background: #00c98b;
        }
        footer {
            text-align: center;
            padding: 1rem 0;
            background: #23272a;
            color: #888;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .welcome-banner {
            max-width: 900px;
            margin: 2rem auto 0 auto;
            background: linear-gradient(90deg, #3ddfacff, #23272a 60%, #00ffae 100%);
            color: #181818;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.3);
            padding: 1.2rem 2rem;
            font-size: 1.5rem;
            font-weight: 500;
            text-align: center;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }
        .username-highlight {
            color: #23272a;
            background: #56eebeff;
            padding: 0.2em 0.6em;
            border-radius: 6px;
            font-weight: bold;
            box-shadow: 0 1px 4px rgba(0,255,174,0.15);
        }
        .logout-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 2.7rem;
            transform:translateY(-20px);
        }
        .logout-btn {
            background: #23272a;
            color: #00ffae;
            border: none;
            padding: 0.8rem 2.2rem;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            transition: background 0.2s, color 0.2s;
        }
        .logout-btn:hover {
            background: #00ffae;
            color: #23272a;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bug Bounty & Ethical Hacking Services</h1>
        <nav>
            <a href="">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <div class="welcome-banner">
        Welcome, <span class="username-highlight">
            <?php echo $_SESSION["username"]; ?></span>
    </div>
    <div class="container">
        <h2 id="services">Our Services</h2>
        <ul>
            <li>Vulnerability Assessment & Penetration Testing</li>
            <li>Bug Bounty Program Management</li>
            <li>Security Consulting & Training</li>
            <li>Web & Mobile Application Security</li>
            <li>Network Security Audits</li>
        </ul>
        <h2 id="about">Why Choose Us?</h2>
        <p>
            We are a team of certified ethical hackers and security researchers dedicated to helping organizations secure their digital assets. Our bug bounty platform connects you with top security talent to identify and fix vulnerabilities before they can be exploited.
        </p>
        <a class="cta" href="#contact">Get Started</a>
        <h2 id="contact" style="margin-top:2.5rem;">Contact Us</h2>
        <p>Email: <a href="mailto:nottanishqbhandari@gmail.com" style="color:#00ffae;">nottanishqbhandari@gmai.com</a></p>
        <p>Phone: <a href="tel:+1234567890" style="color:#00ffae;">+1 234 567 890</a></p>
    </div>
    <div class="logout-container">
        <form action="index.php" method="post">
            <button type="submit" class="logout-btn" name="logout">Logout</button>
        </form>
       <?php
        session_start(); // <-- this is REQUIRED to access the session

        if (isset($_POST["logout"])) {
            session_destroy();
            header("Location: index.php");
        }
    ?>

    </div>
    <footer>
        &copy; 2025 Bug Bounty Pro. All rights reserved.
    </footer>
</body>
</html>
