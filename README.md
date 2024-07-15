# PoP Modeler Backend

## Installation

```bash
$ npm install
```

## Running the app

```bash
# development
$ npm run dev
```

## Docker

- Create .env file from .env.example
- Run the command below to start container

```bash
$ docker compose up
```

- Run the command to enter into popmodeler

```bash
$ docker exec -it popmodeler bash
```

- Inside container run the following commands

```bash
$ composer install

$ php artisan db:seed
```
