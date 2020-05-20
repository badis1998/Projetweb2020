<?php

include_once '../../core/FactureC.php';
include_once '../../entities/Facture.php';

if(isset($_POST['Ajouter']))
{
  $soi=new facture($_POST['numf'],$_POST['quantite'],$_POST['unite'],$_POST['description'],$_POST['numeroc']);
  ajouter($soi);
}

header('LOCATION:affichf1.php');
?>
