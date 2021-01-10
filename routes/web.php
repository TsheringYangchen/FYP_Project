<?php
use Illuminate\Support\Facades\Input;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/licenseholders','LicenseHolder@index');
Route::get('/infringment','Infringment@index');
Route::get('/applicants','applicants@index');
Route::get('/providers','providersController@index')->name('providers');
Route::post('providers','providersController@store');
Route::get('/logout','logout@index');
Route::get('/inbox2','inbox2@index');

Route::post('/search',function(){
    $q=Input::get('q');
    if($q!= ''){
           $student=licenseholders::where('id','LIKE','%'.$q.'%')
               -> orWhere('name','LIKE','%'.$q.'%')
               ->orWhere('type','LIKE','%'.$q.'%')
               ->orWhere('degree','LIKE','%'.$q.'%')
            ->get();
           if(count($student)>0)
               return view('home')->withDetails($student)
                   ->withQuery($q);
    }
   return view('home')->withMessage("No Users found");
});