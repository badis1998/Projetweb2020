<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Afficher facture</title>
  </head>
  <body>
    <?php
include"config.php";
include"facture.php";
$c=new config();
$conn=$c->getConnection();
$e=new facture(789,22,15,"aa",123);
$e1=new facture(7849,252,175,"aa",123);
$resultat=$e->afficher($conn);
$e1->afficher($conn);

?>


    <table border="1">
      <tr>
        <td>num facture</td>
        <td>quantite</td>
        <td>unite</td>
        <td>description</td>
        <td>num commande</td>
      </tr>
      <tr>
        <?php
foreach ($resultat as $res) {

  ?>
<tr>
  <td><?php echo $res['numf']; ?></td>
  <td><?php echo $res['quantite']; ?></td>
  <td><?php echo $res['unite']; ?></td>
  <td><?php echo $res['description']; ?></td>
  <td><?php echo $res['numeroc']; ?></td>


</tr>
<?php
}
 ?>
      </tr>
    </table>
    </fieldset>
  </body>
</html>
