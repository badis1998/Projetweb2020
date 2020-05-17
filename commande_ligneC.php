<?php

include_once '../Config.php';
class Commande_ligneC{
function ajouter($e)
{
  $db=Config::getConnexion();
  $sql="INSERT INTO commande_ligne(id_commande,id_produit,quantite,prix_unitaire,prix_total)
  values('".$e->getid_commande()."','".$e->getid_produit()."','".$e->getquantite()."','".$e->getprix_unitaire()."','".$e->getprix_total()."')";
  $db->query($sql);


}

function afficher($idcommande)
{
  $db=Config::getConnexion();
  $sql="SELECT * FROM commande_ligne WHERE id_commande LIKE '$idcommande'";
  $resultat=$db->query($sql);
  return $resultat->fetchAll();
}

function supprimer($id)
{
  $db=Config::getConnexion();
  $sql="DELETE FROM  commande_ligne WHERE id_commande=".$id;
  $db->exec($sql);
}

function rechercher($c){
  $db=Config::getConnexion();
  $sql="SELECT * FROM commande_ligne WHERE id_commande_ligne=".$c;
  $resultat=$db->query($sql);
  return $resultat->fetchALL();
}

function modifier($id)
{
  $db=Config::getConnexion();
  $sql = 'UPDATE commande_ligne SET id_produit="'.$id->getid_produit().
  '", quantite="'.$id->getquantite().'",prix_unitaire="'.$id->getprix_unitaire().
  '",prix_total="'.$id->getprix_total().'" WHERE id_commande_ligne="'.$id->getid_commande_ligne().'"';
  $db->exec($sql);
}

}
?>
