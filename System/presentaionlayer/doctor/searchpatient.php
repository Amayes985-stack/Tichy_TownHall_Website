<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 >APC<span>Tichy</span></h1>
		<nav>




		<ul >


			<li><a href="index2.php">MesInfos</a></li>
			<li><a href="doctorapp.php">Mes Rendez-vous</a></li>
			<li><a href=" searchpatient.php">Rechercher Citoyen</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Déconnexion</a></li>








		</ul>




	</nav>




</header>

<body>



<form method="post" action="searchpatient.php" class="patientsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Recherche par:</label>
		<label style="font-weight: bold">*Patient ID</label>
		<label style="font-weight: bold">*Nom_Patient</label>
		<input type="text" name="PID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Recherche</button>
	</div>









		</form>
	</form>




		<?php

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Information_Patient</caption>>

		<tr>
		<th>PatientID</th>
		<th>Nom</th>
		<th>Adresse</th>
		<th>Numéro_Téléphone</th>
		<th>Email</th>
		<th>Groupe_Sanguin</th>


		</tr> <?php


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP="SELECT  * FROM  patients   WHERE 	UserID=('$PID') OR Name=('$PID') " ;
		$resultP=$mysqli->query($sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["UserID"]."</td><td>".$rowP["Name"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNumber"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Bloodtype']."</td></tr>";
			}


			echo "</table";



		}
	}?>
 </table>



</body>
</html>
