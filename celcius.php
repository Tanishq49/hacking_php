<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit to Celsius Converter</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 320px;
        }

        label {
            display: block;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        h4 {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #444;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="fahrenheit">Fahrenheit Temperature</label>
        <input type="text" id="fahrenheit" name="fahrenheit" placeholder="Enter Fahrenheit value">
        <button type="submit">Convert</button>

        <?php 
            $fahrenheit = $_GET["fahrenheit"];
            $celsius = ($fahrenheit - 32) * 5 / 9;
            echo "<h4>Celsius Temperature = " . round($celsius, 2) . " °C</h4>";
        ?>
    </form>
</body>
</html>
