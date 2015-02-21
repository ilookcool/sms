<?php
require_once("SendSMS.php");
$sms_username = "navis1";
$sms_password = "N4E9jtww";
$destination = "00351962810366";
$from =      "Empresa X";
$mensagem = "Novo agendamento online";
$replies = send_sms($destination,$from,$mensagem) or die ("Error: " . $errstr . "\n");
	?>