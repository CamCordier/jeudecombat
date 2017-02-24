<?php

session_start();
session_destroy();

?>

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
<div class="backimage">
<div class="container">

    <div class="choisir">

         <h1>Choix de votre personnage</h1>


    <figure class="snip0058"><img src="http://s1.1zoom.me/big3/125/342800-sepik.jpg" alt="sample57"/>
        <figcaption>
            <p><span>Ce personnage se sert de son incroyable force surhumaine pour attaquer son adversaire.
                Il est musclé et détruit tout sur son passage.</span></p>
            <h2 class="white"><span>
                    <a href="donjon.php">Guerrier</a></span></h2>
            <form method="post" action="donjon.php">
                <input type="hidden" name="classe" value="guerrier">
                <input type="submit" value="Start">
            </form>

        </figcaption>
    </figure>
    <figure class="snip0058"><img src="https://s-media-cache-ak0.pinimg.com/originals/3f/e7/8b/3fe78bde62ba6a93cd8be91ea08a16f4.jpg" alt="sample37"/>
        <figcaption>
            <p><span>Ce personnage utilise la magie noire, mieux que la magie blanche pour déstabiliser son adversaire. Il jette des sorts.</span></p>
            <h2><span><a href="donjon.php">Magicienne</a></span></h2>
            <form method="post" action="donjon.php">
                <input type="hidden" name="classe" value="mage">
                <input type="submit" value="Start">
            </form>
        </figcaption>
    </figure>
    <figure class="snip0058"><img src="http://s1.1zoom.me/big7/186/World_of_WarCraft_485690.jpg" alt="sample37" a href="donjon.php"/>
        <figcaption>
            <p><span>Ce personnage réunit la force et la magie blanche. Moins fort que le guerrier dans sa force mais peut utiliser des sorts de magie blanche
                pour s'en sortir face à l'ennemi.</span></p>
            <h2><span><a href="donjon.php">Paladin</a></span></h2>
        </figcaption>
    </figure>
    </div>
</div>
</div>



<form method="post" action="donjon.php">
    <select name="classe" id="classe">
        <option value="mage">Mage</option>
    </select>
    <input type="submit" value="Start">
</form>

<script>  /* Demo purposes only */
   $("figure").mouseleave(
       function () {
          $(this).removeClass("hover");
       }
   );</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>


</html>