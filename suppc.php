<?php

include_once '../core/CommandeC.php';
          include_once '../entities/Commande.php';

          $resultat=afficher();

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['numc'];
	supprimer($id);
}

header('LOCATION:suppc1.html');
?>
