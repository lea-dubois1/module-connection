<?php

// Set variables to false so we start whith no errors.
$showAlert = false; 
$showError = false; 
$exists=false;
$error1=false;
$error2=false;
$error3=false;

// If the methode is GET it could be dangerous
// cause there is a password and we don't want it in the URL.
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the Database Connection.
    include 'conect_bdd.php';   
    
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
        if(strlen($login) <= 5){    // If the login's lenght is less or equal to 5

            $error1 = "Le login est trop courts";

        }elseif(strlen($password) <= 5){    // If the password's lenght is less or equal to 5

            $error2 = "Le password est trop courts";

        }elseif(preg_match("[\W]", $_POST['login'])){    // If there is non-alphanumeric characters in the login

            $error3 = "Les caractères spéciaux ne sont pas autorisés";

        }elseif(($password != $passwordConfirm)) {    // If the password is different than the password's confirmation

            $showError = "Les passwords ne sont pas identiques";
        }else{      // If everithing is fine and there is no error
            
            // Cripting the password
            $hash = password_hash($password, PASSWORD_DEFAULT);
                
            // Cripted password is used here. 
            $sql = "INSERT INTO `utilisateurs` ( `login`, `prenom`, `nom`, `password`) VALUES ('$login', '$prenom', '$nom', '$hash')";
    
            $result = mysqli_query($db, $sql);
    
            if ($result) {      // If the user is created
                $showAlert = true;
            }
        }
           
    }else{      // If login already exist
        $exists="Le login existe déjà"; 
    } 
}  
    
?>