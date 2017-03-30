<?php 

$database = new PDO(
	'mysql:host=localhost;dbname=newsletter_app_donderdag', 
	'root', 
	''
);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);