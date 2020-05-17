<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Afficher commande</title>
  </head>
  <body>
    <?php
include"config.php";
include"commande.php";
$c=new config();
$conn=$c->getConnection();
$e=new commande(123,"da","da","espece",50);
$e1=new commande(1243,"da","da","espece",501);
$resultat=$e->afficher($conn);
$e1->afficher($conn);

?>


    <table border="1">
      <tr>
        <td>num comande</td>
        <td>receveur</td>
        <td>transit</td>
        <td>modalite</td>
        <td>prix</td>
      </tr>
      <tr>
        <?php
foreach ($resultat as $res) {

  ?>
<tr>
  <td><?php echo $res['numc']; ?></td>
  <td><?php echo $res['receveur']; ?></td>
  <td><?php echo $res['transit']; ?></td>
  <td><?php echo $res['modalite']; ?></td>
  <td><?php echo $res['prix']; ?></td>


</tr>
<?php
}
 ?>
      </tr>
    </table>
    </fieldset>
  </body>
</html>
