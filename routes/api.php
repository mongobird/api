<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
 Route::apiResources(['user' => 'API\UserController']);
Route::get('school/name/{id_school}', 'API\SchoolController@getname');
*/
//Публичные маршруты

Route::get('/test', function () {


      return "Ок";
  });


Route::get('test2', 'Test\TestController@test');



Route::get('me', 'User\MeController@getMe');


Route::apiResources(['user' => 'API\UserController']);
// Маршруты для пользователей

Route::group(['middleware' => ['auth:api']], function () {
 
    Route::post('logout', 'Auth\LoginControllerApi@logout');

   

    Route::put('settings/profile', 'User\SettingsController@updateProfile'); 
    Route::put('settings/password',  'User\SettingsController@updatePassword');

});


// Маршруты для гостей

Route::group(['middleware' => ['guest:api']], function () {

Route::post('register', 'Auth\RegisterControllerApi@register');
Route::get('verification/verify/', 'Auth\VerificationControllerApi@verify')->name("verification.verify");
Route::post('verification/resend', 'Auth\VerificationControllerApi@resend');
Route::post('login', 'Auth\LoginControllerApi@login');
Route::post('password/email', 'Auth\ForgotPasswordControllerApi@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordControllerApi@reset');


});

//Работа с общим форумом

//Route::group(['middleware' => ['auth:api']], function () {

Route::apiResource('/category','API\CategoryController');
Route::apiResource('/category/{category}/question','API\QuestionController');
Route::apiResource('/category/{category}/question/{question}/reply','API\ReplyController');
Route::post('/like/{reply}', 'API\LikeController@Likeit');
Route::delete('/like/{reply}', 'API\LikeController@unLikeit');

//});