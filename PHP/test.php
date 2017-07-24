<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/24/2017
 * Time: 12:52 PM
 */
$servername = "localhost";
$username = "root";
$password = "DELTA";
$dbname = "network_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Name, LastName FROM user_data";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
echo $row['ID'];
$conn->close();