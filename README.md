# Saida

```cmd
Mensagem: 'zxx' enviada pelo SMS 
Mensagem: 'zxx' enviada pelo Whatsapp
Mensagem: 'zxx' enviada pelo SMS
```

# index.php
```php
require 'vendor\autoload.php';

use App\Src\MensageiroFactory;

$email = MensageiroFactory::criar('sms');
$whatsapp = MensageiroFactory::criar('whatsapp');
$sms = MensageiroFactory::criar('sms');

$email->enviar("zxx");
$whatsapp->enviar("zxx");
$sms->enviar("zxx");
```

# Interface IMensageiro
```php
namespace App\Src;

interface IMensageiro{
    public function enviar(string $mensagem);
}
```

# Classe Factory
```php
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
```

# Classe Email
```php
namespace App\Src;

class Email implements IMensageiro{
    function enviar(string $mensagem){
        echo "Mensagem: '{$mensagem}' enviada pelo Email \n";
    }
}
```

# Classe SMS
```php
namespace App\Src;

class SMS implements IMensageiro{
    public function enviar(string $mensagem){
        echo "Mensagem: '{$mensagem}' enviada pelo SMS \n";
    }
}
```

# Classe Whatsapp
```php
namespace App\Src;

class Whatsapp implements IMensageiro{
    public function enviar(string $mensagem){
        echo "Mensagem: '{$mensagem}' enviada pelo Whatsapp \n";
    }
}
```