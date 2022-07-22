<?php

if (isset($_POST['submit'])) {
    //Get data
    $usr = $_POST['usr'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdRepeat'];
    $email = $_POST['email'];

    //Instantiate signupController class

    include "../Models/Signup.php";
    include "../Models/Signup-controller.php";

    $signup = new SignupController($usr, $pwd, $pwdRepeat, $email);

    

    //run errorHandlers and use signup

    //Back to index.php (frontPage)
}