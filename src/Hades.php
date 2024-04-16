<?php
namespace App\Src;

class Hades implements IDeusOlimpo{
    public function controle(): array{
        return ['submundo', 'riqueza', 'morte', 'vida'];
    }

    public function simbolo(): string{
        return 'elmo';
    }

    public function reino(): string{
        return 'submundo';
    }
    
    public function autenticar(string $login, string $senha): bool{
        if($login == 'hades' && $senha == '123')
            return true;
        return false;
    }
}