<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Login</title>
    </head>

    <body>
        <?php include 'header.php' ?>
        <?php require 'login.php' ?>
        <main>


            <form action="" method="POST" class="formulaire">
            
                <h2>LOGIN</h2>

                <label for="login">Login</label>
                <input type="text" name="login" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <input type="submit" value="Login" name="submit" class="bouton">

                <?php
                    // Display error messages (cf login.php) //

                    if($error) {echo '<strong>Error!</strong> '. $error;}
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
