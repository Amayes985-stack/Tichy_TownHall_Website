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



<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label>Rendez-vous ID</label>
		<input type="text" name="AppoID2" >

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn">Cancel</button>
	</div>









		</form>
	</form>


</body>
</html>
