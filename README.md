#Instalar para rodar apicação

Baixar o arquivo no cacert.pem link abaixo para rodar o Curl:

http://curl.haxx.se/ca/cacert.pem

Mover o arquivo cacert.pem para o diretório da pasta do PHP
\php\extras\ssl

No arquivo php.ini inserir a linha abaixo:

curl.cainfo = 'xxxx\xxxx\xxxx\xxxx\php\extras\ssl\cacert.pem'
_________________________________

Na raiz do projeto rodar o comando os comandos abaixo

Instalar as dependências: composer install

Rodar as migrations: php artisan migrate

Rodar o seed: php artisan db:seed

_________________________________

Inicar a aplicação:

php -S localhost:8000 -t public

#login
email: email_teste@teste.com

senha: teste_acesso


# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
