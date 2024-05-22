<?php
// Database Connection
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$databasename = "bms";
$conn = new mysqli($host, $dbusername, $dbpassword, $databasename);

if($conn->error){
    die("An Error Occured". $conn->error);
}
