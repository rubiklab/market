<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Salvage Market

It's a market place for people to sell car parts and/or car with parts

ToDo:
- ~~setup project~~
- setup docker for deployment
  - php
  - nginx
  - redis for pulse ingestion and queue
  - setup mysql on composer for online dev env
  - setup rds for production
- deploy on aws (this might be expensive to run, but lessons are priceless)
  - setup a new account for free tier
  - prepare cloud formation file
  - setup with scaling group 
- implement the existing functionalities from old project using TDD Pest
- use icons to showcase the available parts
