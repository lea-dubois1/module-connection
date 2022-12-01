<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Home</title>
    </head>

    <body>
        <?php include 'header.php' ?>

        <main>
            <h1 class="welcome">WELCOME <?php if($_SESSION){echo '&nbsp' . strtoupper($_SESSION['login']);} ?></h2>

            <?php if($_SESSION){echo '<button type="submit" value="deconnexion" name="deconnexion" class="deco"><a href="logout.php">Logout</a></button>';} ?>
        </main>

        <?php include 'footer.php' ?>

    </body>
</html>
