<?php include '../../datalayer/bookserver.php '; ?>
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
			<li><a href=" searchpatient.php">Rechercher Patient</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Déconnexion</a></li>








		</ul>




	</nav>



</header>

<body>
	<h1 class="my1">My<span class="mys">Rendez-vous</span></h1>

	<table class="table2">
		<tr>
		<th>Rendez-vous ID</th>
		<th>DATE</th>
		<th>HEURE</th>
		<th>PatientID</th>
		<th>Nom_Patient</th>
		<th>Adresse_Patient</th>
		<th>Email_Patient</th>
		<th>Numero_Partient</th>
		<th>Groupe_Sanguin</th>



		</tr>
		<?php $sqldoc="SELECT  * FROM bookapp , patients   WHERE docID=('$doctorprofile') AND  patientID=UserID "  ;
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc["Time"]."</td><td>".$rowdoc["UserID"]."</td><td>".$rowdoc['Name']."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNumber"]."</td><td>".$rowdoc["Bloodtype"]."</td></tr>";
			}


			echo "</table";



		}

		?>

	</table>





</body>
</html>
