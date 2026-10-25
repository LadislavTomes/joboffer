<?php
//_NET_LOC.
ini_set (
"include_path", (
"../../../PEAR/" .
PATH_SEPARATOR .
ini_get ("include_path")
)
);
require_once 'Auth.php';

print "<a href=\"$_SERVER[PHP_SELF]?dump=1\">Dump session</a><br>\n";

$auth = new Auth("File", ".htpasswd", "login_function");
$auth->start();
if (!$auth->getAuth()) {
     //print "<SCRIPT>alert(\"Authentication error, try again\");</SCRIPT>"; 
    exit;
}

if (!empty($_REQUEST['logout'])) {
    $auth->logout();
    //print "<h1>Logged out</h1>\n";
    //print "<a href=\"$_SERVER[PHP_SELF]\">Log in again</a>\n";
    header("Location: obchod.php"); //?page=home
    exit;
}

//print "<h1>Logged in!</h1>\n";

  session_write_close(); 

  header("Location: obchod.php?logged=1"); //?page=home

  // echo "<script>window.location.href=\"obchod.php?logged=1\";</script>";
        // print "<SCRIPT>window.location.href=\"obchod.php\"</SCRIPT>\n";
        //exit;

if (!empty($_REQUEST['dump'])) {
    print "<pre>SESSION=";
    var_dump($_SESSION);
    print "</pre>\n";
} else {
    print "<a href=\"$_SERVER[PHP_SELF]?dump=1\">Dump session</a><br>\n";
}

print "<a href=\"$_SERVER[PHP_SELF]?logout=1\">Log Out</a>\n";

// --- execution ends here ---

function login_function($username, $status, $auth_obj)
{ 
    ?>
    
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">

<title>Ilona Kubíèková - Pøihlášení</title>
<style type="text/css">

.style5{float:left; font-size:10pt;	color: #096a39;	font-family: Arial;}
/* .style5{float:left; 	color: #339900;	font-size: 16px; font-family: Verdana, Tahoma;}
<font face="Tahoma" color="#096a39" size="2">
<a style="text-decoration: none;" href="obchod.php">Galerie</a>
</font> body {background: #EED; margin: 1em;}
*/
body { margin: 1em;} 
.butt { /*width:70px; height:20px;*/ font-family: Arial; color: rgb(9, 106, 57); font-size: 10px; }

body {SCROLLBAR-FACE-COLOR: #FFFFFF; SCROLLBAR-HIGHLIGHT-COLOR: #E1E1E1; SCROLLBAR-SHADOW-COLOR: #FFFFFF; SCROLLBAR-3DLIGHT-COLOR: #FFFFFF; SCROLLBAR-ARROW-COLOR: #E1E1E1; SCROLLBAR-TRACK-COLOR: #FFFFFF; FONT-FAMILY: Arial, Verdana; SCROLLBAR-DARKSHADOW-COLOR: #E1E1E1 }

</style>

</head>

<body>

<p style="margin: 0px 30px">&nbsp;</p>
<p style="margin: 0px 30px">&nbsp;</p>

<p style="margin: 0px 30px"><a title="Zpìt na titul" href="../../index.html">
<img border="0" src="../foot.jpg" width="139" height="52"></a></p>

<p style="margin: 0px 30px">&nbsp;</p>

<p style="margin: 0px 30px">&nbsp;</p>  

<p style="margin: 0px 30px">&nbsp;</p>
<p style="margin: 0px 30px">&nbsp;</p>  
<p style="margin: 0px 30px">&nbsp;</p>  

  
    
  <div style="margin: 0px 30px;">
  <form name="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
   <input type="hidden" name="sent" value=""/>  
   <fieldset style="width:300px;"> <legend class="style5">Pøihlášení </legend>
   <p><table border="0" class="style5"><tr> 
    <td >Vaše jméno: &nbsp;</td>
      <td ><input  name="username" value="<?php echo $username?>"></td>
    </tr><tr>
    <td >heslo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td ><input  name="password" /></td>
    </tr>
  </table>      
      </p>
   </fieldset> 
   <p> 

    <input type="submit" name="send" style="font-weight: bold;" class="butt" value="Odeslat" /></p>
  </form>
  </div>

    <script language="javascript">document.login.username.focus();</script>
</body>
</html>
    
<?php
}
?>
