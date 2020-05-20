<?php


include_once '../../core/CommandeC.php';
include_once '../../entities/Commande.php';

$Commande1C = new CommandeC();
$resultat=$Commande1C-> modifieretat($_GET['idcom']);
$Commande2C = new CommandeC();

$r1=$Commande2C->rechercher($_GET['idcom']);

foreach ($r1 as $res) {
	$id=$res['id_client'];
	

}

$r2=$Commande2C->recherchemail($id);
foreach ($r2 as $res2) {
	$mail=$res2['mail'];
	$nom=$res2['nom'];	
}
	header('Location:mail.php?mail='.$mail.'& nom='.$nom.'');

?>