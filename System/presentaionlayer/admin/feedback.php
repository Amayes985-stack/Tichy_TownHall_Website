<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>APC<span>Tichy</span></h1>
		<nav>




		<ul>


			<li><a href="index3.php">Ajouter/Supprimer Opérateur</a></li>
			<li><a href="viewdoctor.php">Afficher Opérateurs</a></li>
			<li><a href=" viewpatients.php">Afficher Patients</a></li>
			<li><a href="viewappointments.php">Afficher Rendez-Vous</a></li>
			<li><a href="feedback.php">FeedBack</a></li>

				<li><a href="../../applicationlayer/Doctorpatient.php">Déconnexion</a></li>








		</ul>




	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Patients FeedBack</h1>
	<table class="table4" style="width: 100%">
		<tr>
		<th>Patient ID</th>
		<th>Nom Patient</th>
		<th>FeedBack</th>


		</tr>

		<?php $sql3="SELECT  * FROM  patients,feedback WHERE pID=UserID " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["pID"]."</td><td>".$row3["Name"]."</td><td>".$row3['feedback']."</td></tr>";
			}


			echo "</table";



		}

		?>

	</table>
</body>
</html>
