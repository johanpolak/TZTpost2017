<?php

class Customer extends Controller{

    public function __construct(){
	parent::__construct();
        $this->view->title = 'TZT-Post'; // naam title
    }

    public function index(){
        $this->view->check = array();
        $this->view->render(get_class($this), 'index');
    }
    
    public function create(){
        var_dump($_POST);
        $this->view->render(get_class($this), 'create');
    }
    
}
