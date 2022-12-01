<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Change profile</title>
    </head>

    <body>
        <?php include 'header.php' ?>
        <?php require 'change.php' ?>

        <main>

            <h2>CHANGE PROFILE</h2>

            <form action="" method="POST" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" value="<?php {echo $_SESSION['login'];} ?>" required>

                <label for="prenom">First name</label>
                <input type="text" name="prenom" value="<?php {echo $_SESSION['prenom'];} ?>" required>

                <label for="nom">Last name</label>
                <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" required>

                <label for="old-password">Password</label>
                <input type="password" name="old-password" id="old-password" required>

                <label for="new-password">New password</label>
                <input type="password" name="new-password" id="new-password">

                <label for="confirm-password">Confirm new password</label>
                <input type="password" name="confirm-password" id="confirm-password">

                <input type="submit" value="Edit" name="submit">

                <?php

                    if($error) {echo '<strong>Error!</strong> '. $error;}
                    if($ok >= 1) {echo "Your profil have been edited successfully";}

                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>