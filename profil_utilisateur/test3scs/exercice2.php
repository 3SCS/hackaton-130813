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
Un ordinateur est une machine �lectronique qui fonctionne par la lecture s�quentielle d'un ensemble d'instructions qui lui font ex�cuter des op�rations logiques et arithm�tiques sur des chiffres binaires.

D�s sa mise sous tension, un ordinateur ex�cute, l'une apr�s l'autre, des instructions qui lui font lire, manipuler, puis r��crire un ensemble de donn�es auquel il a acc�s. Des tests et des sauts conditionnels permettent de changer d'instruction suivante, et donc d'agir diff�remment en fonction des donn�es ou des n�cessit�s du moment.

Les donn�es � manipuler sont obtenues, soit par la lecture de m�moires, soit par la lecture de composants d'interface (p�riph�riques) qui repr�sentent des donn�es physiques ext�rieures en valeurs binaires (d�placement d'une souris, touche appuy�e sur un clavier, temp�rature, vitesse, compression�). Une fois utilis�es, ou manipul�es, les donn�es sont r��crites, soit dans des m�moires, soit dans des composants qui peuvent transformer une valeur binaire en une action physique (�criture sur une imprimante ou sur un moniteur, acc�l�ration ou freinage d'un v�hicule, changement de temp�rature d'un four�). L'ordinateur peut aussi r�pondre � des interruptions qui lui permettent d�ex�cuter des programmes de r�ponses sp�cifiques � chacune, puis de reprendre l�ex�cution s�quentielle du programme interrompu.

</p>

</body>
</html>


