Устанавливать node_modules очень геморройно. Постоянно какие-то ошибки.  

На винде если есть ошибки, то надо удалить:
* папку node_modules из проекта
* C:\Users\Администратор\AppData\Roaming\npm
* C:\Users\Администратор\AppData\Roaming\npm-cache
* деинсталлировать nodejs из панели управления

Потом заново установить nodejs, перезапустить openserver, запустить консоль, перейти в папку проекта и запустить команду npm install


На Debian пока не разобрался



файлы и папки, которые не синхронизируются
* /public
* /node_modules
* /vendor
* Homestead.yaml
* Homestead.json
* .env

поэтому после копировать репозиторий надо так
```
cd /var/www
laravel new lara
git clone https://github.com/schel4ok/steklo
mv /var/www/lara/public/ /var/www/steklo/public/
mv /var/www/lara/vendor/ /var/www/steklo/vendor/
rm -r /var/www/lara
cd /var/www/steklo
composer update
bower update
gulp
```

## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)