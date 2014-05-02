<?php
session_start();
if (!isset($_SESSION['login'])) {
 header ('Location: connexion.php');
 exit();
}
else{
$base = mysql_connect ('mysql.hostinger.fr', 'u195323036_memb', 'zqbiqq');
mysql_select_db ('u195323036_mb', $base);
}
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=1024, user-scalable=no">
	<link rel='stylesheet' type='text/css' href='../style/style.css' />
	<meta name="viewport" content="initial-scale=1.0">
	<title>Utilisation</title>
</head>
<body>
<center>
<br />
<br />
<div id="box1">
<?php
$sql = 'SELECT pseudo, ip, nom, numall, numete FROM lampe WHERE pseudo="'.$_SESSION['login'].'"';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
while ($data = mysql_fetch_array($req)) {
    echo '<b><i>'.$data['ip'].'</i></b><br /><br />
    <table border="1">
 <caption></caption>
 <tbody><tr>
 <th>Lampe</th>
 <th> Fonction </th>
 </tr>
 <tr>
 <td>'.$data['nom'].'</td>
 <td>
	<button type="button" id="lightOn_'.$data['nom'].'" onclick="var iframe = document.getElementById(\'iframe_'.$data['nom'].'\'); iframe.src = \'http://'.$data['ip'].'/?'.$data['numall'].'\'; document.getElementById(\'lightOff_'.$data['nom'].'\').disabled=false; document.getElementById(\'lightOn_'.$data['nom'].'\').disabled=true;">ON</button><button type="button" id="lightOff_'.$data['nom'].'" onclick="var iframe = document.getElementById(\'iframe_'.$data['nom'].'\'); iframe.src = \'http://'.$data['ip'].'/?'.$data['numete'].'\'; document.getElementById(\'lightOn_'.$data['nom'].'\').disabled=false; document.getElementById(\'lightOff_'.$data['nom'].'\').disabled=true;">OFF</button>
 </td>
 </tr>
</tbody></table>
<br />
<iframe style="visibility:hidden;display:none" id="iframe_'.$data['nom'].'" src="http://'.$data['ip'].'/"></iframe>';


}
?>
</div>
</center>
</body>
</html>
