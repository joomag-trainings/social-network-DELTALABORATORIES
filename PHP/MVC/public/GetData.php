<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/28/2017
 * Time: 11:37 AM
 */
require '../config/db.config.php';


$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT *  FROM `user_data`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$UsersName = $row['Name'];
$UsersNametmp = strtolower($UsersName);
$UsersLastName = $row['LastName'];
$UsersLastName = strtolower($UsersLastName);
$UsersLastName = ucfirst($UsersLastName);
$UserName = "@" . substr($UsersNametmp, 0 , 1) . strtolower($UsersLastName);
echo $UsersName,$UsersLastName,$UserName;
