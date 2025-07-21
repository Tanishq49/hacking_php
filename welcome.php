<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the PHP programming by Trifalic Hacker</title>
    <style>
        .headingMain{
            font-size:20px;
            text-align: center;
            margin-top: 40px;
            margin-left: 20px;
            margin-right: 20px;
            background-color: #f7f7f7;
            border-radius: 20px;
            border: none;
            transition-property: all;
            z-index: 10;
        }
        .headingMain::before{
            position: absolute;
            content: "From now we are going to start the new PHP series where we will know how to make the websites and interact with the sql databases and know how to fetch the api and knowing how to use the php in the hacking ";
            z-index: 1;
            margin-left: -15px;
            color: red;
            
        }
    </style>
</head>
<body>

    <!-- Php code starts from here -->

    <?php

    echo "Welcome to the PHP programming";
    echo "<br>";
    echo "<div class='headingMain'>";
    echo "From now we are going to start the new PHP series where we will know how to make the websites and interact with the sql databases and know how to fetch the api and knowing how to use the php in the hacking ";
    echo "</div>";


    ?>

    <!-- Php code ends here --> 

</body>
</html>