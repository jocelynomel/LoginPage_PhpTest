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
        <title>Sign in</title>
    </head>
    
    <body>
        <div class="container">
                <div class="row">
                        <h1>List of users</h1>
                        <ul class="list-group">
                        <?php
                            try
                            {
                                $bdd = new PDO('mysql:host=localhost;dbname=test_php_java;charset=utf8', 'root', '');
                            }
                            catch (Exception $e) 
                            {
                                die('Erreur : ' . $e->getMessage());
                            }
                            if(isset($_POST['signUpSubmit']))
                            {
                                $reponse = $bdd->prepare('INSERT INTO users (login, password) VALUES (:login, :password)');
                                $reponse->bindParam(':login', $_POST['loginMail']);
                                $reponse->bindParam(':password', $_POST['pswd']);
                                $reponse->execute();
                                $reponse->closeCursor(); // Termine le traitement de la requête
                                header('Location: /projet_test_php_java/SignIn.php');
                            }
                            else if (isset($_POST['signInSubmit']))
                            {
                                $reponse = $bdd->prepare("SELECT * FROM users where login = :login and password = :password");
                                $reponse->bindParam(':login', $_POST['loginMail']);
                                $reponse->bindParam(':password', $_POST['pswd']);
                                $reponse->execute();
                                $donnees = $reponse->fetchAll();
                                if(count($donnees) ==0)
                                {
                                    header('Location: /projet_test_php_java/SignIn.php');
                                }
                                else
                                {
                                    $reponse = $bdd->query("SELECT * FROM users");
                                    $donnees = $reponse->fetchAll();
                                    foreach ($donnees as $ligne)
                                    {
                                        ?>
                                        <li class="list-group-item">
                                            <p>
                                            <strong>login</strong> : <?php echo $ligne['login']; ?><br />
                                            <strong>password</strong> : <?php echo $ligne['password']; ?><br />
                                            </p>
                                        </li>
                                        <?php
                                    }
                                }
                                $reponse->closeCursor(); // Termine le traitement de la requête
                            }
                        ?>
                        </ul>
                </div>
        </div>
        <script src="loginScripts.js"></script> 
    </body>
</html>
