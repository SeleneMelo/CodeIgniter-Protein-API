##  **Welcome to Laravel RESTful-API Learning!**

## *Pre-requisitos*
 1. Download PHP;
 2. Download Composer or Artisan; //gerenciador de dependências
 3. Install frameworks (Laravel, CodeIgniter)

### *Representational State Transfer API*
 1. **GET**: Retrieve resources
 1. **POST**: Create resources
 1. **PUT**: Update resources
 1. **DELETE**: Delete resources

* Framework: Laravel or CodeIgniter 
* Requests: PHP, VScode, Postman, Wamp, GitBash 
* Dependency manager: Artisan or Composer

## Command lines to start server:
   <pre><code> $ composer create-project --prefer-dist laravel/laravel learning </code></pre>
   <pre><code> $ php artisan serve //start server</code></pre>
   <pre><code>Laravel development server started pointed to: http://127.0.0.1:8000 </code></pre>
   Or, using CodeIgniter4:
   <pre><code> $ composer create-project codeigniter4/appstarter</code></pre>
   <pre><code> $ cd meusite/spark
 $ php spark serve</code></pre>
   <pre><code> CodeIgniter development server started pointed to: http://localhost:8080</code></pre>
  
   * O arquivo Spark é o gerenciador (script php) que gerencia o servidor web;

## Start building:
 ## * Setting development mode
   1. *env* is a file that contains server-specific settings. Start by renaming it to *.env*
   2. Uncomment the line with CI_ENVIROMENT and change production to development
   3. A controller is a class that reads information from the *request* object and creates and return a *reponse* object, which could be a HTML page, JSON, XML, a file download, a redirect link or a 404 error. *The controller runs whatever arbitrary logic your application needs to render the content of a page.*
   4. The controller will become the center of every request to your web application
   5. We refer to a controller with $this
   6. We have made the controller. The next thing is to set routing rules. Routing associates a URI with a controller’s method.
   
 ## Blast
  1. run nblast 
 
 ## * Running development server
  1. Inside of your site file, start server and go to the localhost page;
  2. If you would like to edit your page you will find it located at:
  <pre><code> app/Views/welcome_message.php </code></pre>
  3. The corresponding controller for this page can be found at:
  <pre><code> app/Controllers/Home.php </code></pre>
 
 
 
 
 
 
 
 
 

## A look into PHP
 1. PHP is a hypertext language used especially suited for web development and can be embbeded into HTML;
 2. PHP code is enclosed with special start and end processing instructions *<? php ?>* and executed on the server, generating a plain HTML that is then send to the client;
 3. Uses CSS and JavaScript for creating pages and edting styles;
 4. Primarily, we're going to focus on 
    1. Model-View-Controller Architecture
    2. Routing basics
    3. Form validation
    4. Performing database queries
## Migrations
* Upload database (extensions must be .php) and add its credentials to the .env file located in the root of the project.
  * DB_DATABASE = learning
  * DB_USERNAME = root
  * DB_PASSWORD = empty
* Run `$ php artisan make:model Article -m`
* Go to class CreateUsersTable() and add two lines:
  *  `$table->string('title')`
  *  `$table->string('body')`
* Run `$ php artisan migrate` (once migrated, the database are full)
* Activate XAMPP control Panel and start MYSQL
* Go to app/Providers/AppServiceProvider and on:<pre><code>public function boot():</code></pre>add:
  <pre><code>Schema::defaultStringLength(199)</code></pre>
* Add the library:<pre><code>use Illuminate\Support\Facades\Schema;</code></pre>
* Acess: http://localhost/phpmyadmin/
* Run:`$ php artisan make:controller Country\CountryController`
* Go to: Routes/api.php/ and add
`Route::get('country', [CountryController::class, 'country']);`
* Go to: `app\http\Controllers\CountryCountryController.php` and add:
`public function country(){ //here. we need a model.` Let's create:
* Run: `$ php artisan make:model Models\CountryModel`
* Go to: `ModelsCountryModel.php` and add the structure informations of the class _z_country. You can find the collumn informations on phpmyadmin
`protected $table = '_z_country';
    protected $fillable = [
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'created',
        'register_by',
        'modified',
        'modified_by',
        'record_deleted'
    ];`
* Go back to `app\http\Controllers\CountryCountryController.php` , add the library `use App\Models\CountryModel;` and fill the new function that we've just created with:
`public function country(){
        return response()->json(CountryModel::get(), 200);
    }`
* Start the server. Go to the localhost url and type: http://127.0.0.1:8000/api/country
    
