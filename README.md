# Websocket | Laravel
Simple example of using local **websockets** on Laravel framework

## User Interface
soon... :shipit:

## TODO
- [ ] Make makefile 
- [ ] Private channels
- [x] Separate Message.vue on components

## Usage
### Development
1. Make directory for docker `mkdir ./storage/docker`
2. Copy .env.example `cp .env.example .env`
3. Add UID, GID on .env file
4. Run docker services `docker-compose up -d --build`
5. Install composer dependencies `docker-compose exec app composer install`
6. Install npm dependencies `npm install`
7. Migrate database `docker-compose exec app php artisan migrate --seed`
8. Run websockets serve `docker-compose exec app php artisan websockets:serve`

> Server running on [localhost:8876](http://localhost:8876)
