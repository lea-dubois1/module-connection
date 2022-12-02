<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <title>Login</title>
    </head>

    <body>
        <?php include 'header.php' ?>
        <?php require 'login.php' ?>
        <main>


            <form action="" method="POST" class="formulaire">
            
                <h2>LOGIN</h2>

                <div class="group">      
                    <input type="text" name="login" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Login</label>
                </div>
                
                <div class="group">      
                    <input type="password" name="password" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>

                <div class="frame">
                    <button class="custom-btn btn-8" name="submit"><span>Login</span></button>
                </div>

                <?php
                    // Display error messages (cf login.php) //

                    if($error) {echo '<strong>Error!</strong> '. $error;}
                ?>

            </form>
        </main>

        <?php include 'footer.php' ?>
    </body>
</html>
