
# Integração do Vue2 com Laravel 8
Projeto Final do Curso de Laravel 8 c/ Vue2. Nele aprendi como integrar o Vue2 junto ao Laravel.

## Features

- Laravel 8
- Autenticação via JWT
- Vue2
- Laravel UI


## Instalação

1) Baixar e configurar o Laravel
`
composer install
`
`
cp .env.example .env
`
`
php artisan key:generate
`
`
php artisan migrate
`

2) Instalar Pacote UI
```sh
composer require laravel/ui:^3.2.1
```
3) Gerar o esqueleto do projeto com autenticação web nativa
```sh
php artisan ui vue --auth
```
4) Evitando erros de SSL com versões Node 
- Exclua o arquivo package-lock.json (apenas por garantia). Rode no terminal o comando abaixo:

- windows
`set NODE_OPTIONS=--openssl-legacy-provider`
- linux
`export NODE_OPTIONS=--openssl-legacy-provider`
5) Baixar as dependencias de frontend
```sh
npm install
```
6) Produzir bundle  e automatizar compilação das mudanças do frontend
```sh
npm run watch
```
    
