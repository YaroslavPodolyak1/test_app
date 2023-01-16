1) Проинсталировать базовый функционал регистрации/авторизации пользователя
2) Добавить необходимость подтверждения имейл адреса (отправка письма со ссылкой для подтверждения имейла). 
3) Можно использовать готовые решения, можно написать самому
3) Логировать время регистрации пользователя в отдельный обьект UserRegistrationLog.
4) код выложить на гитхаб
5) каждая задача - отдельный комми

For running
HOST http://localhost:8097/

Dependencies: php 8.1, node 18.13.0

docker-compose up -d
docker exec -it test_app_fpm_1 bash
if not install laravel run composer install
php artisan migrate
for front yarn, yarn serve

