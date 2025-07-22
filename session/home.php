<?php
session_start(); //Starting the session 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug Bounty & Ethical Hacking Services</title>
    <link rel="stylesheet" href="home.css">
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
        &copy; 2025 Team Darkness. All rights reserved.
    </footer>
</body>
</html>
