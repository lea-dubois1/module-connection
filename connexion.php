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

            <form action="" method="post" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" id="prenom" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" value="Connexion">
            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
