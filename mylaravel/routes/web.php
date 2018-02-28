<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// default
Route::get('/', function () {
    return view('welcome');
});

// simple routing
Route::get("/admin",function (){
    return "Welecome Admin ";
});

// call controler
Route::get("/admincnt","adminController@index");


// pass paramiter
Route::get("/login/{uname}","adminController@login");

// PASS MULTIPLE PARAMITER
Route::get("/login2/{uname}/{pass}","adminController@login2");

// validation
Route::get("num_val/{number}","adminController@numval")->where(['number' =>"[0-9]+"]);

// get current URI

Route::get("/curl",function (){
    echo url('');
});

// Any
/*
 * get any kind of request
 * 1) GET
 * 2) POST
 * 3) DELETE
 * 4) PATCH
 * 5) PUT
  */

Route ::any("/any",function (){
    echo  "This is any kind of method";
});


// Match
/*
 * Mtch Specific Routing
 */
Route::match(['get','post'],'match',function (){
    echo "Only Get & Post is Accept";
});

// get view
Route::get("/home",function (){
    return view('home');
});

// pass data to the view
Route::get("/display",function (){
     $data=['A','B','C','D'];
    return view('display',compact('data'));
});


Route::resource('student','StudentController');
// REMOVE  PUBLIC FROM URI
/*
 * 1) CUT THE .HTACCESS FILE FROM PUBLIC FOLDER & PEST THE ROOT DIRECTORY
 * 2) RENAME THE SERVER.PHP TO INDEX.PHP
 */


// MIDDELWARE
/*
 * => MIDDELWARE IS MIODDEL THING OF LARAVE; & OUR CODE
 * => IT RUN AT MIDDELS LARAVEL & OUR ROUTS
 *
 * ===  CREATE MIDELWARE ====
 * == WAY 1 ==
 * 1) CREATE NEW FILE IN APP/HTTP/MIDDELWARE
 *
 * == WAY 2 ==
 * 1) GOT TO THE YOUR PROJECT FOLDER USING CMD
 * 2) WRITE THE COMMAND `PHP ARTISAN MAKE:MIDDELWARE  MIDDELWARE_NAME`
 * 3) REGISTER YOUR MIDDELWARE AT APP/HTTP/KERNEL.PHP
 *
 * 1)middelware -> it is call on every request
 * 2)middelware groups
 * 3)routemiddelware -> it is call on spacific url
 * 4) see entry in storage/logs/laravel.log
 */


Route::get("/mycontroller","mycontroller@dashboard");

/*
 * Task : Learn Node Js
 * Work : Session Login & Logout
 */


// CRUD OPERATION
/*
 * 1) Create DataBase in phpmyadmin
 * 2) add database configuration in .env file
 * 3) create studan_model `php artisan make:model student -m`
 * 4) migrate or create table in app/database/migrations/create_student_table.php
 * 5) write command    `php artisan migrate` to create table in mysql
 * 6) if any error then write following code in app/Providers/AppServiceProvider.php
 *    use Illuminate\Support\Facades\Schema;
        public function boot()
        {
            Schema::defaultStringLength(191);
        }
 * 7)   php artisan maigrate:fresh
 * 8) create new view master.blade.php
 * 9) create new folder student
 * 10) create new file inside folder create.blade.php
 * 11) create new controller using following cmd
 *    ` php artisan make:controller StudentController -- resource `
 * 12) return view in create function
 * 13) write a command ` php artisan serve `
 * 14) run on browser ` http://localhost/shubham/mylaravel/student/create `
 */