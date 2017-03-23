<?php

/*
 * v Is er een email adres doorgegeven via de URL?
 * v Is dit een geldig email adres?
 * - Email opslaan in tekstbestand
 * - Terug naar homepagina met succes-bericht
 */
//$message = '';
//
//// Is er een email adres doorgegeven via de URL?
//if(isset($_GET['email']) && !empty($_GET['email']))
//{
//    $email = $_GET['email'];
//    // Is dit een geldig email adres?
//    if ( filter_var($email, FILTER_VALIDATE_EMAIL) )
//    {
//        //Email opslaan in tekstbestand
//        file_put_contents('magazijn/emaillist.txt', $email . PHP_EOL, FILE_APPEND);
//
//        $message = 'Bedankt voor het inschrijven op de nieuwsbrief.';
//    }
//    else
//    {
//        $message = 'Dit is absoluut geen email';
//    }
//}
//else
//{
//    $message = 'Geen email meegegeven! Probeer het opnieuw.';
//}
////var_dump($_GET);
//
//header("Location: ../restaurant/index.php?message=$message");

require('FileWriter.php');

// C#: Spaceship ship = new Spaceship();
$fileWriter = new \App\FileWriter('storage/emaillist.txt');

// Is er een email adres doorgegeven via de URL?
if(isset($_GET['email']) && !empty($_GET['email']))
{
    $email = $_GET['email'];
    // Is dit een geldig email adres?
    if ( filter_var($email, FILTER_VALIDATE_EMAIL) )
    {
        //Email opslaan in tekstbestand
        $fileWriter->Save($email);

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