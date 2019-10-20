# Docker WordPress Boilerplate

Simple boilerplate to run WordPress with Docker.

- http://localhost:8080 - Website
- http://localhost:8081 - PHPMyAdmin

By default the database credentials you need to use are as follows

- db name: wordpress
- db username: root
- db password: wordpress
- db host: db

---

## Get Started

1️⃣ Build the project

```
docker-compose up -d
```

2️⃣ Install the lastest WordPress version

```
cd app/public
git clone https://github.com/WordPress/WordPress.git wp
```

3️⃣ Navigate to http://localhost:8080 in your browser to begin the Wordpress installation.

---

## Shutdown and cleanup

The command `docker-compose down` removes the containers and default network, but preserves your WordPress database.

The command `docker-compose down --volumes` removes the containers, default network, and the WordPress database.

---

## Extra

### Expose Environment

```
php:
  volumes:
    - ./docker/php/expose-env.conf:/etc/apache2/conf-enabled/expose-env.conf
```

### mysql 8

```
services:
  db:
    image: mysql:8
    command: "--default-authentication-plugin=mysql_native_password"
    ..
```

using MySQL 8 it is also important to add the following line of code:

```
command: "--default-authentication-plugin=mysql_native_password"
```

By adding this command option we’re specifying that the database should be run with native password authentication enables.

You also can add more commands, example:

```
command: [
    '--default_authentication_plugin=mysql_native_password',
    '--character-set-server=utf8mb4',
    '--collation-server=utf8mb4_unicode_ci'
]
```

---

## Inspirations

- https://docs.docker.com/compose/wordpress/
- https://akrabat.com/developing-wordpress-sites-with-docker/
- https://github.com/markjaquith/WordPress-Skeleton
- https://gist.github.com/bradtraversy/faa8de544c62eef3f31de406982f1d42
- https://dev.to/emil_priver/docker-docker-compose-wordpress-bedrock-2lh2

---

## Licence

This software is published by the Financial Times under the [MIT licence](http://opensource.org/licenses/MIT).