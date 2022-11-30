<?php require_once 'login.php' ?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Connexion</title>
    </head>

    <body>
        <?php include 'header.php' ?>

        <main>

            <h2>CONNEXION</h2>

            <form action="" method="POST" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <input type="submit" value="Connexion" name="submit">

                <?php
                    // Display error messages (cf login.php) //

                    if($error1){echo $error1;}

                    if($error2){echo $error2;}
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
