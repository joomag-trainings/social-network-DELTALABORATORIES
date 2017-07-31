<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/28/2017
 * Time: 4:44 PM
 */
require '../config/db.config.php';


$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `notifications`";
$result = $conn->query($sql);
$notificationCount = 0;
$NotificationContent = array();
var_dump($NotificationContent);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        $notificationCount++;
        $NotificationContent[$notificationCount] = $row['Notification_Content'];
        var_dump($NotificationContent);
    }
}