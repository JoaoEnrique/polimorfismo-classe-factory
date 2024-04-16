Sistemas para os Deuses do Olimpo gerenciarem suas funcionalidades, reinos e simbolos por meio de Login e Clase Factory com Polimorfismo em PHP

# Saida

```cmd
Olá, zeus! Você pode controlar: clima, raios, trovão, céu, universo, comandar_deuses, governar_olimpo
Seu reino é: céu
Seu simbolo é: raio

Olá, poseidon! Você pode controlar: mares, lagos, rios, oceanos, chuva, terremotos, erupcoes_vulcanicas, enchentes , cavalos
Seu reino é: mar
Seu simbolo é: tridente

Olá, hades! Você pode controlar: submundo, riqueza, morte, vida
Seu reino é: submundo
Seu simbolo é: elmo
```

# Index
```php
require 'vendor/autoload.php';
use App\Src\Login;

$login = new Login;
$zeus = $login->logar('zeus', '123');
echo "Seu reino é: " . $zeus->reino() . "\n";
echo "Seu simbolo é: " . $zeus->simbolo() . "\n\n";

$poseidon = $login->logar('poseidon', '123');
echo "Seu reino é: " . $poseidon->reino() . "\n";
echo "Seu simbolo é: " . $poseidon->simbolo() . "\n\n";

$hades = $login->logar('hades', '123');
echo "Seu reino é: " . $hades->reino() . "\n";
echo "Seu simbolo é: " . $hades->simbolo() . "\n\n";
```

# Interface IDeusOlimpo
```php
namespace App\Src;

interface IDeusOlimpo{
    public function controle(): array; // o que cada Deus controla
    public function simbolo(): string; //simbolo de cada Deus
    public function reino(): string; //reino de cada Deus
    public function autenticar(string $login, string $senha): bool; // permite que cada Deus faca login
}
```

# Classe Factory
```php
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
```

# Login
```php
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
```

# Classe Zeus
```php
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
```

# Classe Poseidon
```php
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
```

# Classe Hades
```php
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
```