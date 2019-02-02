Parent theme included in zip.

To start Wordpress with Docker, this docker-compose.yml file can be used:

```
version: "3"

services:
  wordpress:
    image: wordpress
    restart: always
    ports:
      - 8080:80
    environment:
      WORDPRESS_DB_PASSWORD: wptest
    depends_on:
      - "mysql"
    # for wordpress we use a bind mount volume (from host's current path to docker container)
    # should be owned by www-data !!
    volumes:
      - ./wp-content:/var/www/html/wp-content
  mysql:
    image: mysql:5.7
    environment:
      MYSQL_ROOT_PASSWORD: wptest
    # for mysql we use a docker-managed volume
    volumes:
      - mysql-data-volume:/var/lib/mysql

volumes:
  mysql-data-volume:
    
```
