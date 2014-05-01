<?php

if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['mdp']) && !empty($_POST['mdp']))) {
$base = mysql_connect ('mysql.hostinger.fr', 'u195323036_memb', 'zqbiqq');
mysql_select_db ('u195323036_mb', $base);
function safe($value){ 
   return mysql_real_escape_string($value); 
}
$pseudo = safe($_POST['pseudo']);
$mdp = safe($_POST['mdp']);

$sql = 'SELECT count(*) FROM membre WHERE login="'.$pseudo.'" AND pass="'.$mdp.'"';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$data = mysql_fetch_array($req);

mysql_free_result($req);
mysql_close();

if ($data[0] == 1) {
    session_start();
    $_SESSION['login'] = $pseudo;
    header('Location: membre.php');
    exit();
}
elseif ($data[0] == 0) {
    echo 'Compte introuvable';
    header ('Location: connexion.php');
}
else {
    echo 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
    }
}
else {
    echo 'Veuillez remplir tout les champs';
    header ('Location: connexion.php');
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


</body>
</html>
