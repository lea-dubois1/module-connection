<?php

require('conect_bdd.php');

$error1= false;
$error2= false;


if(isset($_POST['submit'])){

    // Set variables to use in the following request.
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    // Set the request in a variable.
    $sql = "select * from utilisateurs where login = '$login'";

    // Check if the username is already present or not in our Database.
    $rs = mysqli_query($db,$sql);
    $numRows = mysqli_num_rows($rs);
    
    if($numRows == 1){    // If the login exist in the data base, continue

        $row = mysqli_fetch_assoc($rs);

        if(password_verify($password,$row['password'])){    // Check if the password existe in the database and decript it

            $_SESSION['login'] = $login;
            //header('Location: index.php');

            echo "SESSION :";
            $_SESSION['prenom'] = $row['prenom'];
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['password'] = $row['password'];
        }
        else{    // If the password do not match, error
            $error1= "Mauvais mots de passe";
        }
    }
    else{    // If the login do not exist, error
        $error2= "Le login n'existe pas. Vous n'avez pas de compte? <a href=\"inscription.php\">Inscrivez-vous</a>";
    }
}

var_dump($_SESSION);

?>