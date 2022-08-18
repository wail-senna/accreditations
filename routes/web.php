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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/addInitiateur', function () {
    return view('sendTo.ajouter.addInitiateur');
});
Route::post('/addInitiateur', 'AddInitController@create')->name('Initiateur.create');

Route::get('/addCoordonnateur', function () {
    return view('sendTo.ajouter.addCoordonnateur');
});
Route::post('/addCoordonnateur', 'AddCoordonController@create')->name('Coordonnateur.create');

Route::get('/addEnseignant', function () {
    return view('sendTo.ajouter.addEnseignant');
});
Route::post('/addEnseignant', 'EnsController@create')->name('Enseignant.create');

Route::get('/addAccreditation', function () {
    return view('sendTo.ajouter.addAccreditation');
});
Route::post('/addAccreditation', 'AccredController@create')->name('Accreditation.create');


//INITIATEURS
Route::get('/listInitiateurs', 'IniController@index');
Route::get('/listInitiateurs/search', 'IniController@search');
Route::get('/listInitiateurs/delete/{id}', 'IniController@destroy')->name('Initiateur.delete');


//COORDONNATEURS
Route::get('/listCoordonnateurs', 'CoordonController@index');
Route::get('/listCoordonnateurs/search', 'CoordonController@search');
Route::get('/listCoordonnateurs/delete/{id}', 'CoordonController@destroy')->name('Coordonnateur.delete');


//ENSEIGNANTS
Route::get('/listEnseignants', 'EnsController@index');
Route::get('/search', 'EnsController@search');
Route::get('/listEnseignants/delete/{id}', 'EnsController@destroy')->name('Enseignant.delete');


//ACCREDITATIONS
Route::get('/listAccreditations', 'AccredController@index');
Route::get('/listAccreditations/search', 'AccredController@search');

Route::get('/showAccreditation/{id}', 'AccredController@show')->name('Accreditation.show');
Route::get('/showAccreditation/accept/{id}', 'AccredController@accept')->name('Accreditation.accept');
Route::get('/showAccreditation/delete/{id}', 'AccredController@destroy')->name('Accreditation.delete');


Route::get('/calendrier', function () {
    return view('/menu_Links/calendrier');
});
Route::get('/calendrier2', function () {
    return view('/menu_Links/calendrier2');
});

Route::get('/authentification', function () {
    return view('authentification');
});
/*
Route::get('/auth/addInitiateur', function () {
    return view('sendTo.ajouter.addInitiateur');
});
*/
Route::get('/', function () {
    return view('accueil');
});

Route::get('/login', function () {
    $credential = Request::only('username','password');
    if(Auth::attempt($credential)){
        return Redirect::intended('/login');
    }
    return intended('login');
});


Route::get('/logout', function () {
    Auth::logout();
    return view('logout');
});

Route::get('/change-password','Auth\ChangePasswordController@index')->name('password.change');

Route::post('/change-password','Auth\ChangePasswordController@changePassword')->name('password.update');

Route::get('/profile','ProfileController@index')->name('profile.index');

/* Route::get('/view/{is}','GuideController@index')->name('guide.index'); */
/*

Route::get('/memberarea', function () {
    // Only authenticated users may enter...
    return view('memberarea');
})->middleware('auth');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['AdminMiddleware', ['Auth', 'isAdmin']],function(){
    Route::get('/admin', function () {
        return view('sendTo.admin');
    });
});

Route::group(['InitMiddleware', ['Auth', 'isInitiateur']],function(){
    Route::get('/initiateur', function () {
        return view('sendTo.initiateur');
    });
});

Route::group(['CoordonMiddleware', ['Auth', 'isCoordonnateur']],function(){
    Route::get('/coordonnateur', function () {
        return view('sendTo.coordonnateur');
    });
});

//Auth::routes();