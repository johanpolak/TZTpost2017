<?php

class Login_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function checkUser($email, $password) {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT 
                    id
                FROM
                    users
                WHERE
                    email = :email
                AND
                    wachtwoord = :wachtwoord";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':wachtwoord' => hash('sha512', $password)
        ));
        return $sth->fetchAll();
    }

    public function checkTries($email, $attemptsTime, $maxAttempts) {
        $sql = "SELECT
                    email
                FROM
                    loginfail
                WHERE
                    DateAndTime >= NOW() - INTERVAL :attemptsTime MINUTE
                AND
                    email = :email    
                GROUP BY
                    email, IP
                HAVING
                    (COUNT(email) = :maxAttempts)";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':attemptsTime' => $attemptsTime,
            ':maxAttempts' => $maxAttempts
        ));
        return $sth->fetchAll();
    }

    public function insertTry($email, $server) {
        $sql = "INSERT INTO loginfail 
                (email, IP, dateAndTime)
                VALUES
                (:email, :IP, NOW())";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':IP' => $server
        ));
    }

}
