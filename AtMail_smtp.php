<?php
//_NET_LOC.
ini_set (
"include_path", (
"./PEAR/" .
PATH_SEPARATOR .
ini_get ("include_path")
)
);
require_once "Mail.php";
function autoUTF($s)
{
    // detect UTF-8
    if (preg_match('#[\x80-\x{1FF}\x{2000}-\x{3FFF}]#u', $s))
        return $s;
    // detect WINDOWS-1250
    if (preg_match('#[\x7F-\x9F\xBC]#', $s))
        return iconv('WINDOWS-1250', 'UTF-8', $s);
    // assume ISO-8859-2
    return iconv('ISO-8859-2', 'UTF-8', $s);
}

function AtMail_smtp($to, $from, $body, $subject)
{   
    $to    = "obrazy@ilona.in"; // "obrazy@ilona.in"; "pbucek@AtNet.sk"; "bucekpetr@post.cz"; 
    $from_ = "obrazy@ilona.in";        // "pbucek@AtNet.sk";
         
    $host     = "ilona.in";
    $username = "789ilonain";
    $password = "3htiQwVnFbmR";
  
     $subject = "=?utf-8?B?".base64_encode(autoUTF ($subject))."?=";
     $body = base64_encode (autoUTF ($body));

$headers = array( 'From' => $from_,
               'To' => $to,
               'Subject' => $subject,
              // 'X-Mailer' => 'PHP 4.x',
               'MIME-Version' => '1.0',
               'Content-type' => 'text/plain; charset=utf-8',
               'Content-Transfer-Encoding' => 'base64');  // quoted-printable
               //'Content-Transfer-Encoding' => 'base64'); 
               
               
$head .= "MIME-Version: 1.0\n";
$head .= "Content-Type: text/plain; charset=\"utf-8\"\n";
$head .= "Content-Transfer-Encoding: base64\n";
$head .= "From: {$from}\n\n";
               

/*
    $smtp = Mail::factory('smtp',
    array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

    $mail = $smtp->send($to, $headers, $body);
 */
 Mail ($to, $subject, $body, $head);
    
    if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
    } else {
    echo("<p></p>");
    }    
  }
?>
