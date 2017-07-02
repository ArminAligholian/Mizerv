<?php
use Illuminate\Support\Facades\Route;
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

/* routes for pages*/
\Illuminate\Support\Facades\Route::get('/','PageController@gethome');
\Illuminate\Support\Facades\Route::get('/home', 'PageController@getindex')->name('home');
\Illuminate\Support\Facades\Route::get('/myprofile','PageController@getprofile')->name('myprofile');
\Illuminate\Support\Facades\Route::get('/test','PageController@gettest')->name('test');

/* routes for authentication */
\Illuminate\Support\Facades\Auth::routes();

/* routes for profile */
\Illuminate\Support\Facades\Route::resource('users','ProfileController');

<<<<<<< HEAD

/* routes for restaurants edit*/
=======
/* routes for restaurants */
>>>>>>> 719988a9603130c155907085548a2978cdddbcf1
\Illuminate\Support\Facades\Route::resource('restaurants','RestaurantsController');

/* routes for Categories  */
\Illuminate\Support\Facades\Route::resource('categories','CategoriesController');
<<<<<<< HEAD
=======

/* routes for areas */
\Illuminate\Support\Facades\Route::resource('areas','AreaController');



>>>>>>> 719988a9603130c155907085548a2978cdddbcf1
