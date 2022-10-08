<?php include('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Inscription</h2>
</div>

<form method="post" action="1st.php" enctype="multipart/form-data">

	<?php include ('../datalayer/errors.php'); ?>

	<div class="input-group">
		<label>ID Utilisateur</label>
		<input type="text" name="UserID" >

	</div>


	<div class="input-group">
		<label>Nom complet</label>
		<input type="text" name="Name" >


	</div>

	<div class="input-group">
		<label>Adresse</label>
		<input type="text" name="Address">

	</div>

	<div class="input-group">
		<label>Numéro de Téléphone</label>
		<input type="text" name="ContactNumber">


	</div>


	<div class="input-group">
		<label>Email</label>
		<input type="text" name="Email">

	</div>

	<div class="input-group">
		<label>Mot de Passe</label>
		<input type="text" name="password">

	</div>

	<div class="input-group">
		<label>Groupe Sanguin </label>
		<input type="text" name="bloodtype">

	</div> 
   

	<div class="input-group">
		<button type="submit" name="Register" class="btn">Register</button>
	</div>

	<p>
		Déjà Inscrit ? <a href="login.php">Connexion </a>
	</p>
	




</form>

</body>
</html>