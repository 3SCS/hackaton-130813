<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php


$server="localhost";
$user="root";
$passwd="";

$con=mysql_connect($server,$user,$passwd) or die ("Probleme de connexion au serveur");

$base="utilisateur";

$select= mysql_select_db($base,$con) or die ("Probleme de connexion à la base");



?>
</body>
</html>
