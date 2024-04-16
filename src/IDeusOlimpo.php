<?php
namespace App\Src;

interface IDeusOlimpo{
    public function controle(): array; // o que cada Deus controla
    public function simbolo(): string; //simbolo de cada Deus
    public function reino(): string; //reino de cada Deus
    public function autenticar(string $login, string $senha): bool; // permite que cada Deus faca login
}