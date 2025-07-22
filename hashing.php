<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        body {
            background: linear-gradient(120deg, #161b22 0%, #21262d 100%);
            color: #c9d1d9;
            font-family: 'Segoe UI', 'Liberation Sans', Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: #161b22;
            border-radius: 10px;
            box-shadow: 0 4px 24px rgba(30,40,60,0.18);
            padding: 32px 40px;
            max-width: 600px;
            text-align: center;
        }
        h2 {
            color: #58a6ff;
            margin-bottom: 18px;
        }
        p {
            color: #c9d1d9;
            font-size: 1.15rem;
            line-height: 1.6;
        }
        .cookie-form {
        background: #21262d;
        border-radius: 8px;
        box-shadow: 0 2px 12px rgba(30,40,60,0.12);
        padding: 28px 32px;
        margin-top: 28px;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 900px;
}
    .form-label {
        color: #7ee787;
        font-size: 1.08rem;
        margin-bottom: 10px;
        font-weight: 500;
    }
    .form-input {
        width: 50%;
        height: 40px;
        padding: 10px 14px;
        /* margin: 12px 0 18px 0; */
        transform: translateY(-20px);
        border: none;
        border-radius: 6px;
        background: #161b22;
        color: #c9d1d9;
        font-size: 1rem;
        box-shadow: 0 1px 4px rgba(30,40,60,0.10);
        outline: none;
        transition: background 0.2s, box-shadow 0.2s;
    }
    .form-input:focus {
        background: #21262d;
        box-shadow: 0 0 0 2px #58a6ff;
    }
    .form-btn {
        background: linear-gradient(90deg, #58a6ff, #7ee787);
        color: #161b22;
        border: none;
        border-radius: 6px;
        padding: 10px 24px;
        font-size: 1.08rem;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(30,40,60,0.10);
        transition: background 0.2s, color 0.2s;
    }
    .form-btn:hover {
        background: linear-gradient(90deg, #7ee787, #58a6ff);
        color: #21262d;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Today we are going to learn about the Password Hashing</h2>
        <p>
            Password hashing means converting the normal string into the bunch 
            of random characters which prevents of hacking of the 
            normal user's account.
        </p>
    </div>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="cookie-form">
    <label class="form-label">Enter your username here</label><br>
    <input type="text" class="form-input" name="username" required title="Username"> <br> 

    <label class="form-label">Enter your password here</label><br>
    <input type="password" class="form-input" name="password" title="password" required> <br> 
    <button type="submit" class="form-btn" name="submit">Submit</button>
    <?php
    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        $hash = password_hash($pasword,PASSWORD_DEFAULT);

        if(password_verify($password,$hash)){
            echo "You are logged in";
        }else{
            echo "Incorrect Password enter a valid password";
        }
    }
    ?>
    </form>
</body>
</html>