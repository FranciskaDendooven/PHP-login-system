<?php

class SignupController
{
    private $usr;
    private $pwd;
    private $pwdRepeat;
    private $email;
    private DatabaseManager $databaseManager;

    public function __construct($usr, $pwd, $pwdRepeat, $email, DatabaseManager $databaseManager)
    {
        $this->usr = $usr;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;
        $this->databaseManager = $databaseManager;
    }

    private function emptyInput()
    {
        $result='';
        if(empty($this->usr)||empty($this->pwd)||empty($this->pwdRepeat)||empty($this->email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsr()
    {
        $result='';
        if(!preg_match("/^[-a-zA-Z0-9]*$/", $this->usr)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch()
    {
        $result = '';
        if($this->pwd !== $this->pwdRepeat){
            $return = false;
        } else {
            $return = true;
        }

        return $result;
    }

}