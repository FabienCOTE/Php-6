<?php
if (isset($_GET['lastName']) && isset($_GET['firstName']) && $error == 'ok') {
    $display = 'Votre nom est "' . $_GET['lastName'] . '" et votre prénom est "' . $_GET['firstName'] . '".';
} else {
    $display = 'Vous devez indiquer votre nom et prénom dans la barre d\'adresse';
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
        <title>Exercice 1</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 1</h1>
            <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br/>index.php?lastName=Nemare&firstName=Jean</p>
        </div>
        <div>
            <p><?= htmlspecialchars($display) ?></p>
        </div>
    </body>
</html>