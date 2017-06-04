<?php

class Package_Model extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function getNaw($id){
        $sql = "SELECT Zipcode as From_Zipcode, Housenumber as From_Housenumber, Street as From_Street, City as From_City FROM user WHERE idUser = :idUser;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':idUser' => $id
        ));
        return $sth->fetch();
    }
  
   
}
