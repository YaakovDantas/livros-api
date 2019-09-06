# livros-api
simples api de livros e autos com laravel

Banco de dados
Autores(authors)  e Livros(books)

1 Author tem N Livros

----------------------------------------------------------------------
Seguir os passos abaixo para executar o projeto
----------------------------------------------------------------------
Executar:
```bash
path/to/project$  composer update
```
Criar um arquivo .env, na raiz do projeto.

Escreva no seu arquivo .env
```bash
APP_KEY=
APP_NAME=Laravel
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost
LOG_CHANNEL=stack
DB_CONNECTION=sqlite
```
Depois
Executar:
```bash
path/to/project$  php artisan key:generate
```

Em seguida crie um arquivo chamado "database.sqlite", na raiz da da pasta "database"

Depois execute

```bash
path/to/project$  php artisan migrate
path/to/project$  php artisan db:seed
path/to/project$  php artisan serve
```
## Projeto deverá executar novamalmente em localhost:8000.

----------------------------------------------------------------------
API foi criada com [Fractal](https://github.com/spatie/laravel-fractal)
----------------------------------------------------------------------


# Rotas:
----------------------------------------------------------------------
## AUTORES
----------------------------------------------------------------------

get /api/authors > Lista todos os autores

get /api/authors?include=books > Lista todos os autores e seus livros

get /api/authors/{id} > detalhe de um autor

get /api/authors/{id}?include=books > detalhe de um autor e todos seus livros

post /api/authors > cadastra um autor
  params
    key 'name',  nome do autor, required|min:3
  return
    autor criado

put /api/authors/{id} > atualiza um author
  params
    key 'name',  nome do autor, required|min:3
  return
    lista de todos os outros autores

delete /api/authors/{id} > deleta um autor
  return
    lista de todos os outros autores

----------------------------------------------------------------------
## LIVROS
----------------------------------------------------------------------

get /api/books > Lista todos os livros

get /api/books/{id} > detalhe de um livro

post /api/books > cadastra um livro
  params
    key 'name',  nome do livro, required|min:10|max:40
    key 'value',  valor do livro, required|numeric
    key 'author_id',  id do autor do livro, required
  return
    livro criado

put /api/books/{id} > atualiza um livro
  params
    key 'name',  nome do livro, required|min:10|max:40
    key 'value',  valor do livro, required|numeric
    key 'author_id',  id do autor do livro, required
  return
    lista de todos os outros livros

delete /api/books/{id} > deleta um livro
  return
    lista de todos os outros livros

----------------------------------------------------------------------
PHP UNIT
----------------------------------------------------------------------

Para rodar os testes, execute.

```bash
path/to/project$  vendor/bin/phpunit
```
