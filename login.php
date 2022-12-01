<?php

require('conect_bdd.php');

$error= "";

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
        $dataPass = $row['password'];

        if(password_verify($password,$dataPass)){    // Check if the password existe in the database and decript it

            $_SESSION['login'] = $login;
            $_SESSION['prenom'] = $row['prenom'];
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['password'] = $row['password'];

            header('Location: index.php');
        }else{    // If the password do not match, error
            $error= "Wrong password";
        }
    }else{    // If the login do not exist, error
        $error= "The login do not exist. You don't have an account? <a href=\"inscription.php\">Signup</a>";
    }
}

?>