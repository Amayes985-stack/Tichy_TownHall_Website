<?php include ('../../datalayer/server.php'); ?>
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
<body >

	<div class="header">
	<h2>Mes Informations</h2>
</div>
<form method="post" action="index2.php" class="info">





<div class="Dcontent">


	<label>ID: <?php echo "" .isset($_SESSION['DoctorID']);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $colD['email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Nom : <?php echo $colD['Doctorname']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Adresse : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Numéro de Téléphone : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Domaine : <?php echo $colD['categorey']; ?></label>
	 	   	 	   <br>
	 	   <br>








</div>








</form>
















</body>
</html>
