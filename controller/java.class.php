<?php

class Java extends Controller{

    public function __construct(){
	parent::__construct();
        $this->checkKey($_POST['Key']);
    }
    
    private function checkKey($key){
        if($key != "XRYLSTO92ASD11#@SD"){
            exit;
        }
    }
    
    public function getAllCustomers() {
        return $this->model->getAllCustomers();
    }

    public function getAllCouriers() {
        return $this->model->getAllCouriers();
    }
    
    public function getAllPackages(){
       return $this->model->getAllPackages();
    }
    
    public function updateCustomer(){
        $this->model->updateCustomer($_POST['idUser'], $_POST['AccountType'], $_POST['CompanyName'], $_POST['KvKNumber'], $_POST['KvKDocument'], $_POST['PaymentPreference']);
        $this->model->updateUser($_POST['idUser'], $_POST['Firstname'], $_POST['Middlename'], $_POST['Lastname'], $_POST['Street'], $_POST['Housenumber'], $_POST['Zipcode'], $_POST['City'], $_POST['Country'], $_POST['Phonenumber'], $_POST['Gender']);
    }
    
    public function updateCourier(){
        $this->model->updateCourier($_POST['idUser'], $_POST['$Status'], $_POST['CurriculumVitae'], $_POST['Photo'], $_POST['Identification']);
        $this->model->updateUser($_POST['idUser'], $_POST['Firstname'], $_POST['Middlename'], $_POST['Lastname'], $_POST['Street'], $_POST['Housenumber'], $_POST['Zipcode'], $_POST['City'], $_POST['Country'], $_POST['Phonenumber'], $_POST['Gender']);
    }
    
    
    
    
     
    
}
