<?php

class Courier extends Controller{

    public function __construct(){
	parent::__construct();
        $this->view->title = 'TZT-Post'; // naam title
    }

    public function index(){
        $this->view->render(get_class($this), 'index');
    }
    
    public function create(){
        $this->view->js = array('postcode');
        
        if ($_POST) {
            $data = $this->checkVars($_POST);

            if(in_array(false, $data)){
                $this->view->check = $data;
                $this->view->data = $_POST;
            } else {
                //data opslaan!
            }

            }
        $this->view->render(get_class($this), 'create');
    }
    
    public function availability(){
        //$this->view->data = $this->model->getAll($_SESSION['ID']);
        $this->view->render(get_class($this), 'availability');
    }
    
    public function add(){
        if($_POST){
            
           $Structural = isset($_POST['Structural']) ? true : false;
           $EverythingFromStation = isset($_POST['EverythingFromStation']) ? true : false;
           $EverythingTraject = isset($_POST['EverythingTraject']) ? true : false;
           $Structural = isset($_POST['Structural']) ? true : false;
           $TravelDate = $_POST['TravelDate'];
           $TravelType = $_POST['TravelType'];
            /*
array(7) {
  ["From_idStation"]=&gt;
  string(1) "1"
  ["To_idStation"]=&gt;
  string(1) "2"
  ["EverythingFromStation"]=&gt;
  string(0) ""
  ["Structural"]=&gt;
  string(0) ""
  ["TravelDate"]=&gt;
  string(10) "2017-06-09"
  ["TravelType"]=&gt;
  string(5) "Enkel"
  ["EverythingTraject"]=&gt;
  string(0) ""
}


    
        
             *              */
            var_dump($_POST);
        }
        $this->view->render(get_class($this), 'add');
    }
    
    private function checkVars($data){
        return array(
            true,
            $this->checkInput($data["FirstName"], "S"),//1
            true,//$this->checkInput($data["Insertion"], "S"),2
            $this->checkInput($data["LastName"], "S"),//3
            $this->checkInput($data["Gender"], "I"),//4
            $this->checkInput($data["BirthDate"], "D"),//5
            ($this->checkInput($data["Password"], "S") && $data['Password'] == $data['RepeatPassword'] ),//6
            ($this->checkInput($data["RepeatPassword"], "S") && $data['Password'] == $data['RepeatPassword'] ),//7
            $this->checkInput($data["huisnummer"], "I"),//8
            true,//$this->checkInput($data["addition"], "S"),9
            $this->checkInput($data["postcode"], "P"),//10
            $this->checkInput($data["street"], "S"),//11
            $this->checkInput($data["city"], "S"),//12
            $this->checkInput($data["state"], "S"),//13
            $this->checkInput($data["phone"], "I"),//14
            $this->checkInput($data["email"], "E"),//15
        );
    }
    
}
