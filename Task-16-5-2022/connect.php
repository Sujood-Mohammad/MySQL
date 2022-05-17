<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "animals";

$connect = mysqli_connect( $serverName, $userName, $password, $dbName);

if (mysqli_connect_error()) {
    echo "The connection is failed";
}

?>