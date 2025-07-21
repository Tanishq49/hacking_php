<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preventing the SQL injection in PHP</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #1f1f1f;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #00000088;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 250px;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: #00adb5;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #007e84;
        }
    </style>
</head>
<body>
    <form action="preventingSqlInjection.php" method="post">
        <input type="text" name="username" placeholder="Enter your name here"><br>
        <input type="submit" value="Submit" name="confirm">
    </form>
    <?php

    if(isset($_POST["confirm"])){
        // $username = $_POST["username"]; //Dont use this is the forms
        $username = filter_input(INPUT_POST , "username",FILTER_SANITIZE_SPECIAL_CHARS);
        echo "Hello {$username}";
    }

    ?>
</body>
</html>
