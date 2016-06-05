<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
Route::get('/', function () {
    return view('home');
});
*/

/*Admin Route*/

Route::group(['middleware'=>['admin','web']],function(){

	Route::get('/adminpanel','adminController@index');

	Route::get('/adminpanel/view_add_user','adminController@showFormAddUsers');

	Route::resource('/adminpanel/add_user','adminController');

	Route::get('/adminpanel/view_edit_user/{id}','adminController@showFormEditUsers');

	Route::resource('/adminpanel/user_update','adminController');

	Route::get('/adminpanel/user_delete/{id}',
        array('as'=>'deleteuser','uses'=>'adminController@destroy'));
	
	Route::get('/adminpanel/main_setting','main_settingController@index');
	Route::post('/adminpanel/update/main_setting','main_settingController@store');

	



});
	


/*Admin Route*/








Route::auth();



Route::resource('/thing','thingController@addThing');

Route::post('add_thing','thingController@store');

Route::get('/things{id}','userController@show');
Route::get('/thing/update_view/{id}','thingController@showFormUpdate');
Route::resource('/thing/edit','thingController');

Route::get('/neighbors{id}','neighborsController@getNeighbors');
Route::get('/', 'HomeController@index');


Route::post('/make_offer/{id}','requestController@store');
//Route::delete('/delete_thing/{id}','thingController@destroy');

Route::get('/delete_thing/{id}',
        array('as'=>'deletething','uses'=>'thingController@destroy'));

Route::get('/get_thing/{id}/{pic}/{owner}/{name}/{owner_name}','requestController@saveVars');
Route::get('/requests{id}','userController@showRequests');
Route::get('/show_details/{id}/{pic}/{owner}/{name}/{desc}/{owner_name}','thingController@saveVarsDetails');

Route::get('/view/neighbor/things/{id}','neighborsController@viewNeighborThings');

Route::get('/notification/view','notificationController@getNotification');
Route::get('/notification_replay/view','notificationController@getNotificationReply');

Route::get('/notification/view/owner/replay/{needer_name}/{needer_id}/{offer}/{pic}/{thing_id}','notificationController@saveOwnerReplay');

Route::post('/notification/store','notificationController@store');

Route::get('/delete_notification/{id}',
        array('as'=>'deletenotifi','uses'=>'notificationController@deleteNotification'));

Route::get('/delete_notification_replay/{id}',
        array('as'=>'deletenotifi','uses'=>'notificationController@deleteNotificationReplay'));


Route::patch('/change/profile{id}','userController@update');


//Route::get('/{id}','requestController@showFormOffer');


Route::get('/delete_request/{id}',
        array('as'=>'deleterequest','uses'=>'requestController@deleteRequest'));


Route::get('/update_request/{id}','requestController@saveMsgToOwner');

Route::patch('/save_request_updated/{id}','requestController@update');

Route::auth();

Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@index');
Route::get('/redirect', 'Auth\AuthController@redirectToProvider');

Route::get('/callback', 'Auth\AuthController@callback');














