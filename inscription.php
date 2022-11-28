<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Inscription</title>
    </head>

    <body>
        <?php include 'header.php' ?>

        <main class="main-inscription">

            <h2>INSCRIPTION</h2>

            <form action="" method="post" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" id="prenom" required>

                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" required>

                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>

                <label for="confirm-password">Confirm password</label>
                <input type="password" name="confirm-password" id="confirm-password" required>

                <input type="submit" value="Inscription">
            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
