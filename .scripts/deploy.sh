#!/bin/bash
docker-comopse down;
git pull origin main;
docker-compose up -d;
docker-comopse run php php artisan migrate;
