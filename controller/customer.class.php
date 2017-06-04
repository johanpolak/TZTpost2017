<?php

class Customer extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->js = array('postcode');
        $this->view->title = 'TZT-Post'; // naam title
    }

    public function index() {
        $this->view->render(get_class($this), 'index');
    }

    public function create() {
        if ($_POST) {
            $data = $this->checkVars($_POST);
            var_dump($_POST);
            exit;
            if(in_array(false, $data)){
                $this->view->check = $data;
                $this->view->data = $_POST;
            } else {
                ///!!!!!
                $this->model->create(`idUser`, `AccountType`, `CompanyName`, `KvKNumber`, `KvKDocument`, `PaymentPreference`);
            }

            }
        $this->view->action = "create";
        $this->view->render(get_class($this), 'create');
    }
    
    private function checkVars($data){
        return array(        
            ($data["AccountType"] == 1 ? $this->checkInput($data["CompanyName"], "S") : true),//16
            ($data["AccountType"] == 1 ? $this->checkInput($data["KvKNumber"], "I") : true),//17
            $this->checkInput($data["PaymentPreference"], "I"),//18
            $this->checkInput($data["AccountNumber"], "R")//19
        );
    }
    
    public function edit(){
        if($_POST){
            $data = $this->checkVars($_POST);

            if(in_array(false, $data)){
                $this->view->check = $data;
                $this->view->data = $_POST;
            } else {
                //data opslaan!
            }
        }
        $this->view->data = array(
            1,//0
            "ans",//1
            null,//$this->checkInput($data["Insertion"], "S"),2
            "Michielsen",//3
            1,//4
            "26-12-1990",//5
            "123",//6
            "123",//7
            11,//8
            null,//$this->checkInput($data["addition"], "S"),9
            "8251MP",//10
            "De fazant",//11
            "Dronten",//12
            "Flevoland",//13
            0321317110,//14
            "Hans@consor.nl",//15
            "Consor",//16
            2382813821,//17
            2,//18
            "NLABNA0609481916");
        $this->view->action = "edit";
        $this->view->render(get_class($this), 'create');
    }
}
