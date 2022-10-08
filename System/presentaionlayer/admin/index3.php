<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>APC<span>Tichy</span></h1>
		<nav>




		<ul>


			<li><a href="index3.php">Ajouter/Supprimer Opérateur</a></li>
			<li><a href="viewdoctor.php">Afficher Opérateurs</a></li>
			<li><a href=" viewpatients.php">Afficher Citoyens</a></li>
			<li><a href="viewappointments.php">Afficher Rendez-Vous</a></li>
			<li><a href="feedback.php">FeedBack</a></li>

  			<li><a href="../../applicationlayer/Doctorpatient.php">Déconnexion</a></li>








		</ul>




	</nav>




</header>
<body>

		<div class="headerA">
	<h2>Ajouter Opérateur</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>Opérateur ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Nom Opérateur</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Adresse</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Numéro de Téléphone</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Mot de Passe</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Catégorie</label>
	   	<select name="addcategory" class="xd">
	   		<option value="Carte Identite" >Carte d'Identité</option>
	   		<option value="Passeport">Passeport</option>
	   		<option value="Permis de Conduite">Permis de Conduite</option>





	   	</select>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Ajouter</button>
	</div>







</form>
	<div class="headerAD">
	<h2>Supprimer Opérateur</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>Opérateur ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Supprimer</button>
	</div>

</form>







</body>
</html>
