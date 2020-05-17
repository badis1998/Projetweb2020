<?php

class Commande_ligne{

  private $_id_commande;
  private $_id_produit;
  private $_quantite;
  private $_prix_unitaire;
  private $_prix_total;

  public function __construct($id_commande,$id_produit,$quantite,$prix_unitaire,$prix_total)
  {


    $this->_id_commande=$id_commande;
    $this->_id_produit=$id_produit;
    $this->_quantite=$quantite;
    $this->_prix_unitaire=$prix_unitaire;
    $this->_prix_total=$prix_total;

  }


  public function getid_commande()
  {
    return $this->_id_commande;
  }
  public function getid_produit()
  {
    return $this->_id_produit;
  }
  public function getquantite()
  {
    return $this->_quantite;
  }
  public function getprix_unitaire()
  {
    return $this->_prix_unitaire;
  }
  public function getprix_total()
  {
    return $this->_prix_total;
  }

}
?>
