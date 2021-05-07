# Learning-Laravel-API
I've recently started learning back-end web development applications. I'll be using Laravel, a web framework for PHP. As soon as I proceed with my project, I'll upload this repository.
##  **Welcome to the RESTful-API wiki!**

### *REpresentational State Transfer API*
 1. **GET**: Retrieve resources
 1. **POST**: Create resources
 1. **PUT**: Update resources
 1. **DELETE**: Delete resources

* Framework: Laravel 
* Requests: PHP, VScode, Postman, Wamp, GitBash 

## Command lines
   <pre><code> $ composer create-project --prefer-dist laravel/laravel learning </code></pre>
   <pre><code> $ php artisan serve //start server
   Laravel development server started: http://127.0.0.1:8000 </code></pre>
## Migrations
* Upload database and add its credentials to the .env file located in the root of the project.
  * DB_DATABASE = learning
  * DB_USERNAME = root
  * DB_PASSWORD =  <empty>
* Run `$ php artisan make:model Article -m`
* Go to class CreateUsersTable() and add two lines:
  *  `$table->string('title')`
  *  `$table->string('body')`
* Run `$ php artisan migrate`
* Activate XAMPP control Panel and start MYSQL
* Acess: http://localhost/phpmyadmin/
