<?php 
    $db_username = 'root';
    $db_password = '';
    $db_name = 'moduleconnexion';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
    or die('Could not connect to database');
?>