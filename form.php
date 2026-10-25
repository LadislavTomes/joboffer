<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<head>
  <SCRIPT>
 function Reload()
 { /*
    newWindowObj = window.open('obchod.php', 'Ilona_obrazy');
    newWindowObj.document.window.close();
    newWindowObj = window.open('obchod.php', 'Ilona_obrazy');
    window.close();
    document.window.close();
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
  if($title=="" or $cena==""){ // pokud nebylo vyplneno neco z toho, co je povinné, dáme vedet a skript ukoncíme
      echo "<script>alert(\"Nebyly vyplneny všechny povinné údaje!\")</script>";
      echo "<script>history.back();</script>";
      return;
  } else if(($cena<0) || ($cena>9999)) {
      echo "<script>alert(\"Cena musí být v rozmezí 0 až 9999 !!! \")</script>";
      echo "<script>history.back();</script>";
  }else{              // povinné udaje vyplneny vsechny
      require "db_loc.php";     // pripojime se k databazi db_loc.php
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
        $VlozData=mysql_query(" UPDATE images SET `title`='$title', `technika`='$technika', `size`='$size', `cena`='$cena', `cesta`='$cesta' WHERE `cesta`='$cesta' ") or die (mysql_error());               
        // Jako posledni hodnota je "0", to jsou ty prava uzivatele.
        
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
          echo "<script>window.location.href=\"obchod.php?logged=1\";</script>";
          //document.window.opener.close();" 
        }
       // echo "<script>history.back();</script>";
        //echo "<script>newWindowObj = window.open('obchod.php', 'Internet Explorer');</script>";
        //echo "<script>window.close();</script>";
      }
      mysql_close();
        
    }
?>
