<?php
include_once '../Config.php';
class CommandeC{
    function ajouter($e)
    {
      $db=Config::getConnexion();
      $sql="INSERT INTO commande (id_commande,id_client,date_commande,prix_total,etat)
      values('".$e->getid_commande()."','".$e->getid_client()."','".$e->getdate_commande()."','".$e->getprix_total()."','".$e->getetat()."')";
      
      $db->query($sql);

      $db->exec($sql);
    }

  

    function afficher()
    {
      $db=Config::getConnexion();
      $sql="SELECT * FROM commande";
      $resultat=$db->query($sql);
      return $resultat->fetchAll();
    }

    function supprimer($id)
    {
      $db=Config::getConnexion();
      $sql="DELETE FROM  commande WHERE id_commande=".$id;
      $db->exec($sql);
    }

    function rechercher($c){
      $db=Config::getConnexion();
      $sql="SELECT * FROM commande WHERE id_commande=".$c;
      $resultat=$db->query($sql);
      return $resultat->fetchALL();
    }

    function modifier($id)
    {
      $db=Config::getConnexion();
      $sql = 'UPDATE commande SET id_client="'.$id->getid_client().
      '", date_commande="'.$id->getdate_commande().'",prix_total="'.$id->getprix_total().
      '",etat="'.$id->getetat().'" WHERE id_commande="'.$id->getid_commande().'"';
      $db->exec($sql);
    }

    function modifieretat($id)
    {
      $db=Config::getConnexion();
      $sql = 'UPDATE commande SET etat="1" WHERE id_commande="'.$id.'"';
      $db->exec($sql);
    }

    //panier

    function afficherpanier($idclient)
    {
      $db=Config::getConnexion();
      $sql="SELECT * FROM panier_ligne WHERE id_client=".$idclient;
      $resultat=$db->query($sql);
      return $resultat;
    }
  }

?>
