<?php

    $mail=trim($_POST['T1']);
    $vzkaz=utf8_encode(trim($_POST['S1']));

    if($vzkaz=="" or $mail==""){ // pokud nebylo vyplneno neco z toho, co je povinné, dáme vedet a skript ukoncíme
      echo "<script>alert(\"Nebyly vyplneny všechny povinné údaje!\")</script>";
      echo "<script>history.back();</script>";
      return;
    }else if (!eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$',$mail)) {  //else if (empty($_POST['last_name']))
      echo "<script>alert(\"Nekorektní email !!! \\n Musí být zadán ve tvaru username @ domain . extension\")</script>"; //DBG  RE regex("%s, w+@w+ \.w+"))
      echo "<script>history.back();</script>";
      return;
    }else{              // povinné udaje vyplneny vsechny
      require "db_loc.php";     // pripojime se k databazi db_loc.php
      //$PocetStejnych=mysql_result(mysql_query("SELECT COUNT(*) FROM `uzivatele` WHERE `jmeno`='$jmeno' OR `mail`='$mail'"),0);
      {            // hesla se shoduji, vlozime tedy data do databaze
        //echo "Data byla uložena <BR>";
        $VlozData=mysql_query(" INSERT INTO vzkazy (`mail`, `vzkaz`)
                      VALUES
                    ('$mail', '$vzkaz')  ") or die (mysql_error());
                    
        // Jako posledni hodnota je "0", to jsou ty prava uzivatele.
        if($VlozData){
          echo "<script>window.location.href=\"obchod.php\";</script>";
        }
      }

    }

?>