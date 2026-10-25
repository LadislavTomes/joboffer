<?php 
session_start(); 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">

<head>
  <meta name="keywords" content="Ilona Kubíčková,Kubíčková,ilona,kubickova,obrazy,malirka,malířka,paintings,paint,olej,plátno,canvas,příroda,květiny,kytky,portrét,malování,prodej obrazů,surealismus,modernismus" />
  <meta name="robots" content="ALL, FOLLOW" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">

<title>Ilona - obrazy </title>
<style>
body {SCROLLBAR-FACE-COLOR: #FFFFFF; SCROLLBAR-HIGHLIGHT-COLOR: #E1E1E1; SCROLLBAR-SHADOW-COLOR: #FFFFFF; SCROLLBAR-3DLIGHT-COLOR: #FFFFFF; SCROLLBAR-ARROW-COLOR: #E1E1E1; SCROLLBAR-TRACK-COLOR: #FFFFFF; FONT-FAMILY: Arial, Verdana; SCROLLBAR-DARKSHADOW-COLOR: #E1E1E1 }
  </style>
<title>Ilona Kubickova - kontakt</title>

<?php 

if (!empty($_REQUEST['new_cart'])) {
  //echo "<SCRIPT>alert(\"new_cart\");</SCRIPT>";
  //$cid = trim($_REQUEST['cart']);
  $cid = $_SESSION['Cart'];
  //print_r($cid);
  $cart = "";
  $N = sizeof($cid);
  for($i=1;  $i < $N;  $i++)
  { $cart .= "$i" . ".)" . $cid[$i];
  }   
  //echo "<SCRIPT>alert(\"order $cart\");</SCRIPT>";  
}

if (!empty($_REQUEST['order'])) {
  // $cena=trim($_POST['order']);
  //$_SESSION
  //header("Location: objednavka.php"); //?page=home
  //$cart=trim($_POST['cart']);           //$cart="cart";
  //echo "<SCRIPT> alert(\"order\");</SCRIPT>";
  
  $kos = trim($_REQUEST['kos']);
  //if($kos)
    $cart=trim($_REQUEST['cart']);
  //else
  //  $cart=trim($_POST['cart']);
    
  //echo "<SCRIPT>alert(\"order $cart $kos\");</SCRIPT>";
  
  //$cid=preg_split('/\)+/', $cart, -1, PREG_SPLIT_DELIM_CAPTURE);

  $cid=preg_split('/\d+\.\)/', $cart, -1, PREG_SPLIT_DELIM_CAPTURE);
  
  //print_r ($cid);
  //exit;   
  $_SESSION['Cart']=$cid;
  session_write_close();         // Writes the session data and closes before redirect
  //header("Location: objednavka.php");
    
  if($kos)
  { echo "<SCRIPT>window.location.href=\"kos.php\";</SCRIPT>";
  } else {
    echo "<SCRIPT>window.location.href=\"objednavka.php\";</SCRIPT>";
  }
  exit;
}
session_write_close();
//_NET_LOC.
ini_set (
"include_path", (
"../../PEAR/" .
PATH_SEPARATOR .
ini_get ("include_path")
)
);
require_once 'Auth.php';
$auth_ = false;
$logged = addslashes($_GET['logged']); 
if($logged == 1) //if($logged == 1)
{ 
  $auth = new Auth("File", ".htpasswd", "login_function");
  $auth->start();

  if ($auth->getAuth()) $auth_ =true;
}
if(!$auth_)
{ 
?>
<script language="javascript" type="text/javascript" src="res/highslide.js"></script>
<script type="text/javascript" src="res/easing_equations.js"></script>
<script type="text/javascript">

	// remove the registerOverlay call to disable the controlbar
	hs.registerOverlay(
    	{
    		thumbnailId: null,
    		overlayId: 'controlbar',
    		position: 'top right',
    		hideOnMouseOut: true,
        useOnHtml: true
		}
	);
	
    // set options selected in the Boxer Highslide JS tab	
    hs.graphicsDir = 'res/graphics/';
    hs.outlineType = 'rounded-white';
    hs.showCredits = false;
    hs.dimmingDuration = 200;
    hs.fadeInOut = true;
    hs.fullExpandPosition = 'bottom right';
    
    hs.blockRightClick = true;
    hs.numberOfImagesToPreload = "5";
    
    hs.dimmingOpacity = "0.76"
    
        
            hs.easing = "easeOutBack";
            hs.easingClose = "easeInBack";
            
            hs.expandDuration = 250;
            hs.restoreDuration = 250;
            
        
  
    // translate text from the Boxer Translate tab
    hs.restoreTitle = "Click to close image, click and drag to move. Use arrow keys for next and previous.";
    hs.loadingText = "Loading...";
    hs.fullExpandTitle = "Expand to actual size";
    hs.focusTitle = "Click to bring to front";
    hs.loadingTitle = "Click to cancel";
    hs.align = 'center';
    hs.moveText = "";
    hs.closeText = "";
    hs.resizeTitle = "Resize";

</script>

<?php
}
?>

<style type="text/css">
.highslide {
	cursor: url(res/graphics/zoomin.cur), pointer;
    outline: none;
}
.highslide img {
	border: 2px solid #999999;
}
.highslide:hover img {
	border: 2px solid #ffffff;
}
.highslide-overlay {
	display: none;
}
.highslide-image {
    border: solid #ffffff;
}

.highslide-caption {
    display: none;
    color: #000000;
    border: 0px solid #ffffff;
    border-top: none;
    font-family: Verdana, Helvetica;
    font-size: 10pt;
    padding: 5px;
    background-color: #ffffff;
}

.highslide-caption a {color: #2E8B57;}

.highslide-loading, a.highslide-loading:link {
   display: block;
   color: #ffffff;
   background-color: #000000;
   font-size: 9pt;
   font-weight: bold;
   text-transform: uppercase;
   text-decoration: none;
   border-top: 1px solid #ffffff;
   border-bottom: 1px solid #ffffff;
   padding-left: 22px;
   background-image: url('res/graphics/loader.gif');
   background-repeat: no-repeat;
   background-position: 3px 1px; padding-right:3px; padding-top:3px; padding-bottom:3px
}

a.highslide-credits, a.highslide-credits i {
    padding: 2px;
    color: silver;
    text-decoration: none;
	font-size: 10px;
}
a.highslide-credits:hover,
a.highslide-credits:hover i {
    color: white;
    background-color: gray;
}

.highslide-move {
    cursor: move;
}

/* Controlbar */
.controlbar {	
	background: url('res/graphics/controlbar4.gif');
	width: 40px;  /*80px;*/
	height: 34px
}
.controlbar a {	
	display: block;
	float: left;
	/*margin: 0px 0 0 4px;*/	
	height: 27px;
}
.controlbar a:hover {
	background-image: url('res/graphics/controlbar4-hover.gif');
}
.controlbar .next {
	width: 40px;
	background-position: -40px 0;  /*-80px 0;*/
}
/*
.controlbar .close {
	width: 36px;
	background-position: -40px 0;
}*/

.highslide-dimming {
background: #000000;
position: absolute;
visibility: hidden;
} 


.highslide-active-anchor img {
    visibility: hidden
}
.highslide-html {
    background-color: white;
}
.highslide-html-blur {
}
.highslide-html-content {
	position: absolute;
    display: none;
}

/* Necessary for functionality */
.highslide-display-block {
    display: block;
}
.highslide-display-none {
    display: none;
}
</style>

<style type="text/css">
        /* 
           LS = Levy sloupec
           PS = Pravy sloupec
           SS = Stredni sloupec
        */
        body {
          min-width: 730pt;      /* 2x LS width + PS width + 2x SS padding */
           /* max-width: 990pt;  */
        }
        #telo {
          padding-left: 180pt;   /* LS width + LS padding */
          padding-right: 10pt;  /* PS width + PS padding + SS padding */
          min-height: 500pt;
          
        }
        
        #levy {
         position:absolute; top:70; left:0; float: none;
          height: 465pt;         /* MIN >= 480pt465pt528pt;  style="margin: 0pt 30pt"*/
          width: 180pt;          /* 180 LS puvodni width - LS padding */
          padding: 10pt;

        }
        
        #stred {
          width: 100%;          /* 90% height: 465pt; */
          padding: 0pt 20pt;
        }
        #pravy {
         height: 465pt;
          width: 130pt;          /* PS puvodni width - PS padding */
          padding: 100pt;
          margin-right: -190pt;  /* -PS width - PS padding - SS padding */
        }

        /* Kvuli chybe IE6 */
        * html #levy {
          /*left: -200pt;*/           /* left: 150pt;  PS width + PS padding */
          /*top: -500pt;*/
        }          
        
  <!--link rel="stylesheet" type="text/css" href="style_tree.css" /-->
  <!--link rel="stylesheet" type="text/css" href="style_tab.css" /-->
  <!--link rel="stylesheet" type="text/css" href="styles.css" /-->
div#pravy {
	color: #339900;
	font-size: 12pt;
	font-family: Verdana, Tahoma;
	/*font-weight: bold;*/
	text-decoration: none;
}

body { margin: 1em;} /*body {background: #EED; margin: 1em;}*/
div#footer {clear: both; padding-top: 3em; position:realtive; 
  position:absolute; top:500pt; left:20; float: none; font: 85% Verdana, sans-serif;}
div.pic {position:realtive; float: left; height: 200pt; width: 180pt;
  padding: 0 10pt; margin: 3pt 0pt;}
div.pic img.pic {position:realtive; border: 0pt solid;border-color: #444 #AAA #AAA #444; }
div.ls img.pic {position:realtive; height: 96pt; width: 100pt; margin: 32pt 0 0;}
div.pt img.pic {position:realtive; height: 128pt; width: 96pt; margin: 0 16pt;}
div.pic ul {position:realtive; margin: 0.25em 0 0; padding: 0;
  font: small Arial, Verdana, sans-serif;}
li {position:realtive; display: block; text-align: center;}
li.title {font-weight: bold; display: block; list-style: none; text-align: left;
  color: #096a39;	font-family: Arial; font-size:10pt;}
div.pic li.catno {position:realtive; text-align: right; list-style: none; text-align: left;
  margin: 0 50% 0 0; padding: 0 0.5em 0 0; color: #096a39;	font-family: Arial; font-size:10pt;}
div.pic li.price {position:realtive; text-align: left; list-style: none; font-style: italic;
  margin: -2.4em 0 0 50%; padding: 0 0 0 0.5em; color: #096a39;	font-family: Arial; font-size:10pt;
  border-left: 1pt solid;}
  
  
 /* div.ls {border: 3pt solid blue;}*/
li.catno li.price li.title {display: none;}  
  
img.cart { position:realtive; cursor :pointer; border: 0pt solid; width:15pt; height:15pt; margin: 1pt 1pt;  padding: 0;}

  /*border: 3pt solid;  margin: 3 3;  padding: 3;*/
img.tn { position:realtive; cursor :pointer;  /* height: 80pt; width: 80pt;
   border: 0pt solid;  margin: 0 0;  padding: 0;*/}

.style5{float:left; font-size:10pt;	color: #096a39;	font-family: Arial;}
/* .style5{float:left; 	color: #339900;	font-size: 16pt; font-family: Verdana, Tahoma;}
<font face="Tahoma" color="#096a39" size="2">
<a style="text-decoration: none;" href="obchod.php">Galerie</a>
</font>
*/
  
.butt { /*width:160pt; height:30pt;*/ border:10; font-family: Arial; color: #096a39; font-size: 10pt; }

body {SCROLLBAR-FACE-COLOR: #FFFFFF; SCROLLBAR-HIGHLIGHT-COLOR: #E1E1E1; SCROLLBAR-SHADOW-COLOR: #FFFFFF; SCROLLBAR-3DLIGHT-COLOR: #FFFFFF; SCROLLBAR-ARROW-COLOR: #E1E1E1; SCROLLBAR-TRACK-COLOR: #FFFFFF; FONT-FAMILY: Arial, Verdana; SCROLLBAR-DARKSHADOW-COLOR: #E1E1E1 }

#container {
overflow:auto;  /* cater to the older browsers */
overflow: -moz-scrollbars-horizontal; /* for FF */
overflow-x:scroll; /* scroll horizontal */
overflow-y:hidden; /* Hide vertical*/
}

</style>

  <SCRIPT>
function OpenTable(TableN)
{
  window.location.href=TableN; 
}
var Celkem = 0;
var iN = 0;
var Cart; // = new Array();   //var Cart = "";  
function Counter(Price, title, cesta, technika, size)
{ Celkem += Price; 
  iN++;  
  Counters(iN, Celkem, "foo"); 
  //Cart += "&title=" + cesta, technika, size, Price;
  //Cart[iN] = "&title=" + cesta, technika, size, Price;
  //Cart = "\r\n\t "+iN+".)\r\n\t " +title+"\r\n\t " +cesta+"\r\n\t " +technika+"\r\n\t " +size+"\r\n\t " +Price;
  Cart = " "+iN+".) " +title+" " +cesta+" " +technika+" " +size+" " +Price;
  var idcart= document.getElementById("cart"); //$cart="cart";
  idcart.value += Cart; 
}
function Objednavka()
{ //Cart = "?iN=" +iN +Cart +"&Celkem=" +Celkem;
  //window.location.href="objednavka.php" +Cart;
  /*
  session_start();
  $_SESSION['Cart']="123456";
  session_write_close();         // Writes the session data and closes before redirect
  header("Location: objednavka.php");
  */
  Cart = document.getElementById("cart").value;
  //alert(Cart);
  OpenTable("ENobchod.php?order=1&kos=1&cart=" +Cart);
  return;
  /*
  <?php
     echo "";
  
  ?>*/
}
function Counters(iN_, Celkem_, DIV)  //(Price, DIV)
{// document.getElementById("cart").value  = "iN";
  //var idcart= document.getElementById("cart"); //$cart="cart";
  //idcart.value = iN; 

  Celkem = Celkem_; 
  iN = iN_;  

  if(iN==0) 
  document.getElementById(DIV).innerHTML="Ve Vašem košíku je nyní "
  + iN + " položek <BR>";
  else if(iN==1)
  document.getElementById(DIV).innerHTML="Ve Vašem košíku je nyní "
  + iN + " položka <BR>V ceně " + Celkem + " Kč";
  else if(iN<5)
  document.getElementById(DIV).innerHTML="Ve Vašem košíku jsou nyní "
  + iN + " položky <BR>V celkové ceně " + Celkem + " Kč";  
  else
  document.getElementById(DIV).innerHTML="Ve Vašem košíku je nyní "
  + iN + " položek <BR>O celkové ceně " + Celkem + " Kč";  
  //GetCo(DIV);
}
var IDs = new Array();
var IIs = new Array();
var IDAs = new Array();
var IDDs = new Array();
var IDHs = new Array();
function SetCo(image)
{ //alert (image);  // image FND in DB
  //alert (document.getElementById("img1").height); //style.position.left
  //alert (document.getElementById("img1").width); //style.position.left 
  //document.getElementById("img1").style.top = 120; //html img position
  //alert (document.getElementById("img1").style.top = 90);
  //window.size  div stred.size / N ?
  // NO !!! JS G:/C/wbs/JS grag drop
   
  //array IDs[i] = id;  // 0_1   +  <- ; ->    1_0
  //alert ("id=" + IDs[image]);
  //alert ("id=" + IDs[0]);
  document.getElementById('change0').value = image;
  Odkud = image;
  
  //document.getElementById(IDs[image]).style.margin="3pt";
  var imgD = document.getElementById(IDs[image]);
  imgD.height=imgD.height-4;
  imgD.width==imgD.width-4;
  imgD.style.border="2pt solid red";  
  //document.getElementById(IDs[image]).style.padding="3";
  //margin: 3 3;  padding: 3;";
} 
function GetCo(image)
{ //alert (image);  // image FND in DB
  document.getElementById('change1').value = image; 
  //OnMove document.getElementById('change0').style.border="3pt solid red"; 
  //document.getElementById('foot').style.color="margin: 3pt";
  //document.getElementById('change0').style.border="0pt white";
  //document.getElementById('change1').style.border="3pt solid red";
  //OnMove document.getElementById('change0').style.border="3pt solid red";
} 
var Mode = 0;
var anima = true;			// toggles resizing animations 
var change = 0;  //Odkud  SetCo change0
var Odkud  = "";
function Detail(image) //Detail('http://AtNet.sk/wwwnew/images/galerie/slides/DUDY1.jpg') // cesta
{  //(Mode == 0)
   if(Mode <= 1) {     
       //alert("Nyní jste v editačním módu \n kliknutím na některý obrázek z galerie spustíte editaci! \n Pro signalizaci jsem orámoval logo.");
       //OpenTable('form.php');
       document.getElementById("cesta").value=image;
       //newWindowObj = window.open('form.html', "Detail");
       //newWindowObj = window.open('pform.php?cesta=' + image, "Detail_Form");
       OpenTable('pform.php?cesta=' + image, "Detail_Form");
       //newWindowObj.document.forms[0].elements["cesta"].value=image+";"; 
  } else if(Mode == 2) {    
     if(change == 0)
     { if(image=="Term.jpg")
       { alert("Term je vždy poslední !");
         return; 
       }
       change =1;
       SetCo(image);     
     } else if(change == 1) {
       change = 0;
       GetCo(image);

       OpenTable( 'ENobchod.php?logged=1&change0=' + Odkud + '&change1=' + image);
       //document.navigation.back();
     }  else {Mode = 0;}
  }  else {Mode = 0;}
}
function Editace(mo)
{ if(mo == 3) 
  { Vzkazy(0); 
  }
  Mode    =  mo;         // font-weight: bolder;
  //alert(mo);
  if(Mode == 0) {
    document.getElementById('foot').style.border="0pt white";

    if(IDHs.length > 0) {
     for(i=0; i<IDAs.length; i++)
     { //var divD = IDAs[i];
       var divD = document.getElementById(IDAs[i]);       
       //alert(IDHs[i]);
       divD.href = IDHs[i];
       divD.rel  = "lightbox";
     } //window.location.reload();
    } else {//alert('IDHs.0');
    }
    //alert("Nyní jste v běžném prohížecím módu pro editaci (později zde bude autorizace) ! \n Kliknutím na některý obrázek z galerie spustíte detail!.");
  } else if(Mode == 1) {
    document.getElementById('foot').style.border="3pt solid red";
    //document.getElementById('foot').style.color="margin: 3pt";
    //alert("Nyní jste v editačním módu \n kliknutím na některý obrázek z galerie spustíte editaci! \n Pro signalizaci jsem orámoval logo.");
  } else if(Mode == 2) {   
    document.getElementById('foot').style.border="3pt solid blue";
    //document.getElementById('foot').style.color="margin: 0pt";    
    //alert("Nyní jste v pozičním módu \n obrázek můžete přesunout : \n Po kliknutí pro výběr odkud, klikěte kam ho nově umístit! \n Signalizace zvolené pozice je orámovaním.");
  } else {Mode = 0;}
  
  if(mo > 0)
  {  //alert(IDAs.length);
     anima = false;
     var i=0;	   
     for(i=0; i<IDAs.length; i++)
     { //var divD = IDAs[i];
       var divA = document.getElementById(IDAs[i]);       
       //alert(divD.href);
       IDHs[i]   = divA.href;
       divA.href = "";
       divA.rel  = "";
       divA.removeAttribute("href");
       divA.removeAttribute("rel");
     }     
     if(mo == 2)  
     { //var divD = document.getElementById(IDDs[IDAs.length-1]);
       //divD.style.visibility="visible";
     }
  } else { anima = true; 
    // var divD = document.getElementById(IDDs[IDAs.length-1]);
    // divD.style.visibility="hidden";  
  }
}
function Vzkazy(n)
{
  window.location.href="vzkazy.php";
}
function OnLoad()
{ //alert("RE");
  Editace(0);
    //var se = document.getElementById('sel[0]');
  //var se = document.getElementById('sele');
  //se.selected = true;
}

  </SCRIPT>
  							<!--LightBox-->
			<script type="text/javascript" src="prototype.js"></script>
			<script type="text/javascript" src="scriptaculous.js"></script><script type="text/javascript" src="effects.js"></script>
			<script type="text/javascript" src="lightbox.js"></script>
			<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen">

</head>

<body OnLoad="OnLoad();"> 

<div id="container">

  <div id="levy" class="levy_css">

    <p style="margin: 0pt 30pt"><a title="Back" href="../../ENindex.html">
    <img border="0" id="foot" src="images/../foot.jpg" width="139" height="52"></a></p>
    
    <p style="margin: 0pt 30pt">&nbsp;</p>
    
    <p style="margin: 0pt 30pt">&nbsp;</p>
    
<BR></BR><BR></BR>
<div style="margin: 0pt 30pt">
<div id="foo" class="style5">
</div> <p style="margin: 0pt 30pt">&nbsp;</p>
<!--obchod.php?order='1' <form name="forder" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">-->
<!--onclick="Objednavka();"  Ve Vašem košíku je zatím 0 položek.
style="visibility:hidden;"  -->
<!--form name="forder" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
   <input type="submit" class="butt" name="order" style ="border:1pt solid rgb(196,32,20);" value="Koupit vybrané zboží" />  
   <input type="text" name="cart" id="cart" style="visibility:hidden;" value=""/> 
</form--> 
<!--^_POS_v_cart_-->
<?php

if (!empty($_REQUEST['new_cart']))  // $ord  (isset($_SESSION['Cart']))
{ echo "<script>document.getElementById(\"cart\").value=\"$cart\";</script>";
  //print_r($cid);  
  $Celkem=0;  $N=sizeof($cid);
  for($i=1;  $i<$N;  $i++) {
   //echo "<BR> $i <BR> ";
    //$Celkem += $cid[$i]['price'];
    $Price=preg_split('/ /', $cid[$i], -1, PREG_SPLIT_DELIM_CAPTURE);
    //print_r($Price);
    //echo $cid[$i];
    //echo "<BR>";
    
    if(is_numeric(trim($Price[sizeof($Price)-1])))
    {  $Price = $Price[sizeof($Price)-1];
      // echo "<BR>";echo "<BR> is 1<BR> "; 
    } else if(is_numeric(trim($Price[sizeof($Price)-2])))
    {  $Price = $Price[sizeof($Price)-2];
     // echo "<BR>";echo "<BR>is 2<BR> ";
    } else { 
     $Price = trim($Price[sizeof($Price)-2]);
     if(is_numeric($Price))
     {echo "<BR>";echo "<BR>is Err .$Price.<BR> ";
     }      
     echo "<script>alert('Err $i');</script>";
     echo "<script>\"OpenTable('ENobchod.php');\"</script>";
     exit;
    }  
    //else exit;   
    //echo "<BR>";echo "<BR> $i"; 
    //echo($Price);
    //echo "<BR>";echo "<BR>"; 
    $Celkem += $Price; //$ord[$i]['price'];      
  }  
  //echo($N);
  echo "<script>Counters( $N-1, $Celkem, \"foo\")</script>";
} else {
  //echo "<script>alert(\" 0 \")</script>";
  //echo "<script>Counters( 0, 0, \"foo\")</script>";
}  
?>  


<!--p><BR></BR><BR></BR>&nbsp;</p-->
<!--p style="margin: 0pt 30pt">&nbsp;</p   border:1pt solid rgb(196,32,20);-->

<!--a href="" class="style5"  style="text-decoration:none;" OnClick="Objednavka();"-->
 <DIV class="style5"  style="text-decoration:none;" OnClick="OpenTable('ENobchod.php');"> 
  <span style="text-align:bottom; cursor :pointer;">E-shop &nbsp;&nbsp;&nbsp; </span>
  <span ><img class="cart"  src="Cart.jpg"></img></span> 
</DIV> 
<!--/a--> 
<BR></BR>
  <p style="margin: 0pt 30pt">&nbsp;</p>
<a href="../../vzkazy.php" style="text-decoration:none;" class="style5" >Send a message </a>  


<?php
if ($auth_) 
{  //echo "<script>alert('$username')</script>";OpenTable('pform.php?cesta=' + image, "Detail_Form");
   //<a href="prihlaseni.php?logout='1'" style="text-decoration:none;" class="style5" >Odhlášení</a></p>
?>
    <BR></BR>
   <a href="prihlaseni.php?logout='1'" style="text-decoration:none;" class="style5" >Odhlášení</a>
   <p style="margin: 0pt 30pt">&nbsp;</p>
   <div id="rol" class="style5" >Výběr módu    
   <select id="sel" onchange="Editace(value)">
   <option value=1 onselect="Editace(1);"> Editace   (vlastnosti) </option> 
   <option value=2 onselect="Editace(2);"> Pozicování (uspořádání) </option> 
   </select> 
   </div>
   
<?php
}else{
?>
 <BR></BR>
 <!--p style="margin: 0pt 30pt">&nbsp;</p-->
<!--a href="prihlaseni.php" style="text-decoration:none;" class="style5" >Přihlášení:</a-->   
<BR></BR><BR></BR>
<?php 
  //"prihlaseni.php" "obchod.php?logged=1" echo "<script>window.location.href=\"obchod.php?logged=1\";</script>";
}
?>
  </div>
 </div>
<div id="telo"> 

  <div id="stred" class="stred_css" style="float: left;">

<?php
     require "../../db_loc.php";     // pripojime se k databazi db_loc.php
     
$path_slides = "./slides/"; //"/../css_treeclass/slides/"; "/wwwnew/images/galerie/slides/";
$path_thumbs = "./thumbs/"; //"/../css_treeclass/tn/"; "/wwwnew/images/galerie/thumbs/";
$thumbs = "./thumbs/"; //"../../../css_treeclass/tn/"; // $thumbs = "./thumbs/"; 
//chmod($thumbs, 0777);         
if(!file_exists($path_thumbs."Term.jpg"))
{if(file_exists("Term.jpg"))
 { 
   $fo = fopen("Term.jpg", "rb") or die ('The file Term.jpg must exist!');
   $s  = fread($fo, filesize("Term.jpg"));
   //$sz = filesize("Term.jpg");
   //echo "<SCRIPT>alert(\"$sz\");</SCRIPT>";
   fclose($fo);
   
   $fn = fopen($path_thumbs."Term.jpg", "wb");
   fwrite($fn, $s);
   fclose($fn);
   /*
  if(!copy("Term.jpg", $path_thumbs))   // read-only !!!
  { if(!copy("../Term.jpg", $path_thumbs))
    {    
      echo "<SCRIPT>alert(\"The file Term.jpg must exist!\")</SCRIPT>";
    }
  }*/
 } else {
   echo "<SCRIPT>alert(\"./Term.jpg\")</SCRIPT>";
 }
}
         
function directoryToArray($directory, $recursive) {
	$array_items = array();
	if ($handle = opendir($directory)) {
		while (false !== ($file = readdir($handle))) {
			if ($file != "." && $file != "..") {
				if (is_dir($directory. "/" . $file)) {
					if($recursive) {
						$array_items = array_merge($array_items, directoryToArray($directory. "/" . $file, $recursive));
					}
					//$file = $directory . "/" . $file;
					//$array_items[] = preg_replace("/\/\//si", "/", $file);
				} else if(eregi('.+jpg', $file)) {				  
					//$file = $directory . "/" . $file;
					$array_items[] = preg_replace("/\/\//si", "/", $file);
				}
			}
		}
		closedir($handle);
	}
	return $array_items;
}
     
if($auth_) // $auth_ // true
{     
//get values if input fields<br />
$change0 = addslashes($_GET['change0']); //Name<br />
$change1 = addslashes($_GET['change1']); //Email<br />
//$change0 = "DUDY1.JPG"; $change1 = "lodka.jpg"; //$id0 = 9; $id1 = 5;
//$change0 = "lodka.jpg"; $change1 = "DUDY1.jpg"; //$id0 = 5; $id9 = 9;
if(($change0!='')&&($change1!='')&&($change0!=$change1))
{
   //echo "<script>alert(\"Náhled nového uspořádání ikon!\")</script>";
   //echo "<script>alert('$change0')</script>";
   //echo "<script>alert('$change1')</script>";
   $sq= "SELECT `id` FROM `images` WHERE `cesta` = '$change0'";
   $vyslede = mysql_query("$sq");    $i = 0;
   while($rade = mysql_fetch_array($vyslede))
   {  $id0 = $rade["id"];      $i++;    
   }  if(($i > 1)||($id0<=0)) { echo "<script>alert('DB Error - More same titles, cesta !!!')</script>"; return;}
   //echo "<script>alert('$id0')</script>";
   
   $sq= "SELECT `id` FROM `images` WHERE `cesta` = '$change1'";
   $vyslede = mysql_query("$sq");    $i = 0;
   while($rade = mysql_fetch_array($vyslede))
   {  $id1 = $rade["id"];      $i++;    
   }  if(($i > 1)||($id1<=0)) { echo "<script>alert('DB Error - More same titles, cesta !!!')</script>"; return;}
   //echo "<script>alert('$id1')</script>";
     
   if ($id0 > $id1)  // 5 <- 9  // for UniqueID isn't r_UPDATE images SET `id`=(id+1)
   { $VlozData=mysql_query(" UPDATE images SET `id`='0' WHERE `id`='$id0' ") or die (mysql_error());        
     if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; }   
     $VlozData=mysql_query(" UPDATE images SET `id`=(id+1) WHERE `id`>='$id1' AND `id`<'$id0' ORDER BY `id` DESC") or die (mysql_error());        
     if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; } 
     $VlozData=mysql_query(" UPDATE images SET `id`='$id1' WHERE `id`=0 ") or die (mysql_error());        
     if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; }         
   } else {        //  5 -> 9
     $VlozData=mysql_query(" UPDATE images SET `id`='0' WHERE `id`='$id0' ") or die (mysql_error());        
     if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; }      
     $VlozData=mysql_query(" UPDATE images SET `id`=(id-1) WHERE `id`>'$id0' AND `id`<'$id1' ") or die (mysql_error());        
     if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; }    
     $VlozData=mysql_query(" UPDATE images SET `id`=('$id1'-1) WHERE `id`=0 ") or die (mysql_error());        
     if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; }      
   }   
} else {
   //$IDs = array();
   //$disc = new array();

   $disc = directoryToArray($thumbs, false); //$disc = directoryToArray("./thumbs/", false);   
   //print_r ($disc);  echo "<BR></BR><BR></BR>";   
   $N = 0; 
   $sq= "SELECT `cesta` FROM `images`";
   $vyslede = mysql_query("$sq");    $i = 0;
   while($rade = mysql_fetch_array($vyslede))
   { $cesta    = $rade["cesta"]; // image ]
     //foreach ($disc as $key => $djpg)  )
     //echo $cesta."<BR></BR>";
     { if(!(in_array($cesta, $disc)))
       { 
         echo "<script>alert(\" cesta = $cesta not in_array disc & will be deletet in DB\")</script>";
         $sq="DELETE FROM `images` WHERE `cesta` = '$cesta'";
         $Delete=mysql_query("$sq") or die (mysql_error());        
           if(!$Delete){ echo "<script>alert('DB Error - DELETE Error !!!')</script>"; return;}
         $N--;   
       } else {
         // delete from array $disc; 
         $key=array_search($cesta, $disc);
         unset($disc[$key]); //array_delete
         //print_r ($disc);   echo "<BR></BR><BR></BR>";
       }       
     }     
     $i++;
   }  if($i <= 0) { echo "<script>alert('DB Error - DB is empty !!!')</script>";}
   //echo "<script>alert('$id0')</script>";
   $N += $i; 
   $i = 0; 

   $sq= "UPDATE `images` SET `id`='0' WHERE `cesta` = 'Term.jpg'";
   $vyslede = mysql_query("$sq");
   if(!$vyslede){ echo "<script>alert('DB Error - UPDATE Term.jpg !!!')</script>"; return;}

   foreach($disc as $key => $djpg)  
   { 
     $jpg  = str_replace($thumbs, "", $djpg);
     $title= str_replace(".jpg", "", $jpg);
     //INSERT INTO `galerie`.`images` (`technika`, `size`, `title`, `cena`, `cesta`, `id`) VALUES (NULL, ' cm', NULL, NULL, 'c', '0');
     $VlozData=mysql_query("INSERT INTO `images` (`technika`, `size`, `title`, `cena`, `cesta`) VALUES (NULL, ' cm', '$title', NULL, '$jpg') ") 
       or die (mysql_error());   	
     if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; return;}
   }   

   $sq= "SELECT MAX( `id` ) FROM `images`"; //"SELECT MAX( `id` ) FROM `images`";SELECT `id` FROM `images` WHERE `id` =MAX(`id`)
   $vyslede = mysql_query("$sq");
   if(!$vyslede){ echo "<script>alert('DB Error - SELECT Term.jpg !!!')</script>"; return;}
   if($rade = mysql_fetch_array($vyslede))
   {  $N= $rade[0]; //"MAX(`id`)"
      //print_r($rade);
   } else { echo "<script>alert('DB Error - SELECT Term.jpg !!!')</script>"; return;}  
        
   //echo "<SCRIPT>alert(\"$N\");</SCRIPT>"; 
   $N++;
   $VlozData=mysql_query("UPDATE `images` SET `id`='$N' WHERE `cesta`='Term.jpg' ") 
     or die (mysql_error());   	
   if(!$VlozData){ echo "<script>alert('DB Error - Chng 0 !!!')</script>"; return;}
   //exit;
}
}

 echo "<BR><BR>"; 
  $sq= "SELECT * FROM `images` ORDER BY `id`"; // WHERE cesta = $Id";
   $vyslede = mysql_query("$sq");
   $i = 0;
   //$IDs = array();
   $N = 0;   
   while($rade = mysql_fetch_array($vyslede))// while($rade = mysql_fetch_row($vyslede))
   { $N++;
   } // Reset Our Pointer.
   mysql_data_seek( $vyslede, 0);
   //$N = mysql_num_fields($vyslede); //$numfields
   //echo "<SCRIPT> alert('$N'); </SCRIPT>";
   
   while($rade = mysql_fetch_array($vyslede))
   {      if($i < ($N-0)) 
   { 
  //return; }        

$cesta    = $rade["cesta"]; // image
$title    = utf8_decode($rade['title']);
$cena     = $rade['cena'];
$technika = utf8_decode($rade['technika']);
$size    = $rade['size'];
$id       = $rade['id'];
//$IDs[$i] = $id;

echo "<SCRIPT> IDs['$cesta'] = 'img$id'; </SCRIPT>";
echo "<SCRIPT> IDAs[$i]    = 'a$id'; </SCRIPT>";
echo "<SCRIPT> IDDs[$i]    = 'div$id'; </SCRIPT>";

if((($i < ($N-1))&&(!$auth_)) || ($auth_))
{ 
if(!$auth_)						
{ echo "<div class=\"pic ls\" id=\"div$id\"> <a id=\"a$id\" href=\"$path_slides$cesta\" class=\"highslide\" onclick=\"return hs.expand(this, { captionId: 'Image$id' } )\" ><img id=\"img$id\" class=\"tn\" src=\"$path_thumbs$cesta\"></img></a><ul>";  
  echo   "<div class=\"highslide-caption\" id=\"Image$id\">$title</div>"; 
} else {
  echo "<div class=\"pic ls\" id=\"div$id\"><a id=\"a$id\" rel=\"lightbox\" class=\"highslide\"><img id=\"img$id\" class=\"tn\" onclick=\"Detail('$cesta')\" src=\"$path_thumbs$cesta\"></img></a><ul>";
}
//echo "<div class=\"pic ls highslide-caption\" id=\"Image1\"><a id=\"div$id\" href=\"/wwwnew/images/galerie/slides/$cesta\" class=\"highslide\" onclick=\"return hs.expand(this, { captionId: 'Image1' } )\" ><img id=\"img$id\" class=\"tn image\" onclick=\"Detail('$cesta')\" src=\"/thumbs/$cesta\"></img></a><ul>";
//echo "<div class=\"pic ls\"><a id=\"div$id\" href=\"/wwwnew/images/galerie/slides/$cesta\" rel=\"lightbox\"><img id=\"img$id\" class=\"tn\" onclick=\"Detail('$cesta')\" src=\"/thumbs/$cesta\"></img></a><ul>";
echo "<li class=\"title\">$title</li>";
echo "<li class=\"title\">&nbsp;</li>";
echo "<li class=\"catno\">$technika<BR></li>";
echo "<li class=\"catno\">$size</li>";
//echo "<li class=\"catno\">Počítačová grafika<BR>68 x 59 cm</li>";
//echo "<li class=\"price\">$cena Kč<BR><span class=\"cart\" onclick=\"Counter($cena, '$title', '$cesta', '$technika', '$size')\" ></span></li>";
//echo "<li></li>";
echo "</ul></div>";
}
}
    $i++;                                  
   }  
   mysql_close();

?>

</div>

</div>

<?php
if($auth_)
{       
?>
<div style="display: none;" id="overlay"></div><div style="display: none;" id="lightbox"><div style="width: 250pt; height: 250pt;" id="outerImageContainer"><div id="imageContainer"><img id="lightboxImage"><div id="hoverNav"><a href="#" id="prevLink"></a><a href="#" id="nextLink"></a></div><div id="loading"><a href="#" id="loadingLink"><img src="loading.gif"></a></div></div></div><div id="imageDataContainer"><div id="imageData"><div id="imageDetails"><span id="caption"></span><span id="numberDisplay"></span></div><div id="bottomNav"><a href="#" onclick="javascript:window.location.reload()" id="bottomNavClose"><img src="closelabel.gif"></a></div></div></div></div>
<?php
} else {        
?>						
   <div id="controlbar" class="highslide-overlay controlbar">
     <!--a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a-->
     <a href="#" class="next" onclick="return hs.next(this)" title="Next (right arrow key)"></a>
     <!--a href="#" class="highslide-move" onclick="return false" title="Click and drag to move"></a-->
     <!--a href="#" class="close" onclick="return hs.close(this)" title="Close"></a-->
   </div>
<?php
}        
?>						

<!--input type="submit" class="butt" value="Pozicování &nbsp;&nbsp; / &#10; Editace při administraci" onclick="Editace();"/></p-->
<input type="text" name="cesta" id="cesta" style="visibility:hidden;" value=""/>  
<input type="text" name="change" id="change" style="visibility:hidden;" value ="" /><br/> 
<input type="text" name="change0" id="change0" style="visibility:hidden;" value ="" /><br/>
<input type="text" name="change1" id="change1" style="visibility:hidden;" value ="" /><br/>    

    <!--div id="pravy" style="float:left;"><br />
    Nabídka zahrnuje možnost testování z našich stránek. 
    <br /><br />
    Dále možnost aktualizací přímo <br /> z Vašeho PC.    
    <br /><br />
    Všechny výhody platí minimálně po celý rok 2009.
    Konkrétně záleží na Vaší objednávce.
    <br /><br />
    Pro bližší informace nás kontaktujte e-mailem : <a class="email" href="mailto:pbucek@AtNet.sk">pbucek@AtNet.sk</a>
  </div-->

</div><!--container-->

</body>

</html>
