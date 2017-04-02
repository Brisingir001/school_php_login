<?php //app/account_manager.php
require('database.php');
//registreren van accounts

//inloggen
//-checken of er input is gegeven
//-is de input juist?
//-checken of de ingevoerde data bestaat in de database.
//-sessie starten
//-doorsturen naar subscriber list

//uitloggen
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_users WHERE password = '$password' AND email = '$email'";
$amount = $database->query($sql)->rowCount();

if($amount == 1){
    session_start();
    $_SESSION['loggedIn'] = true;

    header('Location: ../public/subscriber-list.php');
}



?>