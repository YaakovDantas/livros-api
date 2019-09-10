# LIVROS-API

This API was developed for the purpose of providing information for the [Livros-app](https://github.com/yaakovdantas/livros-app)

## Dependencies

- PHP >= 7.2.22
- SQLITE3
- [Laravel 5.7 dependencies](https://laravel.com/docs/5.7/installation)
- Composer >= 1.8.5

### Installing
 
Clone and navigate to the root folder of this project

OS X & Linux:

```
composer install
```
* Create a database.sqlite on the root of the database folder
```
cp .env.example .env
```
Open the .env and set the database settings in the following fields:
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

JWT_KEY=a_very_secret_key

LOG_CHANNEL=stack

DB_CONNECTION=sqlite
```
```
sudo php artisan key:generate
```
```
php artisan migrate:refresh --seed
```

If you want to run this project in production, open .env and set the values for the following fields:
```
APP_ENV = production
APP_DEBUG = false 
```

### Running

```
php artisan serve
```

### User guide
* **User registration**

Before taking any action in the API, it is necessary to have a registered user. To create one, just send a POST request to the endpoint **/api/register** with the following structure:

```json
{
	"email": "email@example.com",
	"password": "password123",

}
```

The expected response if the user is successfully registered is like that.
```json
{
    "email": "email@example.com"",
    "updated_at": "2019-09-10 02:54:23",
    "created_at": "2019-09-10 02:54:23",
    "id": 5
}

```
* **User Login**

After create an account, send a POST request to the end point **/api/login** with the following structure:

```json
{
	"email": "email@example.com",
	"password": "password123"
}
```
If is an user valid the return it will be like this.

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6InRlc3RlMzRAZ21haWwuY29tIn0.UcGHQuxj5nJWBeJBKKGaw4Y2TfnbcFhQPxgpiLgMiW0"
}
```

The JWT used is Bearer token.

```json
{
    "token" "<Bearer Token>":
}
```


To perform actions on the API it is necessary that the user is authenticated. To do this, simply send a POST request to the **/api/login** endpoint with the following structure:
The expected response if the user authenticates successfully, is an authentication token with the following structure:
```json
{
	"email": "email@example.com",
	"password": "password123"
}
```


```json
{
    "token" "<Bearer Token>":
}
```

***Note: To perform any of the following actions, the authentication token must be defined in the request header:***

```json
Authorization: Bearer <Token>
```

* **Author register**

To register a new author in the database, just send a POST request to the **/api/authors** endpoint with the following structure:

```json
{
	"name": "Name"
}
```

* **Get authors**

To get the authors registered, simply send a GET request to one of the following endpoints:

```
/api/authors - Return all registered authors
/api/authors/{id} - Returns the author that has the given id
```

* **Get authors books** 

To get the books of a registered author, simply send a GET request to the following endpoit:

```
/api/authors/{id}/?include=books
```

* **Update author** 

To update the data of an author, simply send a PUT request to the endpoint **/api/authors/{id}**, where possible any of the fields in the structure below:

```json
{
	"name": "Name",
}
```

* **Delete an author**

To delete an author, simply send a DELETE request to the following endpoint:
```
/api/authors/{id}
```

* **Register a new book for an author**

To register a new book for an author, just send a POST request to the endpoint **/api/books** with the following structure:

```json
{

    "author_id": <author Id>,
    "name": "Name",
    "value": 99,99
}
```

* **Get details of an book**

To get details of an book, simply send a GET request to the following endpoint:

```
/api/books/{id}
```

* **Delete an book**

To delete an book, simply send a DELETE request to the following endpoint:

```
/api/books/{id}
```


## Built With

* [Laravel](https://laravel.com/) - Serve-side framework used
* [Composer](https://getcomposer.org/) - Dependency manager for PHP