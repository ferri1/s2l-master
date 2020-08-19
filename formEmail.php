<?php
if(!isset ($_post['submit']))
{
  echo "error; you need to submit the form!";

}
$name = $_post['nom'];
$email = $_post['email'];
$message = $_post['message'];
//validation
if(empty($name) || empty($email) )
{
  echo "nom et email sont obligatoire!";
  exit;
}
$email_from = 'kaouane.lynda75@gmail.com';
$email_subject = '';
$email_body  = "tu recoit un nouveau msg de user $name.\n".
"email adresse : $email.\n".
"voici le message : $message.\n".

$to = 'kaouane.lynda75@gmail.com';
$headers = "Form : $email_from \r\n";
//SEND THE EMAIL
mail($to, $email_subject, $email_body, $headers);
 ?>
