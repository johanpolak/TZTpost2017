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
        if($_POST){
            

            exit;
        }
        $this->view->render(get_class($this), 'create');
    }
    /*
    private function checkVars($data){
        $data["FirstName"];
        $data["Insertion"];
        $data["LastName"];
        $data["Gender"];
        $data["BirthDate"];
        $data["Password"];
        $data["RepeatPassword"];
        $data["HouseNumber"];
        $data["ZipCode"];
        $data["PhoneNumber"];
        $data["EmailAddress"];
        $data["AccountNumber"];
    }*/
    
}
