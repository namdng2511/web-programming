# web-programming
## Install project guide

Step 1: `git clone --recurse-submodules https://github.com/namdng2511/web-programming.git`<br>
	if use 'git pull', run 'git submodule init && git submodule update`<br>

Step 2: `cd <project-path>/application`<br>

Step 3: `cp .env.example .env` then edit `APP_NAME, APP_URL, DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD, CACHE_DRIVER` config<br>

`
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=array
`

Step 4: `cd <project-path>/laradock`<br>
	``cp env-example .env` then change `APPLICATION=../` to `APPLICATION=../application`<br>

Step 5: `docker-compose up -d nginx mysql`<br>

Step 6:<br>
`docker exec -it laradock_mysql_1 bash`<br>
`mysql -u'root' -p'root'`<br>
`CREATE DATABASE library;`<br>
`exit`<br>
`exit`<br>

Step 7:<br>
`docker exec -it laradock_workspace_1 bash`<br>
`composer install`<br>
`php artisan storage:link`<br>
`php artisan migrate`<br>
`php artisan db:seed`<br>

`exit`<br>

Step 8:<br>
* `cd <project-path>/application`<br>
* `chmod -R [mode] .` into begin edit source code<br>
* `git config core.fileMode false` into ignore file mode submition.<br>
* `php artisan key:generate` to generate application encryption key

Step 9: go to `localhost` (or another local domain) on your browser.
