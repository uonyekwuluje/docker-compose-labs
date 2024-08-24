# Postgres & PGAdmin Stack
Postgres and PGAdmin stack.

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
docker volume rm docker_pgdata
docker volume rm postgres-infra_db
docker volume rm postgres-infra_pgadmin-data
```
## Connect
```
# Connect
----------------------------------------------------------
docker exec -it postgresdb bash
psql --host localhost --port 5432 --username postgres --dbname postgres
```


## Reference List
* [Docker Postgres Image](https://hub.docker.com/_/postgres/tags)
* [Docker PGAdmin Image](https://hub.docker.com/r/dpage/pgadmin4/tags) 
