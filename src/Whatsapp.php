<?php
namespace App\Src;

class Whatsapp implements IMensageiro{
    public function enviar(string $mensagem){
        echo "Mensagem: '{$mensagem}' enviada pelo Whatsapp \n";
    }
}