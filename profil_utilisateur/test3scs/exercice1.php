<?php
include('Mysql_Connect.php');
session_start();
	
$login=$_SESSION['login'];
$mat=$_GET['idmatiere'];




setcookie('login', $login, time() + 365*24*3600, null, null, false, true);
setcookie('idmatiere',$mat, time() + 365*24*3600, null, null, false, true); 

$heure = date("H:i");
$phero=0.1;

$req1="insert into visites (login,id_exo,heure,phero) values ('$login','$mat','$heure','$phero')";
$res1=mysql_query($req1) or die("erreur d'insertion");


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>Exercice 1</title>
    </head>
    
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                   
                    <h1>TEST</h1>
                    <h2>Profil utilisateur</h2>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
						
                        <li><a href="authentifier.html">Connexion</a></li>
						<li><a href="cours3.php">Cours</a></li>
                        <li><a href="enregistrement.html">Inscription</a></li>
                       
                    </ul>
                </nav>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                  
                    <a href="#" class="bouton_rouge"> <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section>

<h2>Maintenance</h2>

<p>
R�paration d'une ligne de chemin de fer, peinture de Konstantin Savitsky (en) ex�cut�e en 1874.
Selon la d�finition de l'AFNOR, la maintenance vise � maintenir ou � r�tablir un bien dans un �tat sp�cifi� afin que celui-ci soit en mesure d'assurer un service d�termin�1.
La maintenance regroupe ainsi les actions de d�pannage et de r�paration, de r�glage, de r�vision, de contr�le et de v�rification des �quipements mat�riels (machines, v�hicules, objets manufactur�s, etc.) ou m�me immat�riels (logiciels).
Un service de maintenance peut �galement �tre amen� � participer � des �tudes d'am�lioration du processus industriel, et doit, comme d'autres services de l'entreprise, prendre en consid�ration de nombreuses contraintes comme la qualit�, la s�curit�, l'environnement, le co�t, etc.
<ul>

<li>5 Niveaux de maintenance</li>
<li>6 Les sigles de la maintenance</li>
<li>7 Maintenance et humour</li>
<li>8 Bibliographie</li>
<li>9 Notes et r�f�rences</li>
<li>10 Annexes</li>
<li>10.1 Liens externes</li>
<li>Origines</li>
</ul>
</p>

</body>
</html>


