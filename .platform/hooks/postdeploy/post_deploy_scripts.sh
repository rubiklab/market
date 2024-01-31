#!/bin/bash
chown -R USERID:GROUPID ./

docker-compose run assets npm install
docker-compose run assets npm run build
docker-compose run php php artisan storage:link
