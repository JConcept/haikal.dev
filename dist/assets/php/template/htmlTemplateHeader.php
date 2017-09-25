<?php 
	$path = $_SERVER['PHP_SELF']; /* @fail : faille de sécurité en attaque XSS ? */
	$file = basename ($path);
    $reg = '#\.php$#';
	$title = preg_replace($reg, '', $file);
    $title[0] = strtoupper($title[0]);
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title><?php echo($title); ?> - Nelly Haikal</title><!-- @TODO : créer fonction : fGetTitle(); -->
</head>