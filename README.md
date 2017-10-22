# Amadeus It Group PHP Developer Technical Task

## Install
```
cd docker
docker-compose build
docker-compose up -d
docker-compose exec php bash
composer install
```

## Run 
```
docker-compose exec php bash
app:run
```

## Test
```
docker-compose exec php bash
cp phpunit.xml.dist phpunit.xml
phpunit
```
