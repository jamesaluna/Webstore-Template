<?php 
 
function OpenCon() {
    $databaseName = "Bookstore";
    $serverName = "localhost";
    $uid = "root@localhost";
    $pwd = "givemetheloot!";
    
    $conn = mysqli_connect($serverName, $uid, $pwd, $databaseName) or die("Connection failed: %s\n". $conn -> error);

    return $conn;
}

