<?php


include_once '../../core/CommandeC.php';
include_once '../../entities/Commande.php';

$Commande1C = new CommandeC();
$resultat=$Commande1C-> modifieretat($_GET['idcom']);

	header('Location:mail.php');

?>