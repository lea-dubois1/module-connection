<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Inscription</title>
    </head>

    <body>
        <?php require_once 'signup.php' ?>
        <?php include 'header.php' ?>

        <main class="main-inscription">

            <h2>INSCRIPTION</h2>

            <form action="" method="POST" class="formulaire">

                <label for="login">Login</label>
                <input type="text" name="login" value="<?php if(isset($error)){ echo $_POST['login'];} ?>" required>

                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" value="<?php if(isset($error)){ echo $_POST['prenom'];} ?>" required>

                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?php if(isset($error)){ echo $_POST['nom'];} ?>" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <label for="passwordConfirm">Confirm password</label>
                <input type="password" name="passwordConfirm" required>

                <input type="submit" value="Inscription">

                <?php
    
                    if($showAlert) {
                        echo   '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Your account is now created and you can login.
                                    <span aria-hidden="true"></span>
                                </div>';
                    }
        
                    if($showError) {
        
                        echo   '<div class="alert alert-danger 
                                    alert-dismissible fade show" role="alert"> 
                                    <strong>Error!</strong> '. $showError.'
                                    <span aria-hidden="true"></span> 
                                </div>';
                    }
            
                    if($exists) {
                        echo   '<div class="alert alert-danger 
                                    alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> '. $exists.'
                                    <span aria-hidden="true"></span> 
                                </div> '; 
                    }
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
