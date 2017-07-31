<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/30/2017
 * Time: 11:53 PM
 */

namespace Controller;


class UploadController
{
    public function UploadFile()
    {
        require '../config/database.config.php';

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = '';
    }
}