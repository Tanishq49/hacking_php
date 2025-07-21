<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
        }

        .output {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .output br {
            display: block;
            margin-bottom: 10px;
        }

        .output::before {
            content: "Programming Languages and Their Uses:";
            display: block;
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 15px;
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="output">
        <?php
        $programmingLanguagesUses = array(
            "HTML" => "frontend",
            "Css" => "frontend",
            "Python" => "backend as well as frontend",
            "c++" => "backend",
        );

        //Printing all the key value pairs using the foreach loop
        foreach($programmingLanguagesUses as $key => $value){
            echo "<br> {$key} is used in {$value}";
        }
        ?>
    </div>
</body>
</html>
