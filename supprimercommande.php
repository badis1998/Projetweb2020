<?PHP
include "../../core/commandeC.php";
include "../../core/commande_ligneC.php";


$commandeC=  new CommandeC ;
$commande_ligneC= new Commande_ligneC;
if (isset($_GET["idcom"])){
    $commandeC->supprimer($_GET["idcom"]);
    $commande_ligneC->supprimer($_GET["idcom"]);
	header('Location: affichec1.php');
}