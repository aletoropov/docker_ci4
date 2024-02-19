<p align="center">
<a href="https://codeigniter.com" target="_blank">
<img src="https://raw.githubusercontent.com/codeigniter4projects/website/develop/public/assets/icons/ci-logo.png" width="75">
<img src="https://raw.githubusercontent.com/codeigniter4projects/website/develop/public/assets/images/ci-logo-text-colored.png" width="400"></a>
</p>

# Docker CodeIgniter 4 Application Starter 

## Что такое CodeIgniter?

CodeIgniter - это MVC фреймворк написанный на PHP, который является легким, быстрым, гибким и безопасным.
Более подробную информацию можно найти на [официальном сайте](https://codeigniter.com).

## Запуск Docker образа и установка фреймворка

Для сборки docker образа выполните в корневой директории проекта <br>
`docker compose up --build` 
после необходимо войти в docker контейнер <br>
`docker exec -it citest_app bash` и выполнив команду <br>
`composer install` установить фреймворк и после выполнить <br>
`chmod 766 /var/www/writable/*`
сделать доступным для записи каталог `writable`.

## Настройки фреймворка

Переименуйте `env` в `.env` и выполните в консоли docker образа <br>
`php spark env` для применения настроек базы данных.

## Итог

Если все сделали правильно CodeIgniter будет доступен по адресу: <br>
[http://localhost:8001/](http://localhost:8001/)