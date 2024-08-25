# Mongo & Mongo-Express Stack
Mongo and Mongo-Express stack.

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
docker volume ls
DRIVER    VOLUME NAME
local     MONGO_CONFIG
local     MONGO_DATA

docker volume rm MONGO_CONFIG MONGO_DATA
MONGO_CONFIG
MONGO_DATA
```
## Connect
```
# Connect
----------------------------------------------------------
docker exec -it mongo /bin/bash
mongosh
```
Configure
```
use admin
db.auth("admin", "admin")
show dbs
```
UI
```
http://localhost:8081/
username: admin
password: pass
```



## Reference List
* [Docker Mongodb Image](https://hub.docker.com/_/mongo/tags)
* [Docker Mongo Express Image](https://hub.docker.com/_/mongo-express/tags) 
