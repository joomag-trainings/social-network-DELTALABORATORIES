<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/18/2017
 * Time: 6:02 PM
 */
namespace Controller;

use \Slim\Http\Response;
use \Slim\Container;

class SigninController
{
    /**
     * Container
     * @var
     */
    private $container;

    /**
     * SigninController constructor.
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function validation (\Slim\Http\Request $request, Response $response) {


        require '../config/db.config.php';

        $conn = new \mysqli($dbHost, $dbUser, $dbPass, $dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `user_data` WHERE `E-Mail` = '" . $_GET['logInEMAIL'] . "'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $echo = password_verify($_GET['logInPASSWORD'], $row['Password_Hash']);
        $password = $_GET['logInPASSWORD'];
        $options = [
            'cost' => 12,
        ];
        $passwordHashed = password_hash($password, PASSWORD_BCRYPT, $options);
        if (password_verify($_GET['logInPASSWORD'], $row['Password_Hash']) === true) {
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
            header("Location:../../../../timeline_page.php");
            die('Here');

        } else {
            echo "Wrong Login Or Password";
        }
        $conn->close();
    }
}