<?php 

$database = new PDO(
	'mysql:host=localhost;dbname=db_newsletter',  //dsm
	'root', // username
	'' // password
);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);