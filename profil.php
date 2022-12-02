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

            <h2 class="title_change">CHANGE PROFILE</h2>

            <form action="" method="POST" class="formulaire">

                <div class="group">      
                    <input type="text" name="login" value="<?php {echo $_SESSION['login'];} ?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Login</label>
                </div>
                
                <div class="group">      
                    <input type="text" name="prenom" value="<?php {echo $_SESSION['prenom'];} ?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>First name</label>
                </div>
                
                <div class="group">      
                    <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Last name</label>
                </div>
                
                <div class="group">      
                    <input type="password" name="old-password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>
                
                <div class="group">      
                    <input type="password" name="new-password" placeholder="New password">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                
                <div class="group">      
                    <input type="password" name="confirm-password" placeholder="Confirm new password">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>

                <div class="frame">
                    <button class="custom-btn btn-8" name="submit"><span>Edit</span></button>
                </div>
                
                <?php

                    if($error) {echo '<strong>Error!</strong> '. $error;}

                    if($ok >= 1) {echo "Your profil have been edited successfully";}

                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>