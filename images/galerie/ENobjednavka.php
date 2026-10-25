<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">

<head>
  <meta name="keywords" content="Ilona Kubíčková,Kubíčková,ilona,kubickova,obrazy,malirka,malířka,paintings,paint,olej,plátno,canvas,příroda,květiny,kytky,portrét,malování,prodej obrazů,surealismus,modernismus" />
  <meta name="robots" content="ALL, FOLLOW" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">

<title>Ilona - objednavka </title>
<style>
body {SCROLLBAR-FACE-COLOR: #FFFFFF; SCROLLBAR-HIGHLIGHT-COLOR: #E1E1E1; SCROLLBAR-SHADOW-COLOR: #FFFFFF; SCROLLBAR-3DLIGHT-COLOR: #FFFFFF; SCROLLBAR-ARROW-COLOR: #E1E1E1; SCROLLBAR-TRACK-COLOR: #FFFFFF; FONT-FAMILY: Arial, Verdana; SCROLLBAR-DARKSHADOW-COLOR: #E1E1E1 }
.style5{float:left; font-size:10pt;	color: #096a39;	font-family: Arial;}

.butt { /*width:160px; height:30px;*/ font-family: Arial; color: rgb(9, 106, 57); font-size: 10px; }

  </style>

 <SCRIPT>     
      function Disable(id, val)
      { document.getElementById('blast').value = val;
        //alert(document.getElementById('blast').value);
      }
      function Check( id )
      { cid = document.getElementById(id);
        if (cid.value == 0) {
            cid.value == 1;
        } else if (cid.value == 1) {
            cid.value == 0;
        }
      }      
      function OpenTable(TableN)
      {
        window.location.href=TableN; 
      }
      function Table(NextTable)
      { // onclick="Objednavka()
        // onclick="Obchod()
        
        // while checks 
        // objednavka ?checks=0010
                
        //unset($arr[5]); 
        
        var checks = "";
        var i = 1;  
        //alert("cid " + document.getElementById("c0").value);
        //alert("cid " + document.getElementById("c2").value);
        
        while (document.getElementById("c"+i)) {
          cid = document.getElementById("c"+i);
          //alert("cid " + cid.checked);
          var val = 0;
          if(cid.checked)
            val = 1;            
          checks += "&c" +i +"=" +val;
          
          i++;
        }
        //alert(checks);
        /*
        var i = 0;
        while (cid = (document.getElementById("c"+(i++))) {
          alert("cid " + cid.value);
          checks += "&" + 0;
        }
        alert("All");
        */
        if(NextTable == 'Objednavka')
          OpenTable("ENobjednavka.php?Objednavka="+i+checks);
        else if(NextTable == 'Obchod')
          OpenTable("ENobjednavka.php?Obchod="+i+checks);
        
      }
      
  </SCRIPT>  
</head>

<title>Ilona Kubíčková - kontakt</title>
</head>

<body>

<p style="margin: 0px 30px">&nbsp;</p>
<p style="margin: 0px 30px">&nbsp;</p>

<p style="margin: 0px 30px; cursor :pointer;"><a title="Back" >
<img border="0" onclick="Table('Obchod');" src="foot.jpg" width="139" height="52"></a></p>


<p style="margin: 0px 30px">&nbsp;</p>

<p style="margin: 0px 30px">&nbsp;</p>

<p style="margin: 0px 30px">&nbsp;</p>

<?php

ini_set (
"include_path", (
"../../PEAR/" .
PATH_SEPARATOR .
ini_get ("include_path")
)
);
require_once "Mail.php";
require_once "../../AtMail_smtp.php";


  if ((isset($_REQUEST['Objednavka']))||(isset($_REQUEST['Obchod'])))
  {     
    $cid = $_SESSION['Cart'];
    $cart = array(NULL);// Array();  
    for($i=1; $i< sizeof($cid); $i++)
    { if(!$_REQUEST['c'.$i])
      { //unset($cid[$i]);
        //echo "<script>alert(' unset $i');</script>"; 
      } else {
        $cart[]=$cid[$i];
      }
    }    
    // reset ($cid); foreach ($cid); 
    //sort($cid);
    //$N = sizeof($cid);
    //echo "$N";  
    
    $_SESSION['Cart'] = $cart; //Array();
    session_write_close();

    //if (isset($_REQUEST['Objednavka']))
    //{ echo "<script>OpenTable(\"ENobjednavka.php\");</script>";
    //  exit;
    //}
    if (isset($_REQUEST['Obchod']))
    { echo "<script>OpenTable(\"ENobchod.php?new_cart=1\");</script>";
      exit;  //print_r ($_SESSION['Cart']);
    }
  }
  
//print_r ($_SESSION['Cart']);

  if (isset($_REQUEST['email']))
  { $from = trim($_POST['email']);
    if($from=="")
    { echo "<SCRIPT>alert(\"E-Mail must be filed correctly!\");</SCRIPT>";
      echo "<script>history.back();</script>";
      return;
    }  
    if (!eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$',$from)) {  //else if (empty($_POST['last_name']))
      echo "<script>alert(\"Uncorrect email !!! \\n Must be field in the form username @ domain . extension\")</script>"; //DBG  RE regex("%s, w+@w+ \.w+"))
      echo "<script>history.back();</script>";
      return; 
    }    
    //session_start();
    $subject = "Objednavka"; // Vzkaz
    $body = (trim($_POST['jmeno']))."\r\n".(trim($_POST['ulice']))."\r\n".(trim($_POST['mesto']))."\r\n".trim($_POST['psc'])."\r\n".trim($_POST['platba'])."\r\n".trim($_POST['doprava']);
    //$body .= "\r\n".$_SESSION['Cart'];
    $cid = $_SESSION['Cart'];
    $N = sizeof($cid);    
    for($i=1;  $i < $N;  $i++)
    { $body .= "\r\n".$i.".) ".$cid[$i];
    }    
  
    AtMail_smtp($to, $from, "Od : ".$from."\n\r".$body, $subject.$from);
    //echo "<SCRIPT>alert(\"Objednavka\");</SCRIPT>";
    //echo "<SCRIPT>alert(\"$_POST['jmeno']\");</SCRIPT>";
    //print_r ($body);
    //return;
    
    echo "<DIV class=\"style5\">Your order was send successfully <BR> & will be executed as soon as possible.</DIV>";
    session_destroy();
    exit;
  }
?>

<div style="margin: 0px 30px;">
<form id="objednavka" method="POST" action="ENobjednavka.php" class="style5" > 
  <!--objednavka.php webbot bot="SaveResults" u-file="C:\Documents and Settings\OSuser\Dokumenty\wwwnew\_private\form_results.csv" s-format="TEXT/CSV" s-label-fields="TRUE" -->   
   <fieldset style="width:300px;"> <legend>Yours data </legend>
   <p><table border="0"><tr> 
    <td >Your name: &nbsp;</td>
      <td ><input type="text" name="jmeno" maxlength="32"/></td>
    </tr><tr>       
    <td >Street & No.: &nbsp;</td>
      <td ><input type="text" name="ulice" maxlength="32"/></td>
    </tr><tr>
    <td > City:</td> 
      <td ><input type="text" name="mesto" maxlength="32"/></td>
    </tr><tr>
    <td >ZIPcode: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td ><input type="text" name="psc"  maxlength="9"/></td>
    </tr><tr>
    <td >E-Mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td ><input type="text" name="email" maxlength="64" value ="" /></td>  
    </tr>
  </table>      
      </p>
   </fieldset> 
   <p> <span>Select a payment methode :</span>
      <input type="radio" name="oblast" value="0" onclick="Check('osobne','platba')"/>Personally
      <input type="radio" name="oblast" value="0" onclick="Check('prevodem','platba')"/>Transfer on account
      <input type="radio" name="oblast" value="0" onclick="Check('dobirkou','platba')"/>Cash on delivery (COD) 
      <input type="radio" name="oblast" value="0" onclick="Check('PaySec','platba')"/>PaySec
      <input type="text" name="platba" id="platba" value =""  style="visibility:hidden;"/><br/>
    <span>Select a transport methode :</span>
      <select name="urovenpgm" id="pgm" style="color: #096a39;">      
        <option value="0" onclick="Check('0','doprava')">--- please select ---</option>
        <option value="1" onclick="Check('osobne','doprava')">Personal takeover </option>
        <option value="2" onclick="Check('posta','doprava')">Postal packet</option>        
        <option value="3" onclick="Check('TopTrans','doprava')">Top Trans </option>
      
        <input type="text" name="doprava" id="doprava" value =""  style="visibility:hidden;"/><br/>
      </select><br />

  
    <input type="checkbox" name="ujednani" checked="checked"/> &nbsp;I accept insertion of this order 
    into the ordering catalogue.<br />
    <input type="submit" name="send" class="butt" value="ORDER / BUY" /></p>
       <div style="visibility:hidden;">
       <?php
        $cid = $_SESSION['Cart'];
        $N = sizeof($cid);
        for($i=1;  $i < sizeof($cid);  $i++)
        {
          echo "<input type=\"checkbox\" id=\"c$i\" name=\"ujednani\" value=\"1\" checked=\"checked\"/> $cid[$i]";
          // onclick=\"Check('c$i')\"
          echo "<BR>";
        }
        //echo "<script>alert($i);</script>";
      ?>  
      </div>
        
  </form>
</div>
</body>

</html>