<?php
namespace App\Src;

class DeusOlimpoFactory{
    public static function criar($deus){
        switch($deus){
            case 'zeus':
                return new Zeus;
            case 'hades':
                return new Hades;
            case 'poseidon':
                return new Poseidon;
            default:
                return "erro";
        }
    }
}