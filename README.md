#Сайт для диплома
## Чеклист для дальнейшей разработки
- [X] Поднять в докере php, nginx и mysql
- [X] Сделать файл .env
- [X] Поставить композер.
- [X] Установить laravel
- [X] Добавить PHPMyAdmin в docker
- [X] Добавить под гит.
## Поднятие проекта
### Первый разворот:
docker-compose up -d  
cd www && composer update && cp .env.example  
Сайт находиться по данной [ссылке](http://localhost:80).
### Доступы для phpMyAdmin
u: root
p: secret