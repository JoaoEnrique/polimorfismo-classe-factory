<?php
namespace App\Src;

class MensageiroFactory{
    public static function criar($tipo_mensagem): IMensageiro{
        switch($tipo_mensagem){
            case 'email':
                return new Email;
            case 'sms':
                return new SMS;
            case 'whatsapp':
                return new Whatsapp;
            default:
                return "Erro";
        }

    }
}