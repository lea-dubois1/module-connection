<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css">
    </head>
    <body>
        <?php include 'header.php'?>
        <main>
            <section class="formulaire">
                <form action="login.php" method="POST">
                    <h1>Sign in here</h1>

                    <label class="form"><b>Username</b></label>
                    <input class="form2" type="text" placeholder="Enter the username" name="login" required>

                    <label class="form"><b>Password</b></label>
                    <input class="form2" type="password" placeholder="Enter Password" name="password" required>

                    <button type="submit" id="submit" value="Sign Up" name="submit" class="form">Sign In</button>
                    <?php
                        if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        }
                    ?>
                </form>
            </section>
        </main>
        <?php include 'footer.php'?>
    </body>
</html>