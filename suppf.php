<?php

include_once '../../core/FactureC.php';
include_once '../../entities/Facture.php';

          $resultat=afficher();

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['numf'];
	supprimer($id);
}

header('LOCATION:suppf1.html');
?>
