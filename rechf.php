<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>chercher</title>
</head>
<body>
<?php
	include "config.php";
	include "facture.php";
	$c=new config();
	$conn=$c->getConnection();
	$e=new facture(789,44,2,"aa",123);
	$resultat=$e->afficher($conn);
	
?>

<form name="Form2" method="POST" onsubmit="rechf1.php">
	<fieldset>

		Rechercher <input type="number" name="recherch"><input type="submit" name="chercher" value="chercher"></br>
		<table border="2">
			<tr>
				<td> num facture </td>	<td> quantite </td>	<td> unite </td>	<td> description </td>	<td>num commande </td>
				<td>supprimer facture</td>	<td>Modifier facture</td>
			</tr>
			<?php 
			
if((!isset($_POST['chercher'])) || ((isset($_POST['chercher']) && (!isset($_POST['recherch']))
   ))) {

			foreach ($resultat as $res){
			?>
			<tr>
				 <td><?php echo $res['numf']; ?></td>
 				 <td><?php echo $res['quantite']; ?></td>
  				 <td><?php echo $res['unite']; ?></td>
 				 <td><?php echo $res['description']; ?></td>
 				 <td><?php echo $res['numeroc']; ?></td>
				<td><a href="suppf.html">Supprimer</a></td>
				<td><a href="modiff.html">Modifier</a></td>
			</tr>
			<?php
			}
		}
		else
		{
			if(($_POST['recherch'])!=null){
			$mouhib=$e->rechercher($_POST['recherch'],$conn);
			foreach ($mouhib as $res){
			?>
			<tr>
				 <td><?php echo $res['numf']; ?></td>
 				 <td><?php echo $res['quantite']; ?></td>
  				 <td><?php echo $res['unite']; ?></td>
 				 <td><?php echo $res['description']; ?></td>
 				 <td><?php echo $res['numeroc']; ?></td>
				<td><a href="suppf.html">Supprimer</a></td>
				<td><a href="modiff.html">Modifier</a></td>
			</tr>
			<?php
		}
		}
	}
		?>

			
</table>
		

		
	</fieldset>
</form>
</body>
</html>