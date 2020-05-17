<legend><h2>Tri facture</h2></legend>
<?PHP

include_once '../core/FactureC.php';
include_once '../entities/FactureC.php';

          $resultat=afficher();

$listeclient1=afficherASC();
$listeclient2=afficherDESC();

?>

<form method="POST" action="tri1.php">

  <h2> <input type="submit" name="asc" value="ascendant">
    <input type="submit" name="desc" value="descendant"></h2>

    <?php

    if (isset($_POST['asc'])) {
      ?>
      <table border="4" class="">
        <tr>
          <td>num facture</td>
          <td>quantite</td>
          <td>unite</td>
          <td>description</td>
          <td>num commande</td>
        </tr>


        <?php
        foreach($listeclient1 as $row)
        {
          ?>
          <tr>
            <td><?php echo $row['numf']; ?></td>
            <td><?php echo $row['quantite']; ?></td>
            <td><?php echo $row['unite']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['numeroc']; ?></td>
          </tr>
          <?php
        }
        ?>
      </table>

      <?PHP
    }



    if (isset($_POST['desc'])) {
      ?>
      <table border="4" class="">
        <tr>
          <td>num facture</td>
          <td>quantite</td>
          <td>unite</td>
          <td>description</td>
          <td>num commande</td>
        </tr>


        <?php
        foreach($listeclient2 as $row){
          ?>
          <tr>
            <td><?php echo $row['numf']; ?></td>
            <td><?php echo $row['quantite']; ?></td>
            <td><?php echo $row['unite']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['numeroc']; ?></td>
          </tr>
          <?php
        }
        ?>
      </table>
    </form>

    <?PHP
  }


  ?>
