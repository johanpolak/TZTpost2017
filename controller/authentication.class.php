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
                    $email = $this->test_input(strtolower($_POST['email']));
                    $password = $this->test_input($_POST['password']);
                    $maxAttempts = 3;
                    $attemptsTime = 5;
                    $userid = $this->model->getId($email);
                    if (count($userid) != 1) {
                        $this->view->message('Wrong username and / or password. 1', false);
                        $this->view->render(get_class($this), "index");
                        return;
                    }
                    $password = hash('sha512', $userid[0][1] . $password);
                    $user = $this->model->checkUser($email, $password);
                    $tries = $this->model->checkTries($email, $attemptsTime, $maxAttempts);

                    if (count($user) == 1 && count($tries) == 0) {
                        $newSalt = $this->generateSalt();
                        $newPassword = hash('sha512', $newSalt . $_POST['password']);
                        $this->model->updateUser($email, $newSalt, $newPassword);
                        Session::init();
                        Session::set("ID", $user[0]['idUser']);
                        header('location: /index.php');
                        die;
                    } else {
                        $this->model->insertTry($userid[0][0], $_SERVER['REMOTE_ADDR']);
                        if (count($tries) > 0) {
                            $this->view->message('To many failed logins. You are blocked for 5 minutes.', false);
                        } else {
                            $this->view->message('Wrong username and / or password 2.', false);
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
        $this->view->render('content', "index");
    }

    public function create() {
        $this->view->action = "create";
        if ($_POST) {
            $id = null;
            $data = $this->checkVars($_POST);
            if (in_array(false, $data)) {
                $this->view->check = $data;
                $this->view->data = $_POST;
            } else {
                $salt = $this->generateSalt();
                try {
                    $id = $this->model->create(
                            $this->test_input($_POST["FirstName"]), $this->test_input($_POST["Insertion"]), $this->test_input($_POST["LastName"]), $this->test_input($_POST["Gender"]), $this->test_input($_POST["BirthDate"]), $this->test_input($_POST["huisnummer"]), $this->test_input($_POST["addition"]), $this->test_input($_POST["postcode"]), $this->test_input($_POST["city"]), $this->test_input($_POST["state"]), $this->test_input($_POST["phone"]), $this->test_input($_POST["email"]), hash('sha512', $salt . $_POST['Password']), $salt, $_POST['street']
                    );
                    if ($_POST['Type'] == 0) {
                        $this->model->customer($id, $this->test_input($_POST["AccountType"]), $this->test_input($_POST["CompanyName"]), $this->test_input($_POST["KvKNumber"]), 'BLOB SHIT NOG DOEN!', $this->test_input($_POST["PaymentPreference"]));
                    } else {
                        $this->model->courier($id, 0, 'BLOB KOMT NOG!', 'BLOB KOMT NOG!', 'BLOB KOMT NOG!');
                    }
                    Session::init();
                    Session::set("ID", $user[0]['idUser']);
                } catch (PDOException $e) {
                    if ($e->errorInfo[1] == 1062) {
                        $this->view->data = $_POST;
                        $this->view->js = array('postcode');
                        $this->view->message("E-mail adres is al in gebruik!", false);
                        $this->view->render(get_class($this), 'create');
                        exit;
                    } else {
                        var_dump($e);
                    }
                }
                $this->view->render('content', "index");
                exit;
            }
        }
        $this->view->js = array('postcode');
        $this->view->render(get_class($this), 'create');
    }

    public function edit() {
        $this->view->data = $this->model->getUser($_SESSION['ID']);
        var_dump($this->view->data);
        if ($_POST) {
            $data = $this->checkVars($_POST);
            if (in_array(false, $data)) {
                $this->view->check = $data;
                $this->view->data = $_POST;
            } else {
                
            }
        }
        $this->view->js = array('postcode');
        $this->view->render(get_class($this), 'edit');
    }

    private function checkVars($data) {
        //klant
        if ($data['Type'] === 0) {
            //particulier
            if ($data['AccountType'] === 0) {
                return array(
                    true, //0
                    $this->checkInput($data["FirstName"], "S"), //1
                    true, //$this->checkInput($data["Insertion"], "S"),2
                    $this->checkInput($data["LastName"], "S"), //3
                    $data["Gender"] == "Male" || $data["Gender"] == "Female", //4
                    $this->checkInput($data["BirthDate"], "D"), //5
                    ($this->checkInput($data["Password"], "S") && $data['Password'] == $data['RepeatPassword'] ), //6
                    ($this->checkInput($data["RepeatPassword"], "S") && $data['Password'] == $data['RepeatPassword'] ), //7
                    $this->checkInput($data["huisnummer"], "I"), //8
                    true, //$this->checkInput($data["addition"], "S"),9
                    $this->checkInput($data["postcode"], "P"), //10
                    $this->checkInput($data["street"], "S"), //11
                    $this->checkInput($data["city"], "S"), //12
                    $this->checkInput($data["state"], "S"), //13
                    $this->checkInput($data["phone"], "I"), //14
                    $this->checkInput($data["email"], "E"), //15
                    true, //16 bedrijfsnaam
                    true, //17 kvk nummer
                    true,
                    $this->checkInput($data["AccountNumber"], "$")//19
                );
                //zakelijk    
            } else {
                return array(
                    true, //0
                    $this->checkInput($data["FirstName"], "S"), //1
                    true, //$this->checkInput($data["Insertion"], "S"),2
                    $this->checkInput($data["LastName"], "S"), //3
                    $data["Gender"] == "Male" || $data["Gender"] == "Female", //4
                    $this->checkInput($data["BirthDate"], "D"), //5
                    ($this->checkInput($data["Password"], "S") && $data['Password'] == $data['RepeatPassword'] ), //6
                    ($this->checkInput($data["RepeatPassword"], "S") && $data['Password'] == $data['RepeatPassword'] ), //7
                    $this->checkInput($data["huisnummer"], "I"), //8
                    true, //$this->checkInput($data["addition"], "S"),9
                    $this->checkInput($data["postcode"], "P"), //10
                    $this->checkInput($data["street"], "S"), //11
                    $this->checkInput($data["city"], "S"), //12
                    $this->checkInput($data["state"], "S"), //13
                    $this->checkInput($data["phone"], "I"), //14
                    $this->checkInput($data["email"], "E"), //15
                    $this->checkInput($data["CompanyName"], "S"), //16 bedrijfsnaam
                    $this->checkInput($data["KvKNumber"], "I"), //17 kvk nummer
                    true,
                    $this->checkInput($data["AccountNumber"], "R")//19
                );
            }
            //koerier
        } else {
            return array(
                true,
                $this->checkInput($data["FirstName"], "S"), //1
                true, //$this->checkInput($data["Insertion"], "S"),2
                $this->checkInput($data["LastName"], "S"), //3
                $data["Gender"] == "Male" || $data["Gender"] == "Female", //4
                $this->checkInput($data["BirthDate"], "D"), //5
                ($this->checkInput($data["Password"], "S") && $data['Password'] == $data['RepeatPassword'] ), //6
                ($this->checkInput($data["RepeatPassword"], "S") && $data['Password'] == $data['RepeatPassword'] ), //7
                $this->checkInput($data["huisnummer"], "I"), //8
                true, //$this->checkInput($data["addition"], "S"),9
                $this->checkInput($data["postcode"], "P"), //10
                $this->checkInput($data["street"], "S"), //11
                $this->checkInput($data["city"], "S"), //12
                $this->checkInput($data["state"], "S"), //13
                $this->checkInput($data["phone"], "I"), //14
                $this->checkInput($data["email"], "E"), //15
            );
        }
    }

}
