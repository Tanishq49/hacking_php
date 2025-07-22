<?php

//Adding some variables to connect with database of mysql
$server = "localhost";
$username = "tanishq";
$pass = "tanishq";
$database = "trial";

// Adding the connection to the db
try {
    $conn = mysqli_connect($server, $username, $pass, $database);
    if ($conn) {
        echo "Connected to the database successfully!";
    } else {
        echo "Couldn't connect to the database";
    }
} catch (mysqli_sql_exception) {
    echo "Some error occured in connecting to the database";
}
