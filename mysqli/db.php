<?php  

    $server = "localhost";
    $username = "root";
    $pass = "";
    $database = "trial";
    
    // Adding the connection to the db
    $conn = mysqli_connect($server, $username, $pass, $database);
    
    if ($conn) {
        echo "Connected to the database successfully";
    } else {
        echo "Sorry! Some error occurred and couldn't connect to the database";
    }

?>
