<?php
require_once('connexion_db/conn_db.php');
//Récupération des infos provenant du formulaire
$n=get_magic_quotes_gpc()?$_POST['nom']:addslashes($_POST['nom']);
$sql_ajout="insert into question (libelle) ";
$sql_ajout.=" values('$n')";
$query_ajout=mysql_query($sql_ajout) or die(mysql_error());

header("location:formmat.php");
if($query_ajout){
echo"<h3 align='center'>Inscription validée!</h3>
<a href='listemat.php'>Accueil</a>";
} else {
      echo"<h3 align='center' style='color:red'>
            Echec! Veuillez reprendre
            </h3>
            <a href='formmat.php'>Reprendre</a>";
  }
?>
