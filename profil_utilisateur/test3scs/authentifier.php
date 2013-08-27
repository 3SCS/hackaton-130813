<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Connexion</title>
</head>

<body>

<?php 

$login=$_POST["log"];
$pass=$_POST["pass"];

include('Mysql_Connect.php');

$requete="select * from profil where login='$login' AND password='$pass'";

$result=mysql_query($requete) or die ("Probleme d'insertion");

$ligne = mysql_num_rows($result);

$resultat=mysql_fetch_array($result);

if($ligne==0) header("Location:authentifier.html?erreur=login");
else
session_start();
$_SESSION['login']=$login;
//$_SESSION['id']=$result['id'];
 header("Location:cours3.php");


?>
</body>
</html>
