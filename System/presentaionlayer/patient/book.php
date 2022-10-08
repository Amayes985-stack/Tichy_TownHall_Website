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







	<div class="header">
	<h2>Prendre un Rendez-vous</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');?>





	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-group">
		<label>Catégorie</label>
	   	<select name="categorey" class="xd">
	   		<option value="Carte Identite" >Carte d'Identité</option>
	   		<option value="Passeport">Passeport</option>
	   		<option value="Permis de Conduite">Permis de Conduite</option>

	   	</select>


	</div>





	<div class="input-group">
		<button type="submit" name="Search" class="btn">Recherche</button>
	</div>











	<?php

	  if (isset($_POST['Search'])) {

	$categorey = mysqli_real_escape_string($mysqli,$_POST['categorey']);

	$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
	$result2=mysqli_query($mysqli,$query2);
	?>

		<div class="input-group">

			<label>Opérateur ID</label>


		<select class="input-group2" name="docID">

	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		?>


		<option> <?php echo $row2['DoctorID'] ?> </option>



	   <?php

	} ?>
	 </select>
	 </div>


	<div class="input-group">
		<label>Rendez-vous ID</label>
		<input type="text" name="AppoID" >

	</div>




	<div class="input-group">
		<label>Date</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-group">
		<label>Temps</label>
		<input type="Time" name="Time">
	</div>

	 <div class="input-group">
			<button type="submit" name="Book" class="btn">Valider</button>
			</div>

	 <?php
}


	    ?>








</form>





</body>

</html>
