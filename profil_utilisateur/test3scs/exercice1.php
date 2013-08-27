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
Réparation d'une ligne de chemin de fer, peinture de Konstantin Savitsky (en) exécutée en 1874.
Selon la définition de l'AFNOR, la maintenance vise à maintenir ou à rétablir un bien dans un état spécifié afin que celui-ci soit en mesure d'assurer un service déterminé1.
La maintenance regroupe ainsi les actions de dépannage et de réparation, de réglage, de révision, de contrôle et de vérification des équipements matériels (machines, véhicules, objets manufacturés, etc.) ou même immatériels (logiciels).
Un service de maintenance peut également être amené à participer à des études d'amélioration du processus industriel, et doit, comme d'autres services de l'entreprise, prendre en considération de nombreuses contraintes comme la qualité, la sécurité, l'environnement, le coût, etc.
<ul>

<li>5 Niveaux de maintenance</li>
<li>6 Les sigles de la maintenance</li>
<li>7 Maintenance et humour</li>
<li>8 Bibliographie</li>
<li>9 Notes et références</li>
<li>10 Annexes</li>
<li>10.1 Liens externes</li>
<li>Origines</li>
</ul>
</p>

</body>
</html>


