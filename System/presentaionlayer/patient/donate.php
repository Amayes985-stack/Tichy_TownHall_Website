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
	<h2>Faire un Don</h2>
</div>

	<form method="post" action="donate.php">

	<?php include ('../../datalayer/errors.php'); ?>




	<?php
if (isset($_POST['Donate'])) {

	$DUserID 			= $mysqli -> real_escape_string($_POST['DUserID']);
	$DUsername 			= $mysqli -> real_escape_string($_POST['DName']);
	$DAddress 			= $mysqli -> real_escape_string($_POST['DAddress']);
	$DContactNumber		= $mysqli -> real_escape_string($_POST['DContactNumber']);
	$DEmail 			= $mysqli -> real_escape_string($_POST['DEmail']);
	$Dbloodtype 		= $mysqli -> real_escape_string($_POST['Dbloodtype']);
	$Dorgan				= $mysqli -> real_escape_string($_POST['Organ']);





	if (empty($DUserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($DUsername)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($DAddress)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($DContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($DEmail)) {
	array_push($errors,"Email is required");
	# code...
}


if (empty($Dbloodtype)) {
	array_push($errors,"Bloodtype is required");
	# code...
}







if(count($errors)==0){



	$sql7 = "INSERT INTO  donor (donarID,donarname,donaraddress,donarnumber,donaremail,donarblood,organ) VALUES ('$DUserID','$DUsername','$DAddress','$DContactNumber','$DEmail','$Dbloodtype','$Dorgan') ";
	if ($mysqli -> query($sql7)) { ?>

	<h2 class="thanks"> <?php printf("Merci pour le Don ! ",$mysqli->affected_rows);?></h2>


		<?php



	}
}
}














?>


	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="DUserID" value=" <?php echo "" .isset($_SESSION['UserID']);?> " >

	</div>


	<div class="input-group">
		<label>Nom</label>
		<input type="text" name="DName" value="<?php echo $col['Name']; ?> " >


	</div>

	<div class="input-group">
		<label>Adresse</label>
		<input type="text" name="DAddress" value="<?php echo $col['Address']; ?>">

	</div>

	<div class="input-group">
		<label>Numéro Téléphone</label>
		<input type="text" name="DContactNumber" value=" <?php echo $col['ContactNumber']; ?>">


	</div>


	<div class="input-group">
		<label>Email</label>
		<input type="text" name="DEmail" value="<?php echo $col['Email']; ?>">

	</div>

	<div class="input-group">
		<label>Groupe Sanguin</label>
		<input type="text" name="Dbloodtype" value="<?php echo $col['Bloodtype']; ?>">

	</div>

	<div class="input-group">
		<label>Type d'Organes</label>
	   	<select name="Organ" class="xd">
	   		<option value="Blood">Sang</option>
	   		<option value="Heart">Coeur</option>
	   		<option value="kidney">kidney</option>
	   		<option value="Eye">Oeil</option>

	   	</select>

	<div class="input-group">
		<button type="submit" name="Donate" class="btn">Faire un Don</button>
	</div>

</div>





</form>

















</body>
</html>
