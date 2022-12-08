<?php
      
// Include file which makes the Database Connection.
include 'conect_bdd.php';   

// Set variables to false so we start whith no errors.
$created = false;
$error = "";

// Check if the form is submited
if(isset($_POST['submit'])) {
    
    // Set variables to use in the following request.
    $login = $_POST["login"]; 
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];

    // Set the request in a variable.
    $sql = "Select * from utilisateurs where login='$login'";
    
    // Check if the username is already present or not in our Database.
    $result = mysqli_query($db, $sql);
    $num = mysqli_num_rows($result);
    
    
    if($num <= 0) {     // If the login do not exist in the Database, we check for errors

        // LIST OF ERRORS
        if(($password != $passwordConfirm)) {    // If the password is different than the password's confirmation

            $error = "Les mots de passe ne sont pas identiques";
        }else{      // If everithing is fine and there is no error
            
            // Cripting the password
            $hash = password_hash($password, PASSWORD_DEFAULT);
                
            // Cripted password is used here. 
            $sql = "INSERT INTO `utilisateurs` ( `login`, `prenom`, `nom`, `password`) VALUES ('$login', '$prenom', '$nom', '$hash')";
    
            $result = mysqli_query($db, $sql);
    
            if ($result) {      // If the user is created
                $created = true;
                header('Location: connexion.php');
                session_destroy();
            }
        }
           
    }else{      // If login already exist
        $exists = "Le login existe déjà"; 
    } 
}  
    
?>