<?php
session_start();
if (!isset($_SESSION['login'])) {
 header ('Location: connexion.php');
 exit();
}
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel='stylesheet' type='text/css' href='../style/style.css' />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" media="screen and (max-width: 640px)" href="../style/scq.css" />
	<title>Connexion</title>
</head>
<body>
<br />
<br />
<div id="box1">
<center>
	<?php

	?>
	<br />
	<br />
	<a class="button" href='ajouter.php'>Ajouter</a>
	<br />
	<br />
	<a class="button" href='afficher.php'>Utilisation</a>
	<br />
	<br />
	<a class="button" href='deconnexion.php'>Déconnexion</a>
</center>
</div>
</body>
</html>
