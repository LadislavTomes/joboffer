<?php
 $spojeni = mysql_connect("localhost","ilona","hastur" ) or die ('<b>Critical error!</b><br>Nepodarilo se pripojit k databazi!');
  mysql_select_db("Ilona", $spojeni) or die ('Spatne zadana databaze v db.php');
  mysql_query("SET character_set_client=utf8");
  mysql_query("SET character_set_connection=utf8");
  mysql_query("SET character_set_results=utf8");
?>
