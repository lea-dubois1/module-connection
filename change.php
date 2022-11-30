<?php

require('conect_bdd.php');

// Set variables to use in the following request.
$login = $_SESSION['login'];
$loginNew = $_POST['login'];

$prenom = $_SESSION['prenom'];
$prenomNew = $_POST['prenom'];

$nom = $_SESSION['nom'];
$nomNew = $_POST['nom'];

$passwordTrue = $_SESSION['password'];
$password = $_POST['old-password'];
$passwordNew = $_POST['new-password'];
$passwordNewConfirm = $_POST['confirm-password'];

$errorLog1 = false;
$errorLog2 = false;
$error2 = false;
$error3 = false;
$error4 = false;
$error5 = false;
$errorPass1 = false;
$errorPass2 = false;


// Set the request in a variable.
$sql = "select * from utilisateurs where login = '$login'";

// Check if the username is already present or not in our Database.
$rs = mysqli_query($db,$sql);
$numRows = mysqli_num_rows($rs);

if(password_verify($password,$passwordTrue)){

    if ($prenom != $prenomNew){
        if(preg_match("[\W]", $prenomNew)){

            $error2 = "Les caractères spéciaux ne sont pas autorisés";

        }else{

            $sqlPre = "update utilisateurs set prenom = '$prenomNew' where login = '$login'";
            $rs = mysqli_query($db,$sqlPre);
            $_SESSION['prenom'] = $prenomNew;

        }

    }
    
    if ($nom != $nomNew){
        if(preg_match("[\W]", $nomNew)){    // If there is non-alphanumeric characters in the login

            $error2 = "Les caractères spéciaux ne sont pas autorisés";

        }else{

            $sqlNom = "update utilisateurs set nom = '$nomNew' where login = '$login'";
            $rs = mysqli_query($db,$sqlNom);
            $_SESSION['nom'] = $nomNew;

        }
    }
    
    if (!empty($passwordNew)){

        if(strlen($passwordNew) <= 5){    // If the password's lenght is less or equal to 5

            $error3 = "Le mot de passe est trop court";

        }elseif (empty($passwordNewConfirm)){

            $error4 = "Veuillez confirmer le nouveau mot de passe";

        }elseif(($passwordNew != $passwordNewConfirm)) {    // If the password is different than the password's confirmation

            $error5 = "Les mots de passe ne sont pas identiques";

        }else{

            // Cripting the new password
            $hash = password_hash($passwordNew, PASSWORD_DEFAULT);

            $sqlPass = "update utilisateurs set password = '$hash' where login = '$login'";
            $rs = mysqli_query($db,$sqlPass);
            $_SESSION['password'] = $hash;

        }

    }
    
    if ($login != $loginNew){
        if($numRows<=0){

            $errorLog1 = "Le login existe déjà";

        }elseif(strlen($login) <= 5){    // If the login's lenght is less or equal to 5

            $errorLog2 = "Le login est trop courts";

        }elseif(preg_match("[\W]", $loginNew)){    // If there is non-alphanumeric characters in the login

            $error2 = "Les caractères spéciaux ne sont pas autorisés";

        }else{

            $sqlLog = "update utilisateurs set login = '$loginNew' where login = '$login'";
            $rs = mysqli_query($db,$sqlLog);
            $_SESSION['login'] = $loginNew;

        }

    }

}elseif (empty($password)){
    
    $errorPass1 = "Veuillez entrer votre mot de passe pour confirmer le changement";

}else{

    $errorPass2 = "Mot de passe incorrect";

}

var_dump($_SESSION);

?>