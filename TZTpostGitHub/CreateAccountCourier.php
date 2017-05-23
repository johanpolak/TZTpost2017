<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <title></title>
    </head>
    
    <body>
        <div class="container">
            <div id="personalia" class="col-sm-12">
                <div class="sub-header">
                    Persoonsgegevens
                </div>
                <div class="col-sm-6">
                    <form class="form-horizontal">
                        <?php include 'CreateAccountBase1.php'; ?>
                    </form>
                </div>
                <div class="col-sm-6">
                    <?php include 'CreateAccountBase2.php'; ?>
                </div>
            </div>

            <div class="col-xs-12"><hr></div>

            <div id="CompanyData" class="col-sm-12">
                <div class="col-sm-6">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">        
                            <label class="control-label col-sm-6" for="CV">Curriculum Vitae</label>
                            <div class="col-sm-6">          
                                <button type="button" class="btn btn-default">Selecteer bestand</button>
                            </div>
                        </div>
                        <div class="form-group">        
                            <label class="control-label col-sm-6" for="Photo">Foto</label>
                            <div class="col-sm-6">          
                                <button type="button" class="btn btn-default">Selecteer bestand</button>
                            </div>
                        </div>
                        <div class="form-group">        
                            <label class="control-label col-sm-6" for="CopyIdentification">Kopie identiteitsbewijs</label>
                            <div class="col-sm-6">          
                                <button type="button" class="btn btn-default">Selecteer bestand</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div id="PaymentData" class="col-sm-12">
                <div class="col-sm-6">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                            <label class="control-label col-sm-6" for="AccountNumber">Rekeningnummer</label>
                            <div class="col-sm-6">          
                                <input type="text" class="form-control" id="AccountNumber" name="AccountNumber">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox TermsAndConditions">
                                <label><input type="checkbox" value="">Ik accepteer de algemene voorwaarden van TZT post</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="">          
                <button type="button" class="btn btn-default Cancel">Annuleren</button>
            </div>
            <div class="">          
                <button type="button" class="btn btn-default Registrate">Registreren</button>
            </div>
        </div>
    </body>
</html>
