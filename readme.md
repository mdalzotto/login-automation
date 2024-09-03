**Dentro da pasta "login-automation" execute os seguites comandos:**

`docker-compose up -d
`

após finalizar 

`docker-compose exec app bash
`

após finalizar entrar no bash

`cd application/
`

após acessar a pasta

`composer install
`

após finalizar

`php artisan migrate
`

após finalizar

`php artisan db:seed
`

após finalizar

`exit`

**Basta acessar: http://localhost:8000**


Para realizar login use o Usuário

**admin@admin.com** ou **user@user.com**

ambos com a **senha "password"**
