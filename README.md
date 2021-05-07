##  **Welcome to Laravel RESTful-API Learning!**

### *REpresentational State Transfer API*
 1. **GET**: Retrieve resources
 1. **POST**: Create resources
 1. **PUT**: Update resources
 1. **DELETE**: Delete resources

* Framework: Laravel 
* Requests: PHP, VScode, Postman, Wamp, GitBash 

## Command lines to start server:
   <pre><code> $ composer create-project --prefer-dist laravel/laravel learning </code></pre>
   <pre><code> $ php artisan serve //start server
   Laravel development server started: http://127.0.0.1:8000 </code></pre>
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
`Route::get('country', 'Country\CountryController@country');`
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
    
