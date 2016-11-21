## Exceptions 1.0.0

Conjunto de classes para gerenciamento de exceções


## Exceções disponíveis

  - Exception
  - DatabaseConfigurationNotFoundException
  - ElementNotFoundException
  - FileNotFoundException
  - MethodNotFoundException
  - NotFoundException
  - ParameterNotFoundException
  - TemplateNotFoundException
  - ViewNotFoundException    


## Observações
  - Deve-se criar diretório logs/ na raiz do projeto    
  - Exceptions extend Exceptions do PHP e utilza Monolog (https://packagist.org/packages/monolog/monolog) para armazenar log e Template (https://packagist.org/packages/tayron/template) para exibir mensagem de erro para o usuário
  - Caso não queira usar um template para renderização de mensagem de erro, deve-se alterar a classe Exception

  
## Utilização via composer

```sh
    "require": {
        ...
        "tayron/exceptions" : "1.0.0"
        ... 
    },    
```
