<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>Cours</title>
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
<center><h2>Exercices</h2></center>
<br>
<form method='POST' name="frm">
	      <table width="664" height="82" border="1" align="center" cellpadding="3" cellspacing="0" class="frametab">
            
            
            <tr>
              <td colspan="8" class="fon_menu_g" > <center>LISTE DES exercices</center> </td>
            </tr>
            <tr>
             
              <td width="52" >Numero exercice</td>
			  <td width="33" >Libelle</td>
			  <td width="117" >Lien</td>
              
            </tr>
<?php
	include('Mysql_Connect.php');
	session_start();

	
	
		$query="select * from matiere";
		$result=mysql_query($query);
		while($data=mysql_fetch_array($result)){
			echo "<tr>";
		
			echo "<td >".$data['id_matiere']."</td>";
	    	echo "<td >".$data['nom']."</td>";
			echo "<td >".'<a href="'.$data['nom'].'.php?idmatiere=' . $data['id_matiere'] . '">Cliquez ici</a>'."</td >";		
		
			echo "</tr>";
		}
	
	


echo "<h2>Utilisateur Connecte:".$_SESSION['login']."</h2>";





?>
          </table>
	      
        </form>
	   
</table>


<br><br>
</section>
            
            <footer>
              
            </footer>
        </div>
    </body>
</html>
