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
          OpenTable("ENkos.php?Objednavka="+i+checks);
        else if(NextTable == 'Obchod')
          OpenTable("ENkos.php?Obchod="+i+checks);
        
      }
      
  </SCRIPT>  
</head>

<title>Ilona Kubíčková - cart</title>
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

//print_r ($_SESSION['Cart']);

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

    if (isset($_REQUEST['Objednavka']))
    { echo "<script>OpenTable(\"ENobjednavka.php\");</script>";
      exit;
    }
    if (isset($_REQUEST['Obchod']))
    { echo "<script>OpenTable(\"ENobchod.php?new_cart=1\");</script>";
      exit;  //print_r ($_SESSION['Cart']);
    }
  }
  
?>


<p style="margin: 0px 30px">&nbsp;</p>
<div style="margin: 0px 30px;"  class="style5">If you want remove some items - you
can uncheck it in this list.
<p style="margin: 0px 30px">&nbsp;</p>
<p style="margin: 0px 30px">&nbsp;</p>
   <fieldset > <legend>Order</legend>
      <p>
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
      </p>
   </fieldset> 
<p style="margin: 0px 30px">&nbsp;</p>   
  <input type="submit" value="Remove unchecked &#10; & continue buying" onclick="Table('Obchod')" name="B1" style="font-family: Arial; color: #096A39; font-size: 10px">&nbsp;&nbsp;&nbsp;
  <input type="submit" value="BUY checked" onclick="Table('Objednavka');" name="B2" style="font-family: Arial; color: #096A39; font-size: 10px"></p>

</div>

</body>

</html>