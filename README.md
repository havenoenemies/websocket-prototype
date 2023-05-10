# Websocket | Laravel & Docker 
Simple example of using local **websockets** on Laravel framework :v:

## User Interface
soon... :shipit:

## TODO
- [ ] Make makefile 
- [ ] Private channels
- [ ] Separate Message.vue on components

## Usage
### Development
1. Make directory for docker `mkdir ./storage/docker`
2. Copy .env.example `cp .env.example .env`
3. Run docker services `docker-compose up -d --build`
4. Install composer dependencies `docker-compose exec app composer install`
5. Install npm dependencies `npm install`
6. Migrate database `docker-compose exec app php artisan migrate --seed`
7. Run websockets serve `docker-compose exec app php artisan websockets:serve`

> Server running on [localhost:8876](http://localhost:8876)
