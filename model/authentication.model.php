<?php

class Authentication_Model extends Model{
    
    public function __construct(){
        parent::__construct();
    }
    public function checkUser($email, $password) {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT idUser FROM user WHERE Email = :email AND Password = :password";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':password' => $password
        ));
        return $sth->fetchAll();
    }
    
    public function getId($email){
        $sql = "SELECT idUser, Salt FROM user WHERE Email = :email;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email
        ));
        return $sth->fetchAll();
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
    
    public function updateUser($email, $salt, $password){
        $sql = "UPDATE user SET Salt = :salt, Password = :Password WHERE Email = :email;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':email' => $email,
            ':salt' => $salt,
            'Password' => $password
        ));
    }
    
    public function create($firstname, $insertion, $lastname, $gender, $birthdate, $housenumber, $addition, $zipcode, $city, $state, $phonenumber, $email, $password, $salt, $street){
        $sql = "INSERT INTO `user` (`Email`,`Password`,`Salt`,`Firstname`,`Middlename`,`Lastname`,`Street`,`Housenumber`,`Zipcode`,`City`,`Phonenumber`,`Gender`,`Birthday`,`State`,`Addition`) 
                VALUES (:Email,:Password,:Salt,:Firstname,:Middlename,:Lastname,:Street,:Housenumber,:Zipcode,:City,:Phonenumber,:Gender,:Birthday,:State,:Addition);";  
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':Firstname' => $firstname, 
            ':Middlename' => $insertion,
            ':Lastname' => $lastname, 
            ':Gender' => $gender, 
            ':Birthday' => $birthdate, 
            ':Housenumber' => $housenumber, 
            ':Addition' => $addition, 
            ':Zipcode' => $zipcode, 
            ':City' => $city, 
            ':State' => $state, 
            ':Phonenumber' => $phonenumber, 
            ':Email' => $email, 
            ':Password' => $password, 
            ':Salt' => $salt,
            ':Street' => $street
        ));
        $last_id = $this->pdo->lastInsertId();
        return $last_id;
    }
    
    public function customer($idUser, $AccountType, $CompanyName, $KvKNumber, $KvKDocument, $PaymentPreference){
        $sql = "INSERT INTO `customer`(`idUser`, `AccountType`, `CompanyName`, `KvKNumber`, `KvKDocument`, `PaymentPreference`) VALUES (:idUser, :AccountType, :CompanyName, :KvKNumber, :KvKDocument, :PaymentPreference);";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':idUser' => $idUser,
            ':AccountType' => $AccountType,
            ':CompanyName' => $CompanyName,
            ':KvKNumber' => $KvKNumber,
            ':KvKDocument' => $KvKDocument,
            ':PaymentPreference' => $PaymentPreference
        ));
    }
    
    public function courier($idUser, $Status, $CurriculumVitae, $Photo, $Identification){
        $sql = "INSERT INTO `courier`(`idUser`, `Status`, `CurriculumVitae`, `Photo`, `Identification`) VALUES (:idUser, :Status, :CurriculumVitae, :Photo, :Identification);";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':idUser' => $idUser,
            ':Status' => $Status,
            ':CurriculumVitae' => $CurriculumVitae,
            ':Photo' => $Photo,
            ':Identification' => $Identification,
        ));
    }
    
    public function getUser($idUser){
        $sql = "SELECT * FROM user u 
                LEFT JOIN customer c ON u.idUser = c.idUser 
                LEFT JOIN courier o ON o.idUser = c.idUser WHERE u.idUser =:idUser;";
        $sth = $this->pdo->prepare($sql);
        $sth->execute(array(
            ':idUser' => $idUser
        ));
        return $sth->fetch();
    }
    
    public function update($firstname, $insertion, $lastname, $gender, $birthdate, $housenumber, $addition, $zipcode, $city, $state, $phonenumber, $email){
        $sql = "UPDATE `user` SET `idUser`= :idUser,`Email`=:Email,`Password`=:Password,`Firstname`=:Firstname,`Middlename`=[value-6],`Lastname`=[value-7],`Street`=[value-8],`Housenumber`=[value-9],`Zipcode`=[value-10],`City`=[value-11],`Country`=[value-12],`Phonenumber`=[value-13],`Gender`=[value-14] WHERE 1";
        
        /*
        ':idUser'
        ':Email'
        ':Password'
        ':Firstname'
        ''
        ''
        ''
        ''
        ''
        ''
        ''
        ''*/
        
    }
    
   
}
