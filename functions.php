<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in PHP</title>
</head>
<body>

    <?php
    function welcome_message($name){
        echo "Welcome {$name}";
    }
    // We can pass the parameters to the functions
    welcome_message("Trifalic");
    ?>

</body>
</html>