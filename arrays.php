<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in the php</title>
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #ffffff;
        }

        form {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        label {
            font-weight: bold;
            font-size: 1.1rem;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #2c2c2c;
            border: 1px solid #444;
            color: #fff;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            padding: 10px 20px;
            background-color: #3a3a3a;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #5a5a5a;
        }

        .output {
            margin-top: 30px;
            padding: 25px;
            background-color: #1e1e1e;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        .tag {
            display: inline-block;
            background-color: #2e3b4e;
            color: #fff;
            padding: 8px 15px;
            border-radius: 20px;
            margin: 5px;
            font-size: 0.95rem;
            transition: transform 0.2s ease;
        }

        .tag:hover {
            background-color: #3f5871;
            transform: scale(1.05);
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Add a Programming Language</h1>

    <form action="arrays.php" method="get">
        <label>Enter the name of any one programming language</label>
        <input type="text" name="language">
        <button type="submit">Add</button>
    </form>
    <a href="arrays.php">      
    <button>
        Home
    </button>
</a>

    <div class="output">
        <?php

        $programmingLanguages = array("python", "c++", "php", "java");

        // Printing the values of the array using the foreach loop

        $userLanguage = $_GET["language"];

        array_push($programmingLanguages, $userLanguage);

        foreach ($programmingLanguages as $programmingLanguage) {
            echo "<span class='tag'>$programmingLanguage</span>";
        }

        ?>
    </div>

</body>
</html>
