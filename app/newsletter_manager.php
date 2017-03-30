<?php

require('FileWriter.php');
require('database.php');

$fileWriter = new \App\FileWriter('storage/emaillist.txt');

// Is er een email adres doorgegeven via de URL?
if(isset($_GET['email']) && !empty($_GET['email']))
{
    $email = $_GET['email'];
    // Is dit een geldig email adres?
    if ( filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        // email opslaan in database
        $sql = "INSERT INTO tbl_subscribers (email) VALUES ('$email')";
        $database->query($sql);

        $message = 'Bedankt voor het inschrijven op de nieuwsbrief.';
    }
    else
    {
        $message = 'Dit is absoluut geen email';
    }
}
else
{
    $message = 'Geen email meegegeven! Probeer het opnieuw.';
}

header("Location: ../public/index.php?message=$message");