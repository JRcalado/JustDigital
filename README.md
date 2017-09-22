#  back-end
API Rest php 
Autenticação via Web Token (JWT)
## Requisitos
- PHP 7.x
- MYSQL
## Bibliotecas usadas
- aura/router: Paras Rotas 
- zendframework/zend-diactoros: Respose e Request 
- xtreamwayz/pimple-container-interop: Container de serviços
- illuminate/database: ORM 


#  front-end
Single Page Application(SPA) - Html - Javascript
## Bibliotecas usadas
- Jquery

##  Instalação API
- git clone https://github.com/JRcalado/JustDigital.git
- Credenciais do Banco de Dados  api/config/db.php
```php
  return [
    'development'=>[
            'driver' => 'mysql',
            'host' => 'localhost',
            'database'=> 'cms',
            'username'=>'xxxxx',
            'password'=>'xxxxx',
            'charset'=>'utf8',
            'collation'=>'utf8_unicode_ci'
             ]
  ];
  ```
##  BASE DE DADOS
- Criar banco de dados com o comando:
```bash
    mysql  -uXXXXXX -pXXXXX -hlocalhost  -e "CREATE DATABASE CMS"
 ```
- Criar as Tabelas:
```bash
	mysql   -uXXXXXX -pXXXXX -hlocalhost  CMS < base.sql
```

## Servidor PHP  
- Execute o comando abaixo dentro da pasta raiz dos arquivos
```bash
    php -S localhost:8000 -t ./
```