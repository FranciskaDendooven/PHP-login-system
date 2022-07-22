<?php

class Signup extends DatabaseManager{
    protected function checkUser($usr, $email){
        $pdo = $this->databaseManager->connection;
        $sql = "SELECT users_usr FROM `users` WHERE users_usr = ? OR users_email = ?";
        // $statement = $pdo->prepare($sql);
        // $statement->execute(array((int)$_GET['id']));
        // $rawArticle = $statement->fetch();
    }
}