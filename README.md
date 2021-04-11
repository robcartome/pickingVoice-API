# API para trabajar con un picking de voz
Urls:
- Se muestran todos los pedidos  
http://server_name/pickingVoice/public/pedidos  | GET

- Muestra los items que tiene un pedido  
http://server_name/pickingVoice/public/pedido/{idPdo}  | GET

- Actualiza el estado del item del pedido (True o False) = (Alistado o Por Alistar)
http://server_namet/pickingVoice/public/pedido/{idPdo}/item/{idItem} | POST

- Ver el estado del pedido (Estado:true) = (Pedido Completado).Se completan si los estados de los items estan todos en (true) = Alistado          
http://server_name/pickingVoice/public/pedido/{idPdo} | POST

pst: Se entrega un archivo para visualizar las urls en Postman

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
