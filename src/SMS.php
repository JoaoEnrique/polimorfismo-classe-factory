<?php
namespace App\Src;

class SMS implements IMensageiro{
    public function enviar(string $mensagem){
        echo "Mensagem: '{$mensagem}' enviada pelo SMS \n";
    }
}