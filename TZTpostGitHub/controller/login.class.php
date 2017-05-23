<?php

class login extends Controller {

    public function __construct() {
        parent::__construct();
        $this->view->title = 'TZT - Login'; // naam title
    }

    public function index() {
        $this->view->check = ['email' => true, 'password' => true];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['email']) && trim($_POST['email']) != '' &&
                    isset($_POST['password']) && trim($_POST['password']) != '') {
                try {
                    $maxAttempts = 3; 
                    $attemptsTime = 5;
                    $user = $this->model->checkUser($_POST['email'], $_POST['password']);
                    $tries = $this->model->checkTries($_POST['email'], $attemptsTime, $maxAttempts);
                    if (count($user) == 1 && count($tries) == 0) {
                        Session::init();
                        Session::set('id', $user[0]['id']);
                        Session::set('IP', $_SERVER['REMOTE_ADDR']);
                        header('Location: ' . URL . 'index');
                        die;
                    } else {
                        $this->model->insertTry($_POST['email'], $_SERVER['REMOTE_ADDR']);
                        if (count($tries) > 0) {
                            $this->view->message('You have too many times tried the wronge username/password. Please wait a few minutes to login', false);
                        } else {
                            $this->view->message('invalid username/password. Please try again', false);
                        }
                    }
                } catch (PDOException $e) {
                    //$this->view->message = $e->getMessage();
                }
            } else {
                if (empty($_POST['email'])) {
                    $this->view->check['email'] = false;
                }
                if (empty($_POST['Password'])) {
                    $this->view->check['password'] = false;
                }
            }
        }
        $this->view->render(get_class($this), "index");
    }

    public function uitloggen() {
        Session::destroy();
        header('location:' . URL);
    }

}
