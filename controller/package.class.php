<?php

class Package extends Controller{

    public function __construct(){
	parent::__construct();
        $this->view->title = 'TZT-Post'; // naam title
    }

    public function index(){
        $this->view->render(get_class($this), 'index');
    }
    
    public function create(){
            
        $this->view->render(get_class($this), 'createWithAccount');
        
//        To be used when login is possible:
//        
//        if(isset($_SESSION['ID']) && $_SESSION['ID'] != null) {
//            $this->view->render(get_class($this), 'createWithAccount');
//        } else {
//            $this->view->render(get_class($this), 'createWithoutAccount');
//        }
    }
    
    public function createWithAccount() {
        
        
        if ($_POST) {
            $data = $this->checkVars($_POST);

            if(in_array(false, $data)){
                $this->view->check = $data;
                $this->view->data = $_POST;
            } else {
                //data opslaan!
            }

            }
        
    }
    
    private function checkVars($data){
        return array(
            $this->checkInput($data["Mass"], "I") && $data["Mass"] <= 25,//0
            rsort($data["Size"]),
            $this->checkInput($data["Size"][0], "I") && $data["Size"][0] <= 176,//1
            $this->checkInput($data["Size"][1], "I") && $data["Size"][0] <= 78,//2
            $this->checkInput($data["Size"][2], "I") && $data["Size"][0] <= 58,//3
            $this->checkInput($data["PickUpDate"], "D"),//4
            $this->checkInput($data["PickUpZipCode"], "S"),//5
            $this->checkInput($data["PickUpHousenumber"], "I"),//6
            $this->checkInput($data["PickUpHousenumberAddition"], "S"),//7
            $this->checkInput($data["RepeatPassword"], "S"),//8
            $this->checkInput($data["PickUpAddress"], "S"),//9
            $this->checkInput($data["PickUpCity"], "S"),//10
            $this->checkInput($data["PickUpState"], "S"),//11
            $this->checkInput($data["Addressee"], "S"),//12
            $this->checkInput($data["DeliveryDate"], "D"),//13
            $this->checkInput($data["DeliveryZipCode"], "S"),//14
            $this->checkInput($data["DeliveryHouseNumber"], "I"),//15
            $this->checkInput($data["DeliveryHouseNumberAddition"], "S"),//16
            $this->checkInput($data["DeliveryAddress"], "S"),//17
            $this->checkInput($data["DeliveryCity"], "S"),//18
            $this->checkInput($data["DeliveryState"], "S"),//19
            );
    }
    
}