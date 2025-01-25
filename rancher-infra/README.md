# Rancher
Rancher Stack.

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
docker volume rm rancher-data
docker volume rm $(docker volume ls -q)
```

## Reference List
* [Rancher Docker Image](https://hub.docker.com/r/rancher/rancher/tags?name=2.11.)
