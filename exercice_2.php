<?php
if (isset($_GET['age'])) {
    $display = 'Vous avez ' . $_GET['age'] . ' ans.';
} else {
    $display = 'Vous devez indiquer votre âge dans la barre d\'adresse';
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
        <title>Exercice 2</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 2</h1>
            <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : <br />index.php?lastName=Nemare&firstName=Jean</p>
        </div>
        <div>
            <p><?= htmlspecialchars($display) ?></p>
        </div>
    </body>
</html>