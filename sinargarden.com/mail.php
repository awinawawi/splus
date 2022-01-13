<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer; 
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "mail.sinargarden.com";
$mail->SMTPDebug = 2;
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = "quotation@sinargarden.com";
$mail->Password = "smtt@2511";
$mail->SetFrom($_GET["from"],$_GET["name"]);
$mail->Subject = $_GET["subject"];
$mail->AddAddress("splusindo255@gmail.com","Sinargarden");  //tujuan email
$mail->MsgHTML($_GET["message"]);
if(!$mail->Send()) echo "Failed to sending message";
else echo "Message has been sent";
?>