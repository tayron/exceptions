## Exceptions 1.0.2

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
  - Exceptions extend Exceptions do PHP e utilza Monolog (https://packagist.org/packages/monolog/monolog) para armazenar log
  
  
## Utilização via composer

```sh
    "require": {
        ...
        "tayron/exceptions" : "1.0.2"
        ... 
    },    
```
