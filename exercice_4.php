<?php
  if((isset($_GET['language'])) && (isset($_GET['server']))) {
    $display = 'Langage "' . $_GET['language'] . '"<br />Serveur "' . $_GET['server'] . '"';
  } else {
    $display = 'Il y une erreur dans les paramètres';
  }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br /> index.php?language=PHP&server=LAMP</p>
        </div>
        <div>
            <p><?= $display ?></p>
        </div>
    </body>
</html>