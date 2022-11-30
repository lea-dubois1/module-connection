<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Inscription</title>
    </head>

    <body>
        <?php include 'header.php' ?>
        <?php require 'change.php' ?>

        <main>

            <h2>MODIFIER LE PROFIL</h2>

            <form action="" method="POST" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" value="<?php {echo $_SESSION['login'];} ?>" required>

                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" value="<?php {echo $_SESSION['prenom'];} ?>" required>

                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" required>

                <label for="old-password">Old password</label>
                <input type="password" name="old-password" id="old-password">

                <label for="new-password">New password</label>
                <input type="password" name="new-password" id="new-password">

                <label for="confirm-password">Confirm new password</label>
                <input type="password" name="confirm-password" id="confirm-password">

                <input type="submit" value="Eregistrer" name="submit">

                <?php

                    if($errorLog1) {echo '<strong>Error!</strong> '. $errorLog1;}

                    if($errorLog2) {echo '<strong>Error!</strong> '. $errorLog2;}

                    if($error2) {echo '<strong>Error!</strong> '. $error2;}

                    if($error3) {echo '<strong>Error!</strong> '. $error3;}

                    if($error4) {echo '<strong>Error!</strong> '. $error4;}
                    
                    if($error5) {echo '<strong>Error!</strong> '. $error5;}
                    
                    if($errorPass1) {echo '<strong>Error!</strong> '. $errorPass1;}

                    if($errorPass2) {echo '<strong>Error!</strong> '. $errorPass2;}

                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>