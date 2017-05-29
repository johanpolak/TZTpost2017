<?php 
class Controller{

    function __construct(){
        $this->view = new View();
        Session::init();  
    }
    
    public function loadmodel($name){
	$path = 'model/' . $name . '.model.php';

	if(file_exists($path)){
	    require 'model/' . $name . '.model.php';
	    $modelname = $name . '_Model';
	    $this->model = new $modelname;
	}
    }
    
    public function rights($array){
        if(!in_array($_SESSION['user']['rol'], $array)){
            $this->view->render('Login','login');  
            exit;
        }
    }
    
    /*
    public function checkDatum($data){
        if (!$data) {
            return false;
        }
        try {
            new \DateTime($data);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }*/
    
    public function checkInput($data, $type){
        $x = false;
        switch($type){
            case "E"://email
                $x = ((filter_var($data, FILTER_VALIDATE_EMAIL)) ? true : false);
                break;
            case "S"://string
                $x = (!empty($data) ? true : false);
                break;
            case "P"://postcode
                $regex = '~\A[1-9]\d{3} ?[a-zA-Z]{2}\z~';
                $x = (preg_match($regex, $data) ? true : false);
                break;
            case "I"://int
                $x = is_int($data);
                break;
        }
        return $x;
    }
    
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    /*
    public function checkIBAN($iban)
    {
        $iban = strtolower(str_replace(' ','',$iban));
        $Countries = array('al'=>28,'ad'=>24,'at'=>20,'az'=>28,'bh'=>22,'be'=>16,'ba'=>20,'br'=>29,'bg'=>22,'cr'=>21,'hr'=>21,'cy'=>28,'cz'=>24,'dk'=>18,'do'=>28,'ee'=>20,'fo'=>18,'fi'=>18,'fr'=>27,'ge'=>22,'de'=>22,'gi'=>23,'gr'=>27,'gl'=>18,'gt'=>28,'hu'=>28,'is'=>26,'ie'=>22,'il'=>23,'it'=>27,'jo'=>30,'kz'=>20,'kw'=>30,'lv'=>21,'lb'=>28,'li'=>21,'lt'=>20,'lu'=>20,'mk'=>19,'mt'=>31,'mr'=>27,'mu'=>30,'mc'=>27,'md'=>24,'me'=>22,'nl'=>18,'no'=>15,'pk'=>24,'ps'=>29,'pl'=>28,'pt'=>25,'qa'=>29,'ro'=>24,'sm'=>27,'sa'=>24,'rs'=>22,'sk'=>24,'si'=>19,'es'=>24,'se'=>24,'ch'=>21,'tn'=>24,'tr'=>26,'ae'=>23,'gb'=>22,'vg'=>24);
        $Chars = array('a'=>10,'b'=>11,'c'=>12,'d'=>13,'e'=>14,'f'=>15,'g'=>16,'h'=>17,'i'=>18,'j'=>19,'k'=>20,'l'=>21,'m'=>22,'n'=>23,'o'=>24,'p'=>25,'q'=>26,'r'=>27,'s'=>28,'t'=>29,'u'=>30,'v'=>31,'w'=>32,'x'=>33,'y'=>34,'z'=>35);
        if(strlen($iban) == $Countries[substr($iban,0,2)]){
            $MovedChar = substr($iban, 4) . substr($iban,0,4);
            $MovedCharArray = str_split($MovedChar);
            $NewString = "";
            foreach($MovedCharArray AS $key => $value){
                if(!is_numeric($MovedCharArray[$key])){
                    $MovedCharArray[$key] = $Chars[$MovedCharArray[$key]];
                }
                $NewString .= $MovedCharArray[$key];
            }
            if(bcmod($NewString, '97') == 1)
            {
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
        else{
            return FALSE;
        }
    }*/
    
    
}