<?php
if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['mdp']) && !empty($_POST['mdp'])) && (isset($_POST['confirmmdp']) && !empty($_POST['confirmmdp'])) && (isset($_POST['mail']) && !empty($_POST['mail'])) ) {
if ($_POST['mdp'] != $_POST['confirmmdp']) {
    echo 'Les deux mot de passe sont différents !'
}
else {
    $base = mysql_connect ('mysql.hostinger.fr', 'u195323036_memb', 'zqbiqq');
    mysql_select_db ('u195323036_mb', $base);
	
$pseudo = safe($_POST['pseudo']);
$mdp = safe(md5($_POST['mdp']));
$email = safe($_POST['email']);

//*vérifie si le login n'existe pas
$sql = 'SELECT count(*) FROM membre WHERE login="'.$pseudo.'"';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$data = mysql_fetch_array($req);

if ($data[0] == 0) {
    $sql = 'INSERT INTO membre VALUES("", "'.$pseudo.'", "'.$mdp.'", "'.$email'")';
  mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
  session_start();
  $_SESSION['login'] = $pseudo;
  header('Location: membre.php');
  exit();
  }
  else {
  echo 'Un membre possède déjà ce login.';
  }
 }
 }
 else {
 echo 'Au moins un des champs est vide.';
 }
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