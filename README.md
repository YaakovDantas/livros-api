# livros-api
simples api de livros e autos com laravel

Banco de dados
Autores(authors)  e Livros(books)

1 Autor tem N Livros

Autor hasMany Livros
Livros belongsTo Autor

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

**GET** /api/authors > Lista todos os autores

**GET** /api/authors?include=books > Lista todos os autores e seus livros

**GET** /api/authors/{id} > detalhe de um autor

**GET** /api/authors/{id}?include=books > detalhe de um autor e todos seus livros

**POST** /api/authors > cadastra um autor\
&nbsp;&nbsp;&nbsp;&nbsp;params\
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key 'name',  nome do autor, required|min:3\
&nbsp;&nbsp;&nbsp;&nbsp;return\
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;autor criado\

**PUT** /api/authors/{id} > atualiza um author\
  &nbsp;&nbsp;&nbsp;&nbsp;params\
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key 'name',  nome do autor, required|min:3\
  &nbsp;&nbsp;&nbsp;&nbsp;return\
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lista de todos os outros autores\

**DELETE** /api/authors/{id} > deleta um autor\
  &nbsp;&nbsp;&nbsp;&nbsp;return\
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lista de todos os outros autores\

----------------------------------------------------------------------
## LIVROS
----------------------------------------------------------------------

**GET** /api/books > Lista todos os livros

**GET** /api/books/{id} > detalhe de um livro

**POST** /api/books > cadastra um livro\
  &nbsp;&nbsp;&nbsp;&nbsp;params\
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key 'name',  nome do livro, required|min:10|max:40\
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key 'value',  valor do livro, required|numeric\
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key 'author_id',  id do autor do livro, required\
  &nbsp;&nbsp;&nbsp;&nbsp;return\
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;livro criado\

**PUT** /api/books/{id} > atualiza um livro\
 &nbsp;&nbsp;&nbsp;&nbsp; params\
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  key 'name',  nome do livro, required|min:10|max:40\
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   key 'value',  valor do livro, required|numeric\
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; key 'author_id',  id do autor do livro, required\
 &nbsp;&nbsp;&nbsp;&nbsp; return\
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  lista de todos os outros livros\

**DELETE** /api/books/{id} > deleta um livro\
 &nbsp;&nbsp;&nbsp;&nbsp; return\
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  lista de todos os outros livros\

----------------------------------------------------------------------
PHP UNIT
----------------------------------------------------------------------

Para rodar os testes, execute.

```bash
path/to/project$  vendor/bin/phpunit
```
