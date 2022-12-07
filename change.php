<?php

require('conect_bdd.php');

$error = "";
$ok = 0;

if(isset($_POST['submit'])) {

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

    // Colect all datas from the user
    $sql = "select * from utilisateurs where login = '$login'";
    $rs = mysqli_query($db,$sql);
    $numRows = mysqli_num_rows($rs);


    if(password_verify($password,$passwordTrue)){

        if ($prenom != $prenomNew){

            $sqlPre = "update utilisateurs set prenom = '$prenomNew' where login = '$login'";
            $rs = mysqli_query($db,$sqlPre);
            $_SESSION['prenom'] = $prenomNew;
            $ok = 1;

        }
        
        if ($nom != $nomNew){

            $sqlNom = "update utilisateurs set nom = '$nomNew' where login = '$login'";
            $rs = mysqli_query($db,$sqlNom);
            $_SESSION['nom'] = $nomNew;
            
            $ok = 1;
        }
        
        if (!empty($passwordNew)){

            if(strlen($passwordNew) <= 5){    // If the password's lenght is less or equal to 5

                $error = "The password is too short";

            }elseif (empty($passwordNewConfirm)){

                $error = "Please confirm password";

            }elseif(($passwordNew != $passwordNewConfirm)) {    // If the password is different than the password's confirmation

                $error = "The passwords are differents";

            }else{

                // Cripting the new password
                $hash = password_hash($passwordNew, PASSWORD_DEFAULT);

                $sqlPass = "update utilisateurs set password = '$hash' where login = '$login'";
                $rs = mysqli_query($db,$sqlPass);
                $_SESSION['password'] = $hash;
                $ok = 1;

            }

        }
        
        if ($login != $loginNew){
            if($numRows!=1){

                $error = "The login already exist";

            }elseif(strlen($login) <= 5){    // If the login's lenght is less or equal to 5

                $error = "The login is too short";

            }else{

                $sqlLog = "update utilisateurs set login = '$loginNew' where login = '$login'";
                $rs = mysqli_query($db,$sqlLog);
                $_SESSION['login'] = $loginNew;
                $ok = 1;

            }

        }
        
    }else{

        $error = "Wrong password";

    }
}

?>