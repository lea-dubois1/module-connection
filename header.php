<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="header.css"/>
    </head>

    <header>

        <?php session_start()?>

        <nav>

            <a class="lien" href="index.php">Home</a>
            <?php if(!$_SESSION){echo '<a class="lien" href="connexion.php">Login</a>';} ?>
            <?php if(!$_SESSION){echo'<a class="lien" href="inscription.php">Signup</a>';} ?>
            <?php if($_SESSION){echo '<a class="lien" href="profil.php">Profile</a>';} ?>
            <?php if($_SESSION){if($_SESSION['login'] == 'admin'){ echo '<a class="lien" href="admin.php">Admin</a>';}} ?>
        </nav>
    </header>
</html>