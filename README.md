# Final Exam Preparation Repository
** **
## Initial Configuration
This application requires composer and laravel pre-installed in the computer in order for it to work. The following link provides the guide on how to set up Laravel for the first time.

Composer installation -
https://getcomposer.org/doc/00-intro.md

Laravel installation for version 8.x - 
https://laravel.com/docs/8.x/installation

### Steps to run the application:
1. Import `classicmodels.sql` to PhpMyAdmin. This file is available in the project directory when it is cloned from this repository.

2. In order for the database to properly work, please kindly configure the `.env` file first. The following information needs to be adjusted according to your PhpMyAdmin database parameters:
> `DB_PORT=`   
> `DB_DATABASE=`  
> `DB_USERNAME=`  
> `DB_PASSWORD=`  

3. Utilizing the terminal, please move to the project's directory and run `php artisan serve`. Alternatively, this can be done using the IDE's terminal.

4. Access the application by accessing `http://127.0.0.1` followed by `:` and your laravel's `port` number. As an example: `http://127.0.0.1/8000`. 

5. Simply create an account or use the following credentials to access store management features:
> `email` :  `elfo@domain.com`
> `password` : `finalexam`

## Requirements Fullfilment

### 1. Develop the requested amarketplace website for resellers and buyers using HTML5,CSS3, Javascript and PHP with some frameworks, like bootstrap and Laravel.
> This repository utilizes only bootstrap and laravel frameworks.
### 2. Use proper methods of object-oriented web development
> Since laravel is OOP oriented at its core, Database access is only used by the Eloquents (Models) object heavily. Whenever possible, raw DB queries feature of laravel e.g. `DB::query(...)->get()` is not used. All access to database is intended to be implemented completely with Eloquents model to gain full benefit of Laravel framework.

### 3. Implement Model-View-Controller (MVC) design pattern for this marketplace web development
> Since Laravel main feature is to offer MVC, appropriate Models, Views and Controllers are implemented for this project.
Please kindly check these directories for:
    + Models : `/app/Models/`
    + Controllers : `app/Http/Controllers/`
    + Views : `app/resources/views/`
    
### 4. Utilize at least Orders, Products, and Customers tables of the classic model database in MySQL database to be connected to your web application through mysqli or PDO API
> Laravel uses PDO for all its queries. Please kindly verify this information in: https://laravel.com/docs/8.x/database, in 'Using Multiple Database Connections' where a raw PDO instance can be accessed with the following code:
`$pdo = DB::connection()->getPdo();

### 5. Manage product image files to be stored and retrieved into/from a server directory or in database.
> To fulfill this requirement, a demonstration of implementation of a simple image upload for profile pictore is done. Please refer to the following commit for related files for such features.
https://github.com/fradvocatus/awp-final-exam/commit/6cc9775185da997351f0618535d1c9df159bc180

### 6. Add capabilities for CRUD: create a new record, read the existing data using keyword filtering, update and delete a particular record as well as for shopping cart
> To fulfill this requirement, a complete CRUD for customers, orders, and products is implemented for the store admin.

### 7. Insert search facility to look up some products based on a certain keyword.
> This requirement is fulfilled by the search feature that is available on the navigation bar of the web application.

### 8. Manage sessions with some required storage.
> The simplest form of session implemented in this project is the `remember_token` user data dimension that is available in `user` table of the database. The eloquent (model) of `user` uses this token to verify whether the user is logged in or not during a session.

### 9. Handle user login authentication and security management
> Store administrators require login since they have many ability that buyer doenst have. As such, in order to access products, orders and customers management features, a secure login is required.

### 10. Employ some techniques of user input validations and error handling.
> Each form on seller's side (product, order, and customer creation and updates) triggers a `request()->validate([...])` function in the controller. A great example of this implementation can be found inside `$validateInputs(bool $edit)` function in `\App\Http\Controllers\ProductController.php`.

### 11. Supplement your marketplace website with good layout, tables, images, form with good component functionalities, such as radio button tab selection, tooltips, button, input text fields, and others.
> The web application as a solution to this final exam utilizies a simplified user interface that take advantage of bootstrap elements (e.g. tables, dropdowns, input text fields) whenever possible. This is apparent for every creation of Products, Customers, and Orders.

