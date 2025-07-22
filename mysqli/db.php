<?php

$server = "localhost";
$username = "tanishq";
$pass = "tanishq";
$database = "trial";

// Adding the connection to the db
$conn = mysqli_connect($server, $username, $pass, $database);

if($conn){
    echo "Connected to the databse successfully!";
}else{
    echo "Some error occured in connecting to the database";
}
?>
