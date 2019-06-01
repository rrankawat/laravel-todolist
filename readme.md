<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## LaravelCollective Installation
- https://packagist.org/packages/laravie/html
- composer require ranabd36/laravelcollective

## How to install ?

- clone the project:<br />
git clone https://github.com/rrankawat/laravel-basicwebsite.git

- run commands:<br />
composer install<br />
npm install

- create new file ".env" if not exists and paste the code:
<pre>
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:ulqugYlfz14wzi7zEOydCpjJs59GV5gjk2Cn6/aqx7U=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=basicwebsite
DB_USERNAME=root
DB_PASSWORD=12345

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"<pre>
