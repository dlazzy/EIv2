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
	<meta name="viewport" content="width=1024, user-scalable=no">
	<link rel='stylesheet' type='text/css' href='../style/style.css' />
	<meta name="viewport" content="initial-scale=1.0">
	<title>Connexion</title>
</head>
<body>

<center>
	<h1>
	Connecté
	</h1>
</center>

</body>
</html>