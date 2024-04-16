<?php
namespace App\Src;

class Email implements IMensageiro{
    function enviar(string $mensagem){
        echo "Mensagem: '{$mensagem}' enviada pelo Email \n";
    }
}