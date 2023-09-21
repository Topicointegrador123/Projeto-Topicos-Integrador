# projeto do curso de desenvolvimento de sistemas para a COP-30

# Setup Docker Para Projetos Laravel (8, 9 ou 10)
ao abrir a primeira vez o projeto, é importante observar e configurar o .env e após, docker compose up -d para subir os containers, depois entrar no container app e executar o composer install.

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/icacaro/ic_coderepo.git
```

Clone os Arquivos do Laravel (opicional)
```sh
git clone https://github.com/laravel/laravel.git app-laravel
```
```

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="nome do projeto"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec <nome do container> bash (ou sh)
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel (caso seja um novo projeto)
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost:8989](http://localhost:8989)
