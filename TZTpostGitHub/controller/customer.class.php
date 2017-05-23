<?php

class Customer extends Controller{

    public function __construct(){
	parent::__construct();
        $this->view->title = 'TZT-Post'; // naam title
    }

    /*public function index(){
        $this->view->render(get_class($this), 'index');
    }*/
    
    public function create(){
        if($_POST){
            //ss
        }
        $this->view->render(get_class($this), 'create');
    }
    
}