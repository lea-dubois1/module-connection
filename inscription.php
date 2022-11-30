<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Inscription</title>
    </head>

    <body>

        <?php require_once 'signup.php' ?>
        <?php include 'header.php' ?>

        <main class="main-inscription">

            <h2>INSCRIPTION</h2>

            <form action="" method="POST" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" value="<?php if($showError){ echo $_POST['login'];} ?>" required> <!-- Rewrite the completed inputs if the passwords dont match -->

                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" value="<?php if($showError){ echo $_POST['prenom'];} ?>" required>

                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?php if($showError){ echo $_POST['nom'];} ?>" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <label for="passwordConfirm">Confirm password</label>
                <input type="password" name="passwordConfirm" required>

                <input type="submit" value="Inscription">

                <?php

                    // Display error messages (cf signup.php) //
    
                    if($showAlert) {echo '<strong>Success!</strong> Your account is now created and you can login.';}
        
                    if($showError) {echo '<strong>Error!</strong> '. $showError;}
            
                    if($exists) {echo '<strong>Error!</strong> '. $exists;}
            
                    if($error1) {echo '<strong>Error!</strong> '. $error1;}
            
                    if($error2) {echo '<strong>Error!</strong> '. $error2;}

                    if($error3) {echo '<strong>Error!</strong> '. $error3;}
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>

    </body>
</html>