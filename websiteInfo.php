<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER in PHP</title>
    <style>
        body{
            background-image: linear-gradient(45deg,#000,#0c0c0c);
            color: #3da81dff;
            font-size: 20px;
        }
        form{
            display: flex;
            justify-content: center;
            flex-direction: column;
            background-color: #242121;
            text-align: center;
        }
        .name{
            width: 400px;
            margin-left: 400px;
            height: 50px;
            border-radius: 15px;
            border: none;
        }.btn{
            width: 200px;
            height: 50px;
            margin-left: 500px;
            border: none;
            border-radius: 25px;
            background-color:rgb(43, 43, 170);
            color: white;
            font-size: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" placeholder="Enter the username here.." name="username" required class="name">
        <br>
        <input type="submit" name="Submit" value="submit" class="btn">
        <br>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "The method is post";
        }else{
            echo "The method is {$_SERVER["REQUEST_METHOD"]}";
        }
        ?>
    </form>
    <?php
    foreach($_SERVER as $key=>$value){
        echo "<span class='line'> $key: $value</span><br><br>";
    }
    ?>
</body>
</html>