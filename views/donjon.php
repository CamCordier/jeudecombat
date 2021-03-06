<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Combat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<div class="backimage">

    <h1 style="text-align: center;font-size: 5em;color: darkred;">Votre Combat</h1>

    <div class="container">
       <div class="row">
          <div class="col-md-4">
               <img src="http://vignette4.wikia.nocookie.net/finalfantasy/images/e/e4/Guerrier_de_la_Lumi%C3%A8re_CG.png/revision/latest?cb=20120820135609&amp;path-prefix=fr" alt="sample57" style="width: 60%;margin-top: 20%;">
          </div>


           <div class="col-md-4 vs">
               <p>VS</p>
            </div>

             <div class="col-md-4">
                 <img src="../img/monstre.png" style="width: 97%;margin-top: 39%;">
              </div>
       </div>
    </div>
<div>
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



    $_SESSION['personnage']->attaque($dragon);
    $dragon->attaque($_SESSION['personnage']);


    if ($dragon->mort()) {
        echo 'Le monstre est mort';
    } elseif ($_SESSION['personnage']->mort()) {
        echo 'Vous etes mort';
    }


    var_dump($_SESSION);
    var_dump($dragon);



?>

<form method="POST" action="donjon.php">
    <input type="hidden" name="combat" value="combat">
    <input type="submit" value="Combat">
</form>

    <form method="POST" action="">
        <input type="hidden" name="coffre" value="coffre">
        <input type="submit" value="Ouvrir coffre">
    </form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>

</html>