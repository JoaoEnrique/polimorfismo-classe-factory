<?php
namespace App\Src;

class Zeus implements IDeusOlimpo{
    public function controle(): array{
        return ['clima', 'raios', 'trovão', 'céu', 'universo', 'comandar_deuses', 'governar_olimpo'];
    }

    public function simbolo(): string{
        return 'raio';
    }

    public function reino(): string{
        return 'céu';
    }
    
    public function autenticar(string $login, string $senha): bool{
        if($login == 'zeus' && $senha == '123')
            return true;
        return false;
    }
}