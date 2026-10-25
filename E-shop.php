<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">

<head>
  <meta name="keywords" content="Ilona,obrazy,malirka,malířka,paintings,paint,olej,plátno,canvas,příroda,květiny,kytky,portrét,malování,prodej obrazů,surealismus,modernismus" />
  <meta name="robots" content="ALL, FOLLOW" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">

<title>Ilona - obrazy </title>
<style>
body {SCROLLBAR-FACE-COLOR: #FFFFFF; SCROLLBAR-HIGHLIGHT-COLOR: #E1E1E1; SCROLLBAR-SHADOW-COLOR: #FFFFFF; SCROLLBAR-3DLIGHT-COLOR: #FFFFFF; SCROLLBAR-ARROW-COLOR: #E1E1E1; SCROLLBAR-TRACK-COLOR: #FFFFFF; FONT-FAMILY: Arial, Verdana; SCROLLBAR-DARKSHADOW-COLOR: #E1E1E1 }
  </style>
<title>Ilona - kontakt</title>
<style type="text/css">
        /* 
           LS = Levy sloupec
           PS = Pravy sloupec
           SS = Stredni sloupec
        */
        body {
          min-width: 630px;      /* 2x LS width + PS width + 2x SS padding */
        }
        #telo {
          padding-left: 200px;   /* LS width + LS padding */
          padding-right: 190px;  /* PS width + PS padding + SS padding */
        }
        
        #telo div {
 
        }
        #levy {
         position:absolute; top:70; left:20; float: none;
          height: 465px;         /* MIN >= 480px465px528px; */
          width: 180px;          /* LS puvodni width - LS padding */
          padding: 10px;

        }
        
        #stred {
          width: 100%;          /* height: 465px; */
          padding: 0px 20px;
          width: 100%;
        }
        #pravy {
         height: 465px;
          width: 130px;          /* PS puvodni width - PS padding */
          padding: 10px;
          margin-right: -190px;  /* -PS width - PS padding - SS padding */
        }

        /* Kvuli chybe IE6 */
        * html #levy {
          /*left: -200px;*/           /* left: 150px;  PS width + PS padding */
          /*top: -500px;*/
        }
        

             
        
  <!--link rel="stylesheet" type="text/css" href="style_tree.css" /-->
  <!--link rel="stylesheet" type="text/css" href="style_tab.css" /-->
  <!--link rel="stylesheet" type="text/css" href="styles.css" /-->


body {background: #EED; margin: 1em;}
div#footer {clear: both; padding-top: 3em;
  font: 85% Verdana, sans-serif;}
div.pic {position:realtive; float: left; height: 200px; width: 130px;
  padding: 0 15px; margin: 5px 3px;}
div.pic img.pic {position:realtive; border: 0px solid; border-color: #444 #AAA #AAA #444;}
div.ls img.pic {position:realtive; height: 96px; width: 128px; margin: 32px 0 0;}
div.pt img.pic {position:realtive; height: 128px; width: 96px; margin: 0 16px;}
div.pic ul {position:realtive; margin: 0.25em 0 0; padding: 0;
  font: small Arial, Verdana, sans-serif;}
li {position:realtive; display: block; text-align: center;}
li.title {font-weight: bold;}
div.pic li.catno {position:realtive; text-align: right;
  margin: 0 50% 0 0; padding: 0 0.5em 0 0;}
div.pic li.price {position:realtive; text-align: left; font-style: italic;
  margin: -1.2em 0 0 50%; padding: 0 0 0 0.5em;
  border-left: 1px solid;}
  
img.cart { position:realtive; cursor :pointer; border: 0px solid; width:20px; height:20px; margin: 0 0;  padding: 0;}
div#foo h2 {clear: both; padding-top: 3em;
  font: 85% Verdana, sans-serif;}
  
img.tn { position:realtive; cursor :pointer; border: 0px solid;  margin: 0 0;  padding: 0;}
div#foo h2 {clear: both; padding-top: 3em;
  font: 85% Verdana, sans-serif;}
  
.butt { width:170px; height:50px; }
  
</style>
  <SCRIPT>
var Celkem = 0;
var iN = 0;   
function Counter(Price)
{ Celkem += Price; 
  iN++;
  if(iN==1)
  document.getElementById("footer").innerHTML="<h2>In basket is now "
  + iN + " item <BR>with price " + Celkem + " Kč</h2>";
  else if(iN<5)
  document.getElementById("footer").innerHTML="<h2>In basket are now "
  + iN + " items <BR>with price " + Celkem + " Kč</h2>";  
  else
  document.getElementById("footer").innerHTML="<h2>In basket are now "
  + iN + " items <BR>with price " + Celkem + " Kč</h2>";  
  Counters(Price, "foo"); 
}
function Counters(Price, DIV)
{ if(iN==1)
  document.getElementById(DIV).innerHTML="<h2>In basket is now "
  + iN + " item <BR>with price " + Celkem + " Kč</h2>";
  else if(iN<5)
  document.getElementById(DIV).innerHTML="<h2>In basket are now "
  + iN + " items <BR>with price " + Celkem + " Kč</h2>";  
  else
  document.getElementById(DIV).innerHTML="<h2>In basket are now "
  + iN + " items <BR>with price " + Celkem + " Kč</h2>";  
}
function OpenTable(TableN)
{
  newWindowObj = window.open(TableN, "Detail"); //Err!!Internet Explorer
}
var Mode = 0;   
function Detail(image) //Detail('http://AtNet.sk/wwwnew/images/galerie/slides/DUDY1.jpg') // cesta
{ if(Mode == 0)
  { 
    var path = "http://AtNet.sk/wwwnew/images/galerie/slides/";
    //alert(path + image);
    OpenTable(path + image);  // cesta
    //window.open(path + image, "Detail");
    //alert("Nyní jste v běžném prohížecím módu pro editaci se musíte autorizovat !");
  } else{    
    //alert("Nyní jste v editačním módu \n kliknutím na některý obrázek z galerie spustíte editaci! \n Pro signalizaci jsem orámoval logo.");
    //OpenTable('form.php');
    document.getElementById("cesta").value=image;
    newWindowObj = window.open('form.html', "Detail");
    //newWindowObj.document.forms[0].elements["cesta"].value=image+";";
    
    //newWindowObj.getElementById("cesta").value=image;
    //newWindowObj.document.write(image);  // document
    //newWindowObj.document.getElementById("cesta").value=image;
    //newWindowObj.document.getElementById("cesta").innerHTML=image;
    //newWindowObj.document.getElementById("cesta").innerHTML="<input type=\"text\" name=\"cesta\" value=\"abc\"\/>";
    //newWindowObj.document.getElementById("cesta").write("<input type=\"text\" name=\"cestas\" value=\"abc\"\/>");
    //newWindowObj.document.getElementById("cesta").write("<input type=\"text\" name=\"cestas\" value=\"abc\"\/>");
    //newWindowObj.document.f.cesta.value=image;
    
    //x.html SYS velka / js / child DIV color
  }
}
function Editace()
{
  if(Mode == 0)  // font-weight: bolder;
  {
    Mode = 1;
    document.getElementById('foot').style.border="3px solid red";
    //document.getElementById('foot').style.color="margin: 3px";
    alert("Now you are in the edit mode \n by click on some picture from gallery you run editation! \n For signalisation I did bordered logo.");
  } else{
    Mode = 0;    
    document.getElementById('foot').style.border="0px white";
    //document.getElementById('foot').style.color="margin: 0px";    
    alert("Now you are in the view mode. For editation (here wil be autorization) ! \n Click on some picture from gallery you run detail!.");
    
  }
}

  </SCRIPT>
</head>

<body> 
  <div id="levy" class="levy_css">
     <p style="margin: 0px 30px">&nbsp;</p>
    
    <p style="margin: 0px 30px">&nbsp;</p>
    
    <p style="margin: 0px 30px">&nbsp;</p>
    
    <p style="margin: 0px 30px"><a title="Zpět na titul" href="index.html">
    <img border="0" id="foot" src="images/foot.jpg" width="139" height="52"></a></p>
    
    <p style="margin: 0px 30px">&nbsp;</p>
    
    <p style="margin: 0px 30px">&nbsp;</p>
    
<h2> Click on carts by selected goods ans see status of baske here down on this page.<h2>
<div id="foo">
In your boasked is now 0 items.
</div> 

<div id="butt_1">
   <input type="submit" class="butt" value="Payment &nbsp;&nbsp; / &#10; Editation (administration)" onclick="Editace();"/></p>
</div> 
  </div>

<div id="telo"> 

  <div id="stred" class="stred_css" style="float: left;">

<?php
     require "db_loc.php";     // pripojime se k databazi db_loc.php
 echo "<BR><BR>"; 
  $sq= "SELECT * FROM `images`"; // WHERE cesta = $Id";
   $vyslede = mysql_query("$sq");
   while($rade = mysql_fetch_array($vyslede))
   {              

         /*   echo "ZDgzdfgzdfzdfgzdfgzdfgdzfgzdfgzdfgzdfgzdf";
            echo "<TR>";
            echo "<TD>".$řádek["IdentificationOrder"]."</TD>";
            echo "<TD>".$řádek["IdentificationRootOrder"]."</TD>";
            echo "<TD>".$řádek["IdentificationProjectInOrder"]."</TD>";
            echo "<TD>".$řádek["Name"]."</TD>";
            echo "<TD>".$řádek["Date"]."</TD>";
            echo "</TR>"; 

echo "<div class=\"pic ls\"><img class=\"tn\" onclick=\"Detail(\''$rade["cesta"]'\')\" src=\".\/images\/galerie\/thumbs\/'$rade["cesta"]'\"><\/img><ul>
<li class="title">$rade["title"]</li>
<li class="catno">03F01</li>
<li class="price">79 Kč<BR><img class="cart" onclick="Counter($rade['cena'])" src="Cart.jpg"></img></li>
<li></li>
</ul></div>*/
$cesta = $rade["cesta"];
$title = $rade['title'];
$cena  = $rade ['cena'];
//echo " src=\"images/galerie/thumbs/$cesta\" ";
echo "<div class=\"pic ls\"><img class=\"tn\" href=\"\" onclick=\"Detail('$cesta')\" src=\"images/galerie/thumbs/$cesta\"></img><ul>";
echo "<li class=\"title\">$title</li>";
echo "<li class=\"catno\">03F01</li>";
echo "<li class=\"price\">$cena Kč<BR><img class=\"cart\" onclick=\"Counter($cena)\" src=\"Cart.jpg\"></img></li>";
echo "<li></li>";
echo "</ul></div>";

         /*
            $jmeno = $rade["IdentificationOrder"];  // NEXT $řádek NOT EX !!!!!
            if($jmeno > 1 )
              $Path  = $řádek["Name"]."\\\\".$Path;  // $Path  = $řádek["Name"]."\\".$Path;
            //else
            //  $Path  = $řádek["Name"]."\\".$Path;        
          //echo $jmeno; // $řádek["IdentificationOrder"]; NOT EX !!!!!
          //echo "<BR />";
          */    
          $i++;
          //echo $i;       
                                  
   }  
   mysql_close();
        

?>

</div>
    <div id="pravy" style="float:left;"><br />
    Nabídka zahrnuje možnost testování z našich stránek. 
    <br /><br />
    Dále možnost aktualizací přímo <br /> z Vašeho PC.    
    <br /><br />
    Všechny výhody platí minimálně po celý rok 2009.
    Konkrétně záleží na Vaší objednávce.
    <br /><br />
    Pro bližší informace nás kontaktujte e-mailem : <a class="email" href="mailto:pbucek@AtNet.sk">pbucek@AtNet.sk</a>
  </div>
<div id="footer">

<h2> Klikejte na košíky u vybraného zboží a sledujte stav košíku zde dole na stránce.<h2>
Ve Vašem košíku je zatím 0 položek.
</div>
<input type="submit" class="butt" value="Payment &nbsp;&nbsp; / &#10; Editation (administration)" onclick="Editace();"/></p>
<input type="text" name="cesta" id="cesta" style="visibility:hidden;"" value=""/>      
</body>

</html>