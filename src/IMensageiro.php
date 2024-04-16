<?php
namespace App\Src;

interface IMensageiro{
    public function enviar(string $mensagem);
}