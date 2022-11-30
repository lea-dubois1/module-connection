<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
$error1=false;
$error2=false;
    
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
    // Include file which makes the
    // Database Connection.
    include 'conect_bdd.php';   
    
    $login = $_POST["login"]; 
    $prenom = $_POST["prenom"]; 
    $nom = $_POST["nom"];
    $password = $_POST["password"];
    $passwordConfirm = $_POST["passwordConfirm"];
            
    
    $sql = "Select * from utilisateurs where login='$login'";
    
    $result = mysqli_query($db, $sql);
    
    $num = mysqli_num_rows($result);
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num <= 0) {

        if(strlen($login && $password) <= 5){

            $error1 = "Le login ou le password sont trop courts";

        }elseif(!preg_match("[\W]+", $POST['login'])){

            $error2 = "Les caractères spéciaux ne sont pas autorisés";

        }elseif(($password != $passwordConfirm)) {

            $showError = "Les passwords ne sont pas identiques";
        }else{
            
            $hash = password_hash($password, PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO `utilisateurs` ( `login`, 
                `prenom`, `nom`, `password`) VALUES ('$login', '$prenom', '$nom', '$hash')";
    
            $result = mysqli_query($db, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        }
           
    }else{
    $exists="Le login existe déjà"; 
    }
    
}  
    
?>