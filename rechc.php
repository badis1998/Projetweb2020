<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>chercher</title>
</head>
<body>
<?php
	include "config.php";
	include "commande.php";
	$c=new config();
	$conn=$c->getConnection();
	$e=new commande(123,"da","da","espece",50);
	$resultat=$e->afficher($conn);
	
?>

<form name="Form2" method="POST" onsubmit="rechc1.php">
	<fieldset>

		Rechercher <input type="number" name="recherch"><input type="submit" name="chercher" value="chercher"></br>
		<table border="2">
			<tr>
				<td> num commande </td>	<td> receveur </td>	<td> transit </td>	<td> modalite </td>	<td>prix </td>
				<td>supprimer commande</td>	<td>Modifier commande</td>
			</tr>
			<?php 
			
if((!isset($_POST['chercher'])) || ((isset($_POST['chercher']) && (!isset($_POST['recherch']))
   ))) {

			foreach ($resultat as $res){
			?>
			<tr>
				<td><?php echo $res['numc'];?></td>
				<td><?php echo $res['receveur'];?></td>
				<td><?php echo $res['transit'];?></td>
				<td><?php echo $res['modalite'];?></td>
				<td><?php echo $res['prix'];?></td>
				<td><a href="suppc.html">Supprimer</a></td>
				<td><a href="modifc.html">Modifier</a></td>
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
				<td><?php echo $res['numc'];?></td>
				<td><?php echo $res['receveur'];?></td>
				<td><?php echo $res['transit'];?></td>
				<td><?php echo $res['modalite'];?></td>
				<td><?php echo $res['prix'];?></td>
				<td><a href="suppc.html">Supprimer</a></td>
				<td><a href="modifc.html">Modifier</a></td>
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