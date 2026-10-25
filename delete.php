<?php

  $id = addslashes($_GET['id']);
  if($id>0)
  { require "db_loc.php"; 
    $sq="DELETE FROM `vzkazy` WHERE `id` = '$id'";
    $vyslede = mysql_query("$sq");
    mysql_close(); 
  } 
  //echo "<SCRIPT>history.back();</SCRIPT>";
  echo "<SCRIPT>window.location.href=\"vzkazy.php\";</SCRIPT>";

?>
