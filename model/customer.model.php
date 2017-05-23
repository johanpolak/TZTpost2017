<?php

class Customer_Model extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function opslaan($naam, $achternaam){
        $sql = "INSERT INTO iets SET (naam, achternaam) VALUES (:naam, :achternaam);";
        $sth->prepare($sql);
        $sth->execute(array(
            ':naam' => $naam,
            ':achternaam' => $achternaam
        ));
        //meer info over PDO - > http://php.net/manual/en/book.pdo.php
        //return $sth->fetchAll();
    }
    
   
}