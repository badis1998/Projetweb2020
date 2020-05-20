<?php

include_once '../../core/FactureC.php';
include_once '../../entities/Facture.php';

          $resultat=afficher();

	$id=(int)$_GET['idfacture'];
	supprimer($id);


header('LOCATION:affichf1.php');
?>
