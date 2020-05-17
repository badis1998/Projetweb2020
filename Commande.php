<?php

class Commande{
  private $_id_commande;
  private $_id_client;
  private $_date_commande;
  private $_prix_total;
  private $_etat;

  public function __construct($id_commande,$id_client,$date_commande,$prix_total,$etat)
  {

    $this->_id_commande=$id_commande;
    $this->_id_client=$id_client;
    $this->_date_commande=$date_commande;
    $this->_prix_total=$prix_total;
    $this->_etat=$etat;

  }

  public function getid_commande()
  {
    return $this->_id_commande;
  }
  public function getid_client()
  {
    return $this->_id_client;
  }
  public function getdate_commande()
  {
    return $this->_date_commande;
  }
  public function getprix_total()
  {
    return $this->_prix_total;
  }
  public function getetat()
  {
    return $this->_etat;
  }

}
?>
