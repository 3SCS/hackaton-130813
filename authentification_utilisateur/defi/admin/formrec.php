<?php
session_start();//lancement de la session
if(!isset($_SESSION['login']))//Si authentification non valide
{
  //Redirection vers l'authentification
  header("location:../login.php");
  exit();
}
require_once('connexion_db/conn_db.php');
$sql_part="select * from materiel";
$query_part=mysql_query($sql_part) or die(mysql_error());

$sql_parts="select * from main";
$query_parts=mysql_query($sql_parts) or die(mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Construction </title>
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
<script src="jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="http://index.html"><img /></a><H1><STRONG>EN CONSTRUCTION</STRONG></H1></div>
    
    <div class="right_header"><a href="sortie.php" class="logout">DECONNEXION</a></div>
    <div class="jclock"></div>
    </div>
    
   
           
           
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
    
    		<div class="sidebar_search">
            <form>
            <input type="text" name="" class="search_input" value="Rechercher..." onclick="this.value=''" />
            <input type="image" class="search_submit" src="images/search.png" />
            </form>            
            </div>
    
         
         
         
         
         
            
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h3>Messages clients</h3>
                <img src="images/info.png" alt="" title="" class="sidebar_icon_right" />
                <p>

                </p>                
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
            
             
            
            
              
    
    </div>  
    
    <div class="right_content">            
        
   
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded"></th>
            <th scope="col" class="rounded-q4"></th>
        </tr>
    </thead>
        <tfoot>
    	
    </tfoot>
    
</table>

	 <!--a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new item</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_lft"></span><strong>View all items from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete items</strong><span class="bt_red_r"></span></a--> 
     
     
        <!--div class="pagination">
        <span class="disabled"><< prev</span><span class="current">1</span><a href="">2</a><a href="">3</a><a href="">4</a><a href="">5</a>�<a href="">10</a><a href="">11</a><a href="">12</a>...<a href="">100</a><a href="">101</a><a href="">next >></a>
        </div--> 
      
                  


      </br>     
     
     
         <div class="form">
		 <form action="ajoutprojet.php" method="post" name="formulaire" class="niceform" onsubmit="return verification();">
       <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
	<h2>MATERIAUX</h2>
    	<tr>
        
        	 <th scope="col" class="rounded"></th>
        	  <th scope="col" class="rounded">QUANTITE</th>
            <th scope="col" class="rounded">PRIX UNITAIRE</th>
          
        </tr>
    </thead>
        <tfoot>
    
    </tfoot>
    <tbody>
    <?php
while($part=mysql_fetch_object($query_part))
{//tant qu'il y a des participants
echo"
    	<tr>
        	
        	 ";   ?><?php  echo" </td>
            <td>$part->nom_materiel</td>
	        <td><input type='text' name='pu'  size='15' /></td>
            <td><input type='text' name='pu'  size='15' value='$part->pu'></td>
        
            
        </tr>";}?>
    
    </tbody>
    </table>
         <table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
	<br><br><br><br>
	<h2>MAIN D'OEUVRES</h2>
    	<tr>
        
        	 <th scope="col" class="rounded">NOMBRE</th>
        	  <th scope="col" class="rounded">SPECIALISTE</th>
            <th scope="col" class="rounded">SALAIRE</th>
	      <th scope="col" class="rounded">NOMBRE DE JOURS</th>
     
          
        </tr>
    </thead>
        <tfoot>
    
    </tfoot>
    <tbody>
    <?php
while($parts=mysql_fetch_object($query_parts))
{//tant qu'il y a des participants
echo"
    	<tr>
        	
        	 ";   ?><?php  echo" </td>
		 <td><input type='text' name='pu'  size='15' /></td>
            <td>$parts->libellemain</td>
	    <td><input type='text' name='pu'  size='15' value='$parts->gain' /></td>
	        <td><input type='text' name='pu'  size='15' /></td>
            <td>$parts->pu</td>
        
            
        </tr>";}?>
    
    </tbody>
</table>
	 <br> <br>
	 <dl>
                        <dt><label for="email">MATERIEL ET DIVERS:</label></dt>
                        <dd><input type="text" name="pu" id="" size="25" /></dd>
                    </dl>
	  <dl>
                        <dt><label for="email">SUIVI:</label></dt>
                        <dd><input type="text" name="pu" id="" size="25" /></dd>
                    </dl>
	                      <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="ENREGISTRER" />
                     </dl>
</form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    </div>

</div>		
</body>
</html>
