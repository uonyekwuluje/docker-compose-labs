# Apache2, MySQL, PHP & PhpMyadmin Stack
PHP, Mariadb & PhpMyadmin stack.

## Docker Commands
Start and tear down container
```
docker-compose up -d      
docker-compose up -d --force-recreate
docker-compose up -d --force-recreate --remove-orphans
docker-compose down
docker-compose down --remove-orphans
```

Stack Management
```
docker stop $(docker ps -aq)
docker rm $(docker ps -aq)
docker rmi --force $(docker images -q)
docker system prune -af --volumes
```


Check Process
```
docker-compose ps
```

Delete Volume
```
docker volume rm mariadb-infra_data
```
## Connect
```
# Connect
----------------------------------------------------------
docker exec -it mysql-db bash
mysql -uroot -ppassword 
```


# Reference
* PHP/Apache Docker Image: https://hub.docker.com/_/php/tags?name=apache

https://github.com/sprintcube/docker-compose-lamp/tree/master
https://medium.com/@mikez_dg/how-to-set-up-a-simple-lamp-server-with-docker-images-in-2023-9b0e24476ec6
https://linuxiac.com/how-to-set-up-lamp-stack-with-docker-compose/
