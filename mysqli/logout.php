<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logout | Ethical Hackers</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #0f1115;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .logout-container {
            background: #1b1e24;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 230, 230, 0.2);
            max-width: 600px;
        }

        h1 {
            color: #00e6e6;
            margin-bottom: 24px;
        }

        p {
            color: #cccccc;
            margin-bottom: 32px;
        }

        .btn {
            padding: 12px 30px;
            margin: 10px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, #00e6e6, #2b5876);
            color: #0f1115;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            background: linear-gradient(90deg, #2b5876, #00e6e6);
        }

        .privacy {
            margin-top: 40px;
            font-size: 0.9rem;
            color: #bbbbbb;
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <div class="logout-container">
        <h1>You have been logged out.</h1>
        <p>Thank you for using our services. We hope to see you again soon.</p>
        <a href="signin.php"><button class="btn">Login Again</button></a>
        <a href="home.php"><button class="btn">Go to Homepage</button></a>

        <div class="privacy">
            <h3>Privacy Policy</h3>
            <p>
                We prioritize your data privacy and cybersecurity. Any personal information
                shared through our platform is stored securely and never shared with third parties
                without your consent. Our ethical hacking services operate under strict confidentiality
                agreements to ensure the protection of client data.
                <br><br>
                Our bug bounty submissions are processed anonymously unless otherwise agreed. We comply with
                industry best practices and regularly update our systems to prevent data breaches.
                <br><br>
                For any questions regarding your data or privacy rights, please contact us at
                <a href="mailto:nottanishqbhandari@gmail.com" style="color:#00e6e6; text-decoration: none;">nottanishqbhandari@gmail.com</a>.
            </p>
        </div>
    </div>
</body>

</html>