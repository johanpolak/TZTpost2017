<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="<?php echo URL ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo URL ?>public/css/style.css" type="text/css"/>
        <script src="<?php echo URL ?>public/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/jquery.validate.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/validate.js" type="text/javascript"></script>
        <script src="<?php echo URL ?>public/js/main.js" type="text/javascript"></script>
        <?php if(isset($this->js)){
            foreach($this->js as $key => $value){
                echo '<script src="' . URL . 'public/js/' . $value . '.js" type="text/javascript"/></script>';
            }
        } ?>
        <title>TZT-Post</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo URL ?>index">TZT-Post</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL ?>Customer/create">Create account customer</a></li>
                                <li><a href="<?php echo URL ?>Courier/create"">Create account courier</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                        if(isset($_SESSION['ID']) && $_SESSION['ID'] != null ){
                            echo '<li><a href="'. URL .'authentication/logout">Uitloggen</a></li>';
                        } else {
                            echo '<li><a href="'. URL .'authentication/login">Login</a></li>';
                        }
                        ?>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid">
            <?php echo ((isset($this->message) ? $this->message : '' )); ?>
