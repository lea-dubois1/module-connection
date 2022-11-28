<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Inscription</title>
    </head>

    <body>
        <?php include 'header.php' ?>

        <main>

            <h2>MODIFIER LE PROFIL</h2>

            <form action="" method="post" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" id="prenom" required>

                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" required>

                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>

                <label for="old-password">Old password</label>
                <input type="password" name="old-password" id="old-password" required>

                <label for="new-password">New password</label>
                <input type="password" name="new-password" id="new-password" required>

                <label for="confirm-password">Confirm new password</label>
                <input type="password" name="confirm-password" id="confirm-password" required>

                <input type="submit" value="Inscription">
            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
