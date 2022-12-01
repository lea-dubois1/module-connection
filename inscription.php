<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Signup</title>
    </head>

    <body>

        <?php include 'header.php' ?>
        <?php require 'signup.php' ?>

        <main class="main-inscription">

            <form action="" method="POST" class="formulaire">

                <h2>SIGNUP</h2>

                <label for="login">Login</label>
                <input type="text" name="login" value="<?php if($error){ echo $_POST['login'];} ?>" required> <!-- Rewrite the completed inputs if the passwords dont match -->

                <label for="prenom">First name</label>
                <input type="text" name="prenom" value="<?php if($error){ echo $_POST['prenom'];} ?>" required>

                <label for="nom">Last name</label>
                <input type="text" name="nom" value="<?php if($error){ echo $_POST['nom'];} ?>" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <label for="passwordConfirm">Confirm password</label>
                <input type="password" name="passwordConfirm" required>

                <input type="submit" value="Signup" name="submit" class="bouton">

                <?php

                    // Display error messages (cf signup.php) //
    
                    if($created) {echo '<strong>Success!</strong> Your account is now created and you can login.';}

                    if($error) {echo '<strong>Error!</strong> '. $error;}
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>

    </body>
</html>