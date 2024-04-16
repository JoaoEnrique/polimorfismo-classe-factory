<?php
namespace App\Src;

class Poseidon implements IDeusOlimpo{
    public function controle(): array{
        return ['mares', 'lagos', 'rios', 'oceanos', 'chuva', 'terremotos', 'erupcoes_vulcanicas', 'enchentes ', 'cavalos'];
    }

    public function simbolo(): string{
        return 'tridente';
    }

    public function reino(): string{
        return 'mar';
    }
    
    public function autenticar(string $login, string $senha): bool{
        if($login == 'poseidon' && $senha == '123')
            return true;
        return false;
    }
}