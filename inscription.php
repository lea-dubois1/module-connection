<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Signup</title>
    </head>

    <body>

        <?php include 'header.php' ?>
        <?php require 'signup.php' ?>

        <main class="main-inscription">

            <form action="" method="POST" class="formulaire">

                <h2>SIGNUP</h2>

                <div class="group">      
                    <input type="text" name="login" value="<?php if($error){ echo $_POST['login'];} ?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Login (minimum 5 character)</label>
                </div>

                <div class="group">      
                    <input type="text" name="prenom" value="<?php if($error){ echo $_POST['prenom'];} ?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>First name</label>
                </div>
                
                <div class="group">      
                    <input type="text" name="nom" value="<?php if($error){ echo $_POST['nom'];} ?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Last name</label>
                </div>
                
                <div class="group">      
                    <input type="password" name="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password (minimum 5 character)</label>
                </div>

                <div class="group">      
                    <input type="password" name="passwordConfirm" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Confirm password</label>
                </div>

                <div class="frame">
                    <button class="custom-btn btn-8" name="submit"><span>Signup</span></button>
                </div>
                
                <?php

                    // Display error messages (cf signup.php) //
    
                    if($created) {echo '<strong>Success!</strong> Your account is now created and you can login.';}

                    if($error) {echo '<strong>Error!</strong> '. $error;}
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>

    </body>
</html>