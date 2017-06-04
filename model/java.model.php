<?php

class Java_Model extends Model {

    public function __construct() {
        parent::__construct();
        
    }
    
    public function getAllCustomers() {
        $sql = "SELECT u.Email, u.Firstname, u.Middlename, u.Lastname, u.Street, u.Housenumber, u.Zipcode, u.City, u.Country, u.Phonenumber, u.Gender, c.AccountType, c.CompanyName, c.KvKNumber, c.KvKDocument, c.PaymentPreference FROM customer c
                JOIN user u ON u.idUser = c.idUser";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        echo json_encode($sth->fetchall());
    }
    
    public function getAllCouriers() {
        $sql = "SELECT u.Email, u.Firstname, u.Middlename, u.Lastname, u.Street, u.Housenumber, u.Zipcode, u.City, u.Country, u.Phonenumber, u.Gender, c.Status, c.CurriculumVitae, c.Photo, c.Identification FROM courier c 
                JOIN user u ON u.idUser = c.idUser";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        echo json_encode($sth->fetchall());
    }
    
    public function getAllPackages(){
        $sql = "SELECT * FROM `package`";
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        echo json_encode($sth->fetchall());
    }
    
    public function updateCustomer($idUser, $AccountType, $CompanyName, $KvKNumber, $KvKDocument, $PaymentPreference){
        $sql = "UPDATE `customer` SET `AccountType`=:AccountType,`CompanyName`=:CompanyName,`KvKNumber`=:KvKNumber,`KvKDocument`=:KvKDocument,`PaymentPreference`=:PaymentPreference WHERE `idUser`=:idUser;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':AccountType' => $AccountType,
            ':CompanyName' => $CompanyName,
            ':KvKNumber' => $KvKNumber,
            ':KvKDocument' => $KvKDocument,
            ':PaymentPreference' => $PaymentPreference,
            ':idUser' => $idUser
        ));
    }
    
    public function updateUser($idUser, $Firstname, $Middlename, $Lastname, $Street, $Housenumber, $Zipcode, $City, $Country, $Phonenumber, $Gender){
        $sql = "UPDATE `user` SET `Firstname`=:Firstname,`Middlename`=:Middlename,`Lastname`=:Lastname,`Street`=:Street,`Housenumber`=:Housenumber],`Zipcode`=:Zipcode,`City`=:City,`Country`=:Country,`Phonenumber`=:Phonenumber,`Gender`=:Gender WHERE `idUser`=:idUser;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':Firstname' => $Firstname,
            ':Middlename' => $Middlename,
            ':Lastname' => $Lastname,
            ':Street' => $Street,
            ':Housenumber' => $Housenumber,
            ':Zipcode' => $Zipcode,
            ':City' => $City,
            ':Country' => $Country,
            ':Phonenumber' => $Phonenumber,
            ':Gender' => $Gender,
            ':idUser' => $idUser
        ));
    }
    
    public function updateCourier($idUser, $Status, $CurriculumVitae, $Photo, $Identification, $idUser){
        $sql = "UPDATE `courier` SET `Status`=:Status,`CurriculumVitae`=:CurriculumVitae,`Photo`=:Photo,`Identification`=:Identification WHERE `idUser`=:idUser;";
        $sth->execute(array(
            ':Status' => $Status,
            ':CurriculumVitae' => $CurriculumVitae,
            ':Photo' => $Photo,
            ':Identification' => $Identification,
            ':idUser' => $idUser
        ));
    }
    
   
}
