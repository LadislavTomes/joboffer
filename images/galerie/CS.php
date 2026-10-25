<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<head>
  <SCRIPT>
 function Reload()
 { /*
import MySQLdb

mystring = "Bientôt l'été"

myinsert = [ { "name" : mystring.encode("utf-8").strip()[:65535], "id" : 1 } ]

con = None
con = MySQLdb.connect('localhost', 'abc', 'def', 'ghi');
cur = con.cursor()
sql = "INSERT INTO 'MyTable' ( 'my_id', 'my_name' ) VALUES ( %(id)s, %(name)s ) ; "
cur.executemany( sql, myinsert )
con.commit()
if con: con.close()
    */
    
 }
  </SCRIPT>
</head>
<?php
  $cena=trim($_POST['cena']);
  $title=utf8_encode(trim($_POST['title']));
  $technika=utf8_encode(trim($_POST['technika']));
  $size=trim($_POST['size']);  
  $cesta= $_POST['cesta'];  
  //echo "<script>alert(\" title '$title' \")</script>";   
  //      echo "<script>alert(\" cesta '$cesta' \")</script>"; //"Zadané jméno nebo email je již používán nekým jiným!!! <BR>";
  ///      echo "<script>history.back();</script>";     
 {              // povinné udaje vyplneny vsechny
      require "../../db_loc.php";     // pripojime se k databazi db_loc.php
      //$PocetStejnych=mysql_result(mysql_query("SELECT COUNT(*) FROM `uzivatele` WHERE `jmeno`='$jmeno' OR `mail`='$mail'"),0);
      //$PocetStejnych=mysql_result(mysql_query("SELECT COUNT(*) FROM `images` WHERE `cesta`='$cesta'"),0);
      if($PocetStejnych!=0){    // pokud v db je jiz takove jmeno nebo heslo...
        echo "<script>alert(\"Zadaný obrázek již je v databázi a je už používán jinde!!! \")</script>"; //"Zadané jméno nebo email je již používán nekým jiným!!! <BR>";
        echo "<script>history.back();</script>";
        return;
      }else{            // hesla se shoduji, vlozime tedy data do databaze
        //echo "Data byla uložena <BR>";
        /*
        $VlozData=mysql_query(" INSERT INTO galerie (`jmeno`, `mail`, `title`, `cena`, `cesta`)
                      VALUES
                    ('$jmeno', '$heslo1', '$mail', '$oblast', '$uroven', '$web')  ") or die (mysql_error());
         */ 
         /*   
        $VlozData=mysql_query(" INSERT INTO images (`title`, `cena`, `cesta`)
                      VALUES
                    ('$title', '$cena', '$cesta')  ") or die (mysql_error());
          */     
        //$VlozData=mysql_query(" UPDATE images SET `title`='$title', `technika`='$technika', `size`='$size', `cena`='$cena', `cesta`='$cesta' WHERE `cesta`='$cesta' ") or die (mysql_error());               
        // Jako posledni hodnota je "0", to jsou ty prava uzivatele.
        
$mystring = "čšřčýřážíýéů§"; //Bientôt l'été";

//myinsert = [ { "name" : mystring.encode("utf-8").strip()[:65535], "id" : 1 } ]

//mystring.encode("utf-8").
$title = utf8_encode($mystring);
        
        //sql = "INSERT INTO 'MyTable' ( 'my_id', 'my_name' ) VALUES ( %(id)s, %(name)s ) ; "
        $VlozData=mysql_query("INSERT INTO `MyTable` (`my_id`, `my_name`)
                      VALUES
                    ( '3', '$title')  ") or die (mysql_error());
 
                                   
        if($VlozData){
         /*
          //echo "$cena.$title";
          echo "Data byla uložena <BR>";
          echo "Nyní se otevře náhled, zároveň je možné pokračovat v editaci <BR>";
          echo "<form action=\"null\">"; // onclick=\"Reload()\"
          //          echo "<input type=\"button\" <a href='http://www.AtNet.sk/wwwnew/obchod.php'>Close Window</a> />";
          echo "<a href='http://www.AtNet.sk/wwwnew/obchod.php'>Close Window</a>";
          echo "</form>";
          */
          //return;
          //echo "<script>history.back();</script>";
          echo "<script>window.location.href=\"editace.php\";</script>";
          //document.window.opener.close();" 
        }
       // echo "<script>history.back();</script>";
        //echo "<script>newWindowObj = window.open('obchod.php', 'Internet Explorer');</script>";
        //echo "<script>window.close();</script>";
      }
      mysql_close();
        
    }
?>
