<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <title>Sign up</title>
    </head>
    
    <body>
        <div class="container">
                <div class="row">
                        <div class="col-lg-4 col-lg-offset-4 text-center">
                                <div class="search-box">
                                        <div class="caption">
                                                <h3>Please enter your sign-up informations</h3>
                                                <p><b><u>You will be automatically redirected to the sign in page</u></b></p>
                                        </div>
                                        <form action="/projet_test_php_java/idValidation.php" method="post" id="loginForm" class="loginForm">
                                                <div class="input-group">
                                                        <input type="text" name="loginMail" id="loginMail" class="form-control" placeholder="Your mail x..x@y..y.com" required>
                                                        <input type="password" name="pswd" id="pswd" class="form-control" placeholder="Password" required>
                                                        <input type="password" id="pswdConfirm" class="form-control" placeholder="Confirm password" required>
                                                        <input type="submit" name="signUpSubmit" id="submit" class="form-control" value="Sign up">
                                                </div>
                                        </form>
                                </div>
                        </div>
                        <div class="col-lg-4">
                                    <div class="aro-pswd_info">
                                            <div id="pswd_info">
                                                    <h4>Need following requirements</h4>
                                                        <ul>
                                                            <li id="blank" class="invalid">At least <strong>one entry</strong></li>
                                                            <li id="mail" class="invalid">Respect following mail format <strong>[x..x]@[y..y].com</strong></li>
                                                        </ul>
                                                            <hr></hr>
                                                        <ul>
                                                            <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                                                            <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                                                            <li id="number" class="invalid">At least <strong>one number</strong></li>
                                                            <li id="length" class="invalid">Minimum of <strong>8 characters</strong></li>
                                                            <li id="space" class="invalid">At least one <strong> [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
                                                            <li id="pswdConf" class="invalid">Both password must <strong> match </strong></li>
                                                        </ul>
                                            </div>
                                    </div>
                        </div>
                </div>
        </div>
        <script src="loginScripts.js"></script> 
    </body>
</html>