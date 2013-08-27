<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inscription</title>
<style type="text/css">
<!--
.Style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<?php
   
	$type=$_POST['type'];
	$nom=$_POST['nom']; 
	$prenom=$_POST['prenom']; 
	$date_naiss=$_POST['date_naiss']; 
	$id_badge=$_POST['id_badge']; 
	$login=$_POST['login'];
	$password=$_POST['password']; 
	$sexe=$_POST['sexe']; 
	
	
	include_once('Mysql_Connect.php');
	
	$requete="INSERT INTO profil (type,nom,prenom,date_naiss,id_badge,login,password,sexe) VALUES('$type','$nom','$prenom','$date_naiss','$id_badge','$login','$password','$sexe')";
	$result=mysql_query($requete) or die ("Probleme d'insertion");

echo "insertion reussie !";
header("Location:authentifier.html");
?>





</body>
</html>

