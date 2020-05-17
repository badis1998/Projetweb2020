<?php

include_once '../../core/FactureC.php';
include_once '../../entities/Facture.php';

if(isset($_POST['Modifier']))
{
  $id=new facture ($_POST['numf'],$_POST['quantite'],$_POST['unite'],$_POST['description'],$_POST['numeroc']);
  modifier($id);
}

header('LOCATION:modiff1.html');
?>
