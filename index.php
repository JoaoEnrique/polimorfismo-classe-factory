<?php
require 'vendor/autoload.php';
use App\Src\Login;

$login = new Login;
$zeus = $login->logar('zeus', '123');
echo "Seu reino é: " . $zeus->reino() . "\n";
echo "Seu simbolo é: " . $zeus->simbolo() . "\n\n";

$poseidon = $login->logar('poseidon', '123');
echo "Seu reino é: " . $poseidon->reino() . "\n";
echo "Seu simbolo é: " . $poseidon->simbolo() . "\n\n";

$hades = $login->logar('hades', '123');
echo "Seu reino é: " . $hades->reino() . "\n";
echo "Seu simbolo é: " . $hades->simbolo() . "\n\n";