<?php
require_once('connexion_db/conn_db.php');
//Récupération des infos provenant du formulaire
$n=get_magic_quotes_gpc()?$_POST['nom']:addslashes($_POST['nom']);
$p=get_magic_quotes_gpc()?$_POST['prenom']:addslashes($_POST['prenom']);
$l=get_magic_quotes_gpc()?$_POST['login']:addslashes($_POST['login']);
$mdp=get_magic_quotes_gpc()?$_POST['mdp']:addslashes($_POST['mdp']);
 $mdp=md5($_POST['mdp']);
$sql_ajout="insert into etudiant (nom,prenom,login,mdp) ";
$sql_ajout.=" values('$n','$p','$l','$mdp')";
$query_ajout=mysql_query($sql_ajout) or die(mysql_error());
if($query_ajout){
$idE="select * from etudiant where login='$l'";
$result=mysql_query($idE); 
while($parts=mysql_fetch_object($result)) {
$po=$parts->id_et;
}
$A1=get_magic_quotes_gpc()?$_POST['1']:addslashes($_POST['1']);
$A2=get_magic_quotes_gpc()?$_POST['2']:addslashes($_POST['2']);
$A3=get_magic_quotes_gpc()?$_POST['3']:addslashes($_POST['3']);
$A4=get_magic_quotes_gpc()?$_POST['4']:addslashes($_POST['4']);
$A5=get_magic_quotes_gpc()?$_POST['5']:addslashes($_POST['5']);
$A6=get_magic_quotes_gpc()?$_POST['6']:addslashes($_POST['6']);
$A7=get_magic_quotes_gpc()?$_POST['7']:addslashes($_POST['7']);
$A8=get_magic_quotes_gpc()?$_POST['8']:addslashes($_POST['8']);
$A9=get_magic_quotes_gpc()?$_POST['9']:addslashes($_POST['9']);



$sql_ajout2="insert into chalange (iid_et,A1,A2,A3,A4,A5,A6,A7,A8,A9) ";
$sql_ajout2.=" values('$po','$A1','$A2','$A3','$A4','$A5','$A6','$A7','$A8','$A9')";
$query_ajout2=mysql_query($sql_ajout2) or die(mysql_error());
}
$sql_part="select * from question";
$query_part=mysql_query($sql_part) or die(mysql_error());
//header("location:index.php");
if($query_ajout2){

while($parts=mysql_fetch_object($result)) {
echo $parts->id_et;
}
  header("location:index.php");
echo"<h3 align='center'>Inscription validée!</h3>
<a href='index.php'>Accueil</a>";
} else {
      echo"<h3 align='center' style='color:red'>
            Echec! Veuillez reprendre
            </h3>
            <a href='formmat.php'>Reprendre</a>";
  }
?>
