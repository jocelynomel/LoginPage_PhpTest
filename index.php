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
        <title></title>
    </head>
    
    <body>
        <div class="container">
                <div class="row">
                        <div class="text-center">
                                <div class="caption">
                                        <h1>Sign in or sign up</h1>
                                </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-1 col-lg-offset-4 text-center">
                                <div class="search-box">
                                        <form action="/projet_test_php_java/SignIn.php" class="loginForm">
                                                <div class="input-group">
                                                    <input type="submit" id="signIn" class="btn btn-lg  form-control" value="Sign in">
                                                </div>
                                        </form>
                                </div>
                        </div>
                        <div class="col-lg-1 col-lg-offset-1 text-center">
                                <div class="search-box">
                                        <form action="/projet_test_php_java/SignUp.php" class="loginForm">
                                                <div class="input-group">
                                                    <input type="submit" id="signUp" class="btn btn-lg form-control" value="Sign up">
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
    </body>
</html>
