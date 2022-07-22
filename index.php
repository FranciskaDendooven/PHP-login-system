<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function pre_r(array $array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
echo 'POST';
pre_r($_POST);

//include all your model files here
require 'Models/Signup.php';
//include all your controllers here
require 'Controller/Signup-controller.php';
require_once 'Controller/DatabaseManager.php';
require_once 'config.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);//creates the connection for the new databasemanager
$databaseManager->connect();//call the connect-method