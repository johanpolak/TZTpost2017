<?php

class Model {

    public function __construct() {
        $this->pdo = new Database();
    }

    public function getCats() {
        $sql = "SELECT * FROM `cat`";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        return $sth->fetchall(PDO::FETCH_ASSOC);
    }

}
