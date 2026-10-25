<?php
//header("Content-Type: text/html; charset=UTF-8");
mysql_query("SET NAMES 'utf8'"); 
mysql_query('SET CHARACTER SET utf8');
 $spojeni = mysql_connect("localhost","root","password" ) or die ('<b>Critical error!</b><br>Nepodarilo se pripojit k databazi!');
  mysql_select_db("galerie", $spojeni) or die ('Spatne zadana databaze v db.php');
  mysql_query("SET character_set_client=utf8");
  mysql_query("SET character_set_connection=utf8");
  mysql_query("SET character_set_results=utf8");  
?>