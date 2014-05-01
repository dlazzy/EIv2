<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=1024, user-scalable=no">
	<link rel='stylesheet' type='text/css' href='../style/style.css' />
	<meta name="viewport" content="initial-scale=1.0">
	<title>Inscription</title>
</head>
<body>
<center>
<br />
<br />

<div id="box2">

<form method="post" action="processsignup.php" class="form-container" id="form">

<div class="form-title"><h2>Inscription</h2></div>

	<div class="form-title">Pseudo</div>
	<input class="form-field" type="text" name="pseudo" required="true" /><br />
	
	<div class="form-title">Mot de passe</div>
	<input class="form-field" type="password" name="mdp" required="true" /><br />
	
	<div class="form-title">Confirmez le mot de passe</div>
	<input class="form-field" type="password" name="confirmmdp" required="true" /><br />
	
	<div class="form-title">Votre adresse e-mail</div>
	<input class="form-field" type="text" name="mail" required="true" /><br />
	
	
	<div class="submit-container">
	<input class="submit-button" type="submit" value="Validez" />

<br />
<br />
</div>
</form>

</div>

</center>
</body>
</html>