<?php

class View {

    function __construct() {
        
    }

    public function message($message, $type = true) {
        $this->message = '<div class="alert alert-'.(($type) ? 'success' : 'danger' ).'" role="alert">
                    '. $message .'
                </div>';
    }

    public function input($type, $name, $error, $erromssg = null, $required = false, $placeholder = false, $class = false) {
        echo    '<div class = "col-sm-6 ' . (($error) ? 'has-error' : '') . '">
                    <input type="'.$type.'" class="form-control ' . (($class) ? $class : '') . '" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'" '.(($required) ? $class : '').'aria-required="true" aria-describedby="'.$name.'-error">
                    '. (($error) ? '<em id = "'.$name.'-error" class="error help-block">'. $erromssg .'</em>' : '') .'
                </div>';
    }

    public function render($controller, $name, $noInclude = false) {
        if ($noInclude == true) {
            require 'view/' . $controller . '/' . $name . '.php';
        } else {
            require 'view/template/header.php';
            require 'view/' . $controller . '/' . $name . '.php';
            require 'view/template/footer.php';
        }
    }
    
    public function template($name){
        include_once 'view/template/' . $name . '.php';
    }
    
    
}

