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

<h2>Ordinateur</h2>

<p>
Un ordinateur est une machine électronique qui fonctionne par la lecture séquentielle d'un ensemble d'instructions qui lui font exécuter des opérations logiques et arithmétiques sur des chiffres binaires.

Dès sa mise sous tension, un ordinateur exécute, l'une après l'autre, des instructions qui lui font lire, manipuler, puis réécrire un ensemble de données auquel il a accès. Des tests et des sauts conditionnels permettent de changer d'instruction suivante, et donc d'agir différemment en fonction des données ou des nécessités du moment.

Les données à manipuler sont obtenues, soit par la lecture de mémoires, soit par la lecture de composants d'interface (périphériques) qui représentent des données physiques extérieures en valeurs binaires (déplacement d'une souris, touche appuyée sur un clavier, température, vitesse, compression…). Une fois utilisées, ou manipulées, les données sont réécrites, soit dans des mémoires, soit dans des composants qui peuvent transformer une valeur binaire en une action physique (écriture sur une imprimante ou sur un moniteur, accélération ou freinage d'un véhicule, changement de température d'un four…). L'ordinateur peut aussi répondre à des interruptions qui lui permettent d’exécuter des programmes de réponses spécifiques à chacune, puis de reprendre l’exécution séquentielle du programme interrompu.

</p>

</body>
</html>


