#!/bin/bash

#ref: https://aschmelyun.com/blog/fixing-permissions-issues-with-docker-compose-and-php/
export USERID=$(id -u ec2-user)
export GROUPID=$(id -g ec2-user)

docker-compose down
docker-compose up -d --build

chown -R "$USERID:$GROUPID" ./

docker-compose run assets npm install
docker-compose run assets npm run build
docker-compose run php php artisan storage:link
