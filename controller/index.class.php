<?php

class Index extends Controller{

    public function __construct(){
	parent::__construct();
        $this->view->title = 'TZT-Post'; // naam title
    }

    public function index(){
        $this->view->render('content', 'index');
    }
}
