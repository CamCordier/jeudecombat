<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Choix du personnage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="../css/style.css" rel="stylesheet">
</head>

<body>



<?php
session_start();

require 'magicien.php';
require 'monstre.php';
require 'guerrier.php';
require 'paladin.php';
require 'jeu.php';
require 'battle.php';
require 'coffre.php';


$personnage = $_POST["classe"];
$jeu = new Jeu();
$jeu->choix($personnage);
$_SESSION['personnage'] = $jeu->perso;




var_dump($_SESSION);

echo 'Je suis un '.$_SESSION['personnage']->nom;
echo '<br>';
echo  'Mes points de vie :'.$_SESSION['personnage']->vie;
echo '<br>';
echo 'Mon attaque :'.$_SESSION['personnage']->attaque;
echo '<br>';
echo 'Mon armure :'.$_SESSION['personnage']->armure;


?>



</body>
</html>