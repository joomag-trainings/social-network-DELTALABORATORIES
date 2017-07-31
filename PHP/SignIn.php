<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/13/2017
 * Time: 11:18 PM
 */

require 'MVC/config/db.config.php';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `user_data` WHERE `E-Mail` = '" . $_POST['logInEMAIL'] . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$echo = password_verify($_POST['logInPASSWORD'], $row['Password_Hash']);
$password = $_POST['logInPASSWORD'];
$options = [
    'cost' => 12,
];
$passwordHashed = password_hash($password, PASSWORD_BCRYPT, $options);
if (password_verify($_POST['logInPASSWORD'], $row['Password_Hash']) === true) {
    $UsersName = $row['Name'];
    $UsersName = strtolower($UsersName);
    $UsersLastName = $row['LastName'];
    $UsersLastName = strtolower($UsersLastName);
    $UserName = "@" . substr($UsersName, 0 , 1) . $UsersLastName;
    session_start();
    $_SESSION['Name'] = $row['Name'];
    $_SESSION['LastName'] = $row['LastName'];
    $_SESSION['ID'] = $row['ID'];
    $_SESSION['Username'] = $UserName;
    $_SESSION['LoggedIn'] = true;
    header("Location:../timeline_page.html");


} else {
    echo "Wrong Login Or Password";
}
$conn->close();