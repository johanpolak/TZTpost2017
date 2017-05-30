<?php

class Authentication_Model extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    public function checkUser($email, $password) {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT id FROM users WHERE email = :email AND password = :password";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':password' => $password
        ));
        return $sth->fetch();
    }
    
    public function getId($email){
        $sql = "SELECT id, salt FROM users WHERE email = :email;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email
        ));
        return $sth->fetch();
    }

    public function checkTries($email, $attemptsTime, $maxAttempts) {
        $sql = "SELECT email FROM loginfail WHERE DateAndTime >= NOW() - INTERVAL :attemptsTime MINUTE AND email = :email  GROUP BY email, IP HAVING (COUNT(email) = :maxAttempts)";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $_POST['email'],
            ':attemptsTime' => $attemptsTime,
            ':maxAttempts' => $maxAttempts
        ));
        return $sth->fetchAll();
    }
    
    public function insertTry($email, $server) {
        $sql = "INSERT INTO loginfail (email, IP, dateAndTime) VALUES (:email, :IP, NOW())";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':IP' => $server
        ));
    }
    
    public function updateUser($email, $salt){
        $sql = "UPDATE users SET salt = :salt WHERE email = :email;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':salt' => $salt
        ));
    }
   
}