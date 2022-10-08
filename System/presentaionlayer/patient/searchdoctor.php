<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>APC<span>Tichy</span></h1>
		<nav>




		<ul>


			<li><a href=" index.php">MesInfo</a></li>
			<li><a href=" book.php">Prendre un Rendez-vous</a></li>
			<li><a href=" view.php">Afficher un Rendez-vous</a></li>
			<li><a href="cancel.php">Annuler un Rendez-vous</a></li>
			<li><a href=" searchdoctor.php">Rechercher un Opérateur</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Déconnexion</a></li>







		</ul>




	</nav>



</header>

<body>



<form method="post" action="searchdoctor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Recherche par:<br>*Opérateur ID<br>*Nom Opérateur<br>*Catégorie</label>
		<input type="text" name="dID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Recherche</button>
	</div>









		</form>
	</form>




		<?php

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>Opérateur ID</th>
		<th>Nom Opérateur</th>
		<th>Adresse</th>
		<th>Numéro Téléphone</th>
		<th>Catégorie</th>

		</tr> <?php


		$dID =$mysqli -> real_escape_string($_POST['dID']);

		$sql6="SELECT  * FROM  doctor   WHERE 	Doctorname=('$dID') OR DoctorID=('$dID') OR categorey=('$dID')" ;
		$result6=$mysqli->query($sql6);
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["DoctorID"]."</td><td>".$row6["Doctorname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['categorey']."</td></tr>";
			}


			echo "</table";



		}
	}?>
 </table>




</body>
</html>
