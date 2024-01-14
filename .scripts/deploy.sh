#!/bin/bash
docker-compose down;
git pull origin main;
docker-compose up -d;
docker-compose run php php artisan migrate;
