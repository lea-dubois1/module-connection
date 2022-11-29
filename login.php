<?php
session_start();
if(isset($_POST['login']) && isset($_POST['password'])){
 // connexion à la base de données
    require 'conect_bdd.php';
 
 // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
 // pour éliminer toute attaque de type injection SQL et XSS
    $login = mysqli_real_escape_string($db,htmlspecialchars($_POST['login'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
 
    if($login !== "" && $password !== ""){
        $requete = "SELECT count(*) FROM utilisateurs where 
        login = '$login' AND password = '$password'";
        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
            if($count!=0){ // nom d'utilisateur et mot de passe correctes
            $_SESSION['login'] = $login;
            header('Location: index.php');
            }else{
            header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
            }
        }else{
            header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
        }
    }else{
        header('Location: login.php');
    }
mysqli_close($db); // fermer la connexion
?>