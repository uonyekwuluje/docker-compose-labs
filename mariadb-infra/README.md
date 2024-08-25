# Mariadb & PhpMyadmin Stack
Mariadb & PhpMyadmin stack.

## Docker Commands
Start and tear down container
```
docker-compose up -d      
docker-compose up -d --force-recreate
docker-compose up -d --force-recreate --remove-orphans
docker-compose down
docker-compose down --remove-orphans
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
docker exec -it mariadb bash
mysql -uroot -ppassword mariadb
```
