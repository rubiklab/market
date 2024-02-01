#!/bin/bash
docker-compose run php chown -R "$USERID:$GROUPID" /var/www/html/

docker-compose run assets npm install
docker-compose run assets npm run build
docker-compose run php php artisan storage:link
