<?php
namespace App\Src;

class Login {
    public function logar($login, $senha) {
      $usuario = DeusOlimpoFactory::criar($login);
  
      if ($usuario->autenticar($login, $senha)) {
        $autorizacoes = $usuario->controle();
        echo "Olá, $login! Você pode controlar: " . implode(', ', $autorizacoes) . "\n";
        return $usuario;
      } else {
        echo 'Login ou senha incorretos.\n';
      }
    }
  }