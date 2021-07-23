<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@index')->name('site.index');
    Route::get('/home', 'SiteController@index')->name('site.index');
    Route::get('/sobre', 'SiteController@about')->name('site.about');
    Route::get('/servicos', 'SiteController@services')->name('site.services');
    Route::get('/trabalhos-realizados', 'SiteController@portfolio')->name('site.portfolio');
    Route::get('/trabalhos-realizados/{any}', 'SiteController@work')->name('site.work');
    Route::get('/artigos', 'SiteController@articles')->name('site.articles');
    Route::get('/artigos/{any}', 'SiteController@article')->name('site.article');
    Route::get('/contato', 'SiteController@contact')->name('site.contact');
    Route::get('/termo-de-uso', 'SiteController@term')->name('site.term');
    Route::get('/politica-de-privacidade', 'SiteController@politics')->name('site.politics');
});
    Route::post('/enviar-email', 'Admin\EmailController@store')->name('email.store');
    Route::post('/newsletter', 'Admin\SubscriberController@store')->name('subscriber.store');
Auth::routes(); 
/*Rotas Painel*/
/*Middleware RegisterLogging registra toda navegação do usuário*/
Route::group(['namespace' => 'Admin','middleware' => ['auth','RegisterLogging']], function () {
    Route::get('/painel-admin', 'HomeController@index')->name('admin.home');
    Route::get('/configuracoes','ConfigController@index')->name('admin.config.index')->middleware('AccessLevel:1');
    Route::post('/configuracoes/{config}','ConfigController@update')->name('config.update')->middleware('AccessLevel:1');
    Route::post('/uploads','UploadController@upload')->name('uploads');

    Route::resource('/usuarios','UserController')->names('user')->parameters(['usuarios' => 'user'])->middleware('AccessLevel:10');
    Route::resource('/parceiros','PartnerController')->names('partner')->parameters(['parceiros' => 'partner'])->middleware('AccessLevel:10');
    Route::resource('/midias-sociais','SocialMediaController')->names('socialMedia')->parameters(['midias-sociais' => 'socialMedia'])->middleware('AccessLevel:10');
    Route::resource('/emails','EmailController')->names('email')->parameters(['emails' => 'email'])->middleware('AccessLevel:10');
    Route::resource('/assinantes','SubscriberController')->names('subscriber')->parameters(['assinantes' => 'subscriber'])->middleware('AccessLevel:10');
    Route::post('/send-response/{email}','EmailController@response')->name('email.response')->middleware('AccessLevel:10');
    Route::resource('/noticias','ArticleController')->names('article')->parameters(['noticias' => 'article'])->middleware('AccessLevel:10');
    Route::resource('/portfolio','PortfolioController')->names('portfolio')->parameters(['portfolio' => 'portfolio'])->middleware('AccessLevel:10');
    Route::resource('/views','ViewController')->names('view')->parameters(['views' => 'view'])->middleware('AccessLevel:10');
});
Route::group(['namespace' => 'Admin','middleware' => ['auth','RegisterLogging']], function () {
    /*Graficos */
    Route::get('/charts/first','ChartsController@first')->name('charts.first')->middleware('AccessLevel:10');
    Route::get('/charts/second','ChartsController@second')->name('charts.second')->middleware('AccessLevel:10');
    Route::get('/charts/third','ChartsController@third')->name('charts.third')->middleware('AccessLevel:10');
    Route::get('/charts/four','ChartsController@four')->name('charts.four')->middleware('AccessLevel:10');
});
