<h1 align="center">
  <a href="#"> PoP Modeler </a>
</h1>


## About

PoP modeler is a tool used to manage and model large, complex, and dynamic business processes

---

## How it works

The project is divided into two parts:

1. Backend (this repo)
2. Frontend (https://github.com/popmodeler/frontend)

But this repository is referring only to the Backend part.

### Pre-requisites

Before you begin, you will need to have the following tools installed on your machine:
[Git](https://git-scm.com), [Docker](https://www.docker.com/).

In addition, it is good to have an editor to work with the code like [VSCode](https://code.visualstudio.com/)

#### Running the backend

```bash

# Clone this repository
$ git clone git@github.com:popmodeler/backend.git

# Access the project folder in your terminal
$ cd backend
```

- Create a .env file by copying the .env.example file into the root folder.
  
- Run the command below to start container

```bash
$ docker compose up
```

- Run the command to enter into popmodeler container

```bash
$ docker exec -it popmodeler bash
```

- Inside container run the following commands

```bash
$ composer install

$ php artisan db:seed
```

---

## Tech Stack

The following tools were used in the construction of the project:

#### **Platform** ([Laravel Lumen](https://lumen.laravel.com/docs/11.x))

#### See the file [docker-compose.yml](https://github.com/popmodeler/backend/blob/main/docker-compose.yml) to complete view of container services

#### See the file [package.json](https://github.com/popmodeler/backend/blob/main/composer.json) to complete list of dependencies

---

## License

This project is Open Source, registered by UFMS, see the [License File](https://github.com/popmodeler/backend/blob/main/LICENSE) to more info.

---

## Learn More

We have developed documentation intended to explain the usage of the features and the requirements of the tool, available at: https://popmodelerdoc.ledes.net/

The current version of the tool is available for use at: https://popmodeler.ledes.net/

