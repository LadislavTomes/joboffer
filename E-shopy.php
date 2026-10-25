<?php
	/* configuration settings */
	$max_photo_size = 50000;
	$upload_required = true;
	$upload_page = 'index.php';
	$upload_dir = './'; // /exam/05/examples/fileupl/ exam\05\examples\fileupl

	$err_msg = false;
	do {
		/* Does the file field even exist? */
		if (!isset ($_FILES['book_image'])) {
			$err_msg = 'The form was not send in completely.';
			break;
		} else {
			$book_image = $_FILES['book_image'];
		}

		/* We check for all possible error codes wemight get */
		switch ($book_image['error']) {
			case UPLOAD_ERR_INI_SIZE:
				$err_msg = "The size of the image is too large, it can not be more than $max_photo_size bytes.";
				break 2;
			case UPLOAD_ERR_PARTIAL:
				$err_msg = "An error ocurred while uploading the file, please <a href='{$upload_page}'>try again</a>.";
				break 2;
			case UPLOAD_ERR_NO_FILE:
				if ($upload_required) {
					$err_msg = "You did not select a file to be uploaded, please do so <a href='{$upload_page}'>here</a>.";
					break 2;
				}
				break 2;
			case UPLOAD_ERR_OK:
			case UPLOAD_ERR_FORM_SIZE:
				if ($book_image['size'] > $max_photo_size) {
					$err_msg = "The size of the image is too large, it can not be more than $max_photo_size bytes.";
				}
				break 2;
			default:
				$err_msg = "An unknown error occurred, please try again <a href='{$upload_page}'>here</a>.";
		}

		/* Know we check for the mime type to be correct, we allow JPEG and PNG images */
		if (!in_array($book_image['type'], array ('image/jpeg', 'image/pjpeg', 'image/png'))) {
			$err_msg = "You need to upload a PNG or JPEG image, please do so <a href='{$upload_page}'>here</a>.";
			break;
		}
		
	} while (0);

	/* If no error occurred we move the file to our upload directory */
	if (!$err_msg) {
		if (!@move_uploaded_file($book_image['tmp_name'], $upload_dir . $book_image['name'])) {
			$err_msg = "Error moving the file to it's destination, please try again <a href='{$upload_page}'>here</a>.";
		}
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<title>Project 2</title>
<style type="text/css">
body {background: #EED; margin: 1em;}
div#footer {clear: both; padding-top: 3em;
  font: 85% Verdana, sans-serif;}
div.pic {float: left; height: 200px; width: 130px;
  padding: 0 15px; margin: 5px 3px;}
div.pic img.pic {border: 0px solid; border-color: #444 #AAA #AAA #444;}
div.ls img.pic {height: 96px; width: 128px; margin: 32px 0 0;}
div.pt img.pic {height: 128px; width: 96px; margin: 0 16px;}
div.pic ul {margin: 0.25em 0 0; padding: 0;
  font: small Arial, Verdana, sans-serif;}
li {display: block; text-align: center;}
li.title {font-weight: bold;}
div.pic li.catno {text-align: right;
  margin: 0 50% 0 0; padding: 0 0.5em 0 0;}
div.pic li.price {text-align: left; font-style: italic;
  margin: -1.2em 0 0 50%; padding: 0 0 0 0.5em;
  border-left: 1px solid;}
  
img.cart {cursor :pointer; border: 0px solid; width:20px; height:20px; margin: 0 0;  padding: 0;}

</style>
  <SCRIPT>
var Celkem = 0;
var iN = 0;   
function Counter(Price)
{ Celkem += Price; 
  iN++;
  if(iN==1)
  document.getElementById("footer").innerHTML="<h2>Ve Vašem košíku je nyní "
  + iN + " položka <BR>V cenì " + Celkem + " Kè</h2>";
  else if(iN<5)
  document.getElementById("footer").innerHTML="<h2>Ve Vašem košíku jsou nyní "
  + iN + " položky <BR>V celkové cenì " + Celkem + " Kè</h2>";  
  else
  document.getElementById("footer").innerHTML="<h2>Ve Vašem košíku je nyní "
  + iN + " položek <BR>O celkové cenì " + Celkem + " Kè</h2>";   
}
  </SCRIPT>
</head>
<body>

<div class="pic ls"><a href="" class="tn"><img src="tn/thumb01.jpg"></a><ul>
<li class="title">The Ferrett's Daffodil</li>
<li class="catno">03F01</li>
<li class="price">79 Kè<BR><img class="cart" onclick="Counter(79)" src="Cart.jpg"></img></li>
<li></li>
</ul></div>
<div class="pic pt"><a href="" class="tn"><img src="tn/thumb02.jpg"></a><ul>
<li class="title">At Lunch</li>
<li class="catno">03F02</li>
<li class="price">58 Kè<BR><img class="cart" onclick="Counter(58)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb03.jpg"></a><ul>
<li class="title">Spring Daffodils</li>
<li class="catno">03F03</li>
<li class="price">67 Kè<BR><img class="cart" onclick="Counter(67)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb04.jpg"></a><ul>
<li class="title">Garden Flowers I</li>
<li class="catno">03F04</li>
<li class="price">73 Kè<BR><img class="cart" onclick="Counter(73)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb05.jpg"></a><ul>
<li class="title">Garden Flowers II</li>
<li class="catno">03F05</li>
<li class="price">27 Kè<BR><img class="cart" onclick="Counter(27)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb06.jpg"></a><ul>
<li class="title">Your Red Tulips</li>
<li class="catno">03F06</li>
<li class="price">95 Kè<BR><img class="cart" onclick="Counter(95)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb07.jpg"></a><ul>
<li class="title">Starburst</li>
<li class="catno">03F07</li>
<li class="price">195 Kè<BR><img class="cart" onclick="Counter(195)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb08.jpg"></a><ul>
<li class="title">Tiny Islands I</li>
<li class="catno">03F08</li>
<li class="price">279 Kè<BR><img class="cart" onclick="Counter(279)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb09.jpg"></a><ul>
<li class="title">Tiny Islands II</li>
<li class="catno">03F09</li>
<li class="price">79.50 Kè<BR><img class="cart" onclick="Counter(79.50)" src="Cart.jpg"></img></li>
</ul></div>
<div class="pic ls"><a href="" class="tn"><img src="tn/thumb10.jpg"></a><ul>
<li class="title">Water Bloom I</li>
<li class="catno">03F10</li>
<li class="price">59.50 Kè<BR><img class="cart" onclick="Counter(59.50)" src="Cart.jpg"></img></li>
</ul></div>

<?php
  $cena=trim($_POST['heslo']);
  if(($cena<0) || ($cena>9999))
  {   echo "<script>alert(\"Cena musí být v rozmezí 0 až 9999 !!! \")</script>";
      echo "<script>history.back();</script>";
  } 
	if ($err_msg) {
		var_dump($_FILES);
		echo $err_msg;
	} else {
?>
<div class="pic ls"><a href="" class="tn"><img src='<?php echo $book_image['name']; ?>'/></a><ul>
<li class="title"><?php echo $_POST['jmeno']; ?></li>
<li class="catno">03F10</li>
<li class="price"><?php echo $_POST['heslo']; ?> Kè<BR><img class="cart" 
    onclick="Counter(<?php echo $_POST['heslo']; ?>)" src="Cart.jpg"></img></li>
</ul></div>
<?php
	}
?>

<div id="footer">

<h2> Klikejte na košíky u vybraného zboží a sledujte stav košíku zde dole na stránce.<h2>
Ve Vašem košíku je zatím 0 položek.
</div>
<input type="submit" value="Zaplatit objednávku" onclick="window.close()"/></p>

</body>
</html>
