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

            <form action="login.php" method="POST" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <input type="submit" value="Connexion">

                <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
