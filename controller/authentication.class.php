<?php
class Authentication extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render(get_class($this), "index");
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->checkInput($_POST['email'], "E") &&
                    isset($_POST['password']) && trim($_POST['password']) != '') {
                try {
                    $email = $this->test_input($_POST['email']);
                    $password = $this->test_input($_POST['password']);
                    //initialisatie
                    $maxAttempts = 3; //pogingen binnen aantal minuten (zie volgende)
                    $attemptsTime = 5; //tijd waarin pogingen gedaan mogen worden (in minuten, wil je dat in seconden e.d. met je de query aanpassen)
                    //ophalen userID, salt
                    $check = $this->model->getId($_POST['email']);

                    //check of email bestaat
                    if (count($check['id']) <= 0) {
                        $this->view->message = 'Wrong username and / or password.';
                        $this->view->render(get_class($this), "login");
                        return;
                    } else {
                        $password = hash('sha512', $check['salt'] . $password);
                    }
                    
                    //check ww en email
                    $user = $this->model->checkUser($email, $password);

                    //ophalen inlogpogingen, alleen laatste vijf minuten
                    $tries = $this->model->checkTries($check['id'], $attemptsTime, $maxAttempts);
                    
                    if (count($user) == 1 && count($tries) == 0) {
                        //update salt
                        $this->model->updateUser($email, $this->generateSalt());
                        
                        Session::init();
                        Session::set("ID", $user['id']);

                        //pagina waar naartoe nadat er succesvol is ingelogd
                        header('location:' . URL . 'index');
                        die;
                    } else {
                        $this->model->insertTry($userid[0][0], $_SERVER['REMOTE_ADDR']);
                        if (count($tries) > 0) {
                            $this->view->message('To many failed logins. You are blocked for 5 minutes.', false);
                        } else {
                            $this->view->message('Wrong username and / or password.', false);
                        }
                    }
                } catch (PDOException $e) {
                    $this->view->message($e->getMessage(), false);
                            //oeps er is iets fout gegaan .. '
                }
                $this->pdo = NULL;
            } else {
                $this->view->message('Wrong username and / or password.', false);
            }
        }
        $this->view->render(get_class($this), "index");
    }

    private function generateSalt($max = 64) {
        $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*?";
        $i = 0;
        $salt = "";
        while ($i < $max) {
            $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
            $i++;
        }
        return $salt;
    }
    
    public function logout() {
        Session::destroy();
        $this->view->render('Content', "index");
    }

}
