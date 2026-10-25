<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<b></b>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>UPLOAD</title>
<SCRIPT>
var x = "";
function OnLoad(){ }
</SCRIPT>
<?php
     require "../../db_loc.php";     // pripojime se k databazi db_loc.php
     $cesta = addslashes($_GET['cesta']); //Name<br />
     //echo "<script>alert('$cesta')</script>";
   $sq= "SELECT * FROM `images` WHERE `cesta` = '$cesta'";
   $vyslede = mysql_query("$sq");    $i = 0;
  // echo "<script>alert('$vyslede')</script>";
   $i = 0;
   if($rade = mysql_fetch_array($vyslede))
   {  $id0 = $rade["id"];      $i++;    
   }  if(($i < 1)||($id0<=0)) { echo "<script>alert('DB Error - More same titles, cesta !!!')</script>"; return;}
   //echo $rade['title'];
   //echo $rade['technika'];
   $technika = utf8_decode($rade['technika']);
   $title    = utf8_decode($rade['title']);
   //echo "$technika";
?>
<body onload="OnLoad()" onunload="window.opener.opener=''; window.opener.close()">
<p style="margin: 0px 30px">&nbsp;</p>
<p style="margin: 0px 30px">&nbsp;</p>

<p style="margin: 0px 30px"><a title="Zpět na titul" href="../../index.html">
<img border="0" src="../foot.jpg" width="139" height="52"></a></p>

<p style="margin: 0px 30px">&nbsp;</p>

<p style="margin: 0px 30px">&nbsp;</p>

<H1>UPLOAD </H1>
<form name=f enctype="multipart/form-data" action="./form.php" method="post">
   <fieldset style="width:300px;"> <legend>Titulek a Technika podporují češtinu</legend>
   <p><table border="1"><tr> 
    <td >Titulek : &nbsp;</td>
      <td ><input value="<?php echo "$title"; ?>" type="text" name="title" maxlength="200"/></td>
    </tr><tr>       
    <td >Technika : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td ><input value="<?php echo "$technika"; ?>" type="text" name="technika" maxlength="32"/></td>
    </tr><tr> 
    <td >Rozmer : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td ><input value="<?php echo $rade['size']; ?>" type="text" name="size" maxlength="32"/></td>
    </tr><tr>           
    <td >Cena : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td ><input value="<?php echo $rade['cena']; ?>" type="text" name="cena" maxlength="32"/></td>
    </tr><tr>    
  </table>      
  <br><BR>
	</p>
     Nyní se edituje: <input type="text" name="cesta" id="cesta" value="<?php echo "$cesta" ?>" />
   </fieldset>
  <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UPLOAD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" />
</form>

  <br><BR>
    <br><BR>
      <br><BR>
        <br><BR>
  <br><BR>
    <br><BR>
      <br><BR>
        <br><BR>      
</body>
</html>