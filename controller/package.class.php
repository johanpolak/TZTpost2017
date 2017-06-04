<?php

class Package extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'TZT-Post'; // naam title
    }

    public function index() {
        $this->view->render(get_class($this), 'index');
    }

    public function create() {
        if ($_POST) {
            if ($_SESSION) {
                var_dump($_POST);
                /*
        array(13) {
            ["Weight"]
            ["size"] = 
            array(3) {
                [0] = &gt;
                string(1) "1"
                [1] = &gt;
                string(1) "2"
                [2] = &gt;
                string(1) "3"
            }
            ["From_Zipcode"]
            ["From_Housenumber"]
            ["From_HouseNumberAddition"]
            ["From_City"]
            ["From_Street"]
            ["PickUpDate"]
            ["To_ZipCode"]
            ["To_HouseNumber"]
            ["To_HouseNumberAddition"]
            ["To_City"]
            ["To_Street"]
        }
*/
            }
        }

        if ($_SESSION) {
            $this->view->data = $this->model->getNaw($_SESSION['ID']);
            $this->view->render(get_class($this), 'createWithAccount');
        } else {
            $this->view->render(get_class($this), 'createWithoutAccount');
        }






//        To be used when login is possible:
//        
//        if($_SESSION) {
//            $this->view->render(get_class($this), 'createWithAccount');
//        } else {
//            $this->view->render(get_class($this), 'createWithoutAccount');
//        }
    }

}
