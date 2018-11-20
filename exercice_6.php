<?php
if (is_numeric($_GET['building']) || is_numeric($_GET['room'])) {
    $error = 'ok';
}
if (isset($_GET['building']) && isset($_GET['room']) && $error == 'ok') {
    $display = 'Building n° ' . $_GET['building'] . '<br /> Room n° ' . $_GET['room'];
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
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 5</h1>
            <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:<br /> index.php?building=12&room=101</p>
        </div>
        <div>
            <p><?= htmlspecialchars($display) ?></p>
        </div>
    </body>
</html>