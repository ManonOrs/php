<!DOCTYPE html>

<?php session_start(); 
	
	include('../includes/connexion.inc.php');
?>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="José GIL">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
        <link href="../css/casques.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../favicon.ico">
    </head>
    <body>
        <?php
            include('../includes/header.html.inc.php');
            include('../includes/casques.inc.php');
            include('../includes/footer.inc.php');
        ?>
    </body>
</html>
