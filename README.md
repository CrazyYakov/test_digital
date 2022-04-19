# DC - Тестовое задание


Установка:

1) Скачайте проект 
```
git clone https://github.com/CrazyYakov/test_digital.git
```
2) Перейдите в папку с проектом
```
cd test_digital
```
3) Установите пакеты с помощью composer 
```
composer install
```
4) скопируйте файл конфигурации
```
cp .env.example .env
```
5) В .env настройте подключение к БД
```
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
6) В .env установите ключ вашего приложения в случайную строку. 
Как правило, длина этой строки должна составлять 32 символа. Это нужно для защиты данных
```
APP_KEY=
```
7) Выполните миграцию
```
php artisan migrate
```

