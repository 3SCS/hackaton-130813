<?php
session_start();
if(isset($_POST['submit']))
{
  require_once('connexion_db/conn_db.php');
  $login=$_POST['login'];
  $mdp=md5($_POST['mdp']);
  $sql_auth="select * from  admin where";
  $sql_auth.=" log='$login' and mdp='$mdp'";
  $query_auth=mysql_query($sql_auth) or die(mysql_error());
  $nb=mysql_num_rows($query_auth);//compte le nbre de résultats
  
  $query_fiche=mysql_query($sql_auth) or die(mysql_error());
$fiche=mysql_fetch_object($query_fiche);
  if($nb>0){
  $_SESSION['login']=$login;
    header("location:admin/index.php");
    exit();}
       else{
                  $sql_auth="select * from  etudiant where";
  $sql_auth.=" login='$login' and mdp='$mdp'";
  $query_auth=mysql_query($sql_auth) or die(mysql_error());
  $nb=mysql_num_rows($query_auth);//compte le nbre de résultats
  
  $query_fiche=mysql_query($sql_auth) or die(mysql_error());
$fiche=mysql_fetch_object($query_fiche);
  if($nb>0){
  $_SESSION['login']=$login;
    header("location:etudiant/index.php?l=$fiche->id_et");
    exit();}
       
       }
            }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Identification admin</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>

<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="http://index.html"><img /></a><H1><STRONG>APPLICATION EN CONSTRUCTION</STRONG></H1></div>
    
    </div>

     
         <div class="login_form">
         
         <h3>Authentification</h3>
         
         <form action="" method="post" class="niceform">
         
                <fieldset>
                    <dl>
                        <dt><label for="login">Login:</label></dt>
                        <dd><input type="text" name="login" id="" size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="mdp">Password:</label></dt>
                        <dd><input type="password" name="mdp" id="" size="54" /></dd>
                    </dl>
                    
                    <dl>
                        <dt><label></label></dt>
                        <dd>
                    <input type="checkbox" name="interests[]" id="" value="" /><label class="check_label">enregistrer</label>
                        </dd>
                    </dl>
                    
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Entrer" />     <a href="inscription.php"><input  name="" id="submit" value="Creer un compte" />  </a>
                     </dl>
                    
                </fieldset>
                
         </form>
         </div>  
          
	
    
    
    <div class="footer_login">
    
    	<div class="left_footer_login">APPLICATION EN CONSTRUCTION </div>
    	
    
    </div>


</div>		
</body>
</html>
