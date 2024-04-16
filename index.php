<?php
require 'vendor\autoload.php';

use App\Src\MensageiroFactory;

$email = MensageiroFactory::criar('sms');
$whatsapp = MensageiroFactory::criar('whatsapp');
$sms = MensageiroFactory::criar('sms');

$email->enviar("zxx");
$whatsapp->enviar("zxx");
$sms->enviar("zxx");