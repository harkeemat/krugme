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
///------Front Krug Search------///
 Route::get('/', function(){
  return view('search/search/search');
 });

Route::get('advancesearch', function(){
  return view('search/search/AdvanceSearch');
 });

Route::get('test', function(){
  return view('includes.main');
 });
///------End Krug Search------///

Auth::routes();

///------Login With Facebook------///
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
///------ end Login With Facebook------///

Route::get('/dashboard', 'HomeController@index');
Route::post('filter_demo', 'HomeController@filter');
Route::get('qualification_form', 'Qualification\QualificationController@index');
Route::get('edit_profile', 'Qualification\QualificationController@edit_profile');
Route::post('save_profile', 'Qualification\QualificationController@save_profile');
Route::post('update_profile', 'Qualification\QualificationController@save_profile');
Route::get('get_state/{country}', 'Qualification\QualificationController@state');
Route::get('get_city', 'Qualification\QualificationController@city');



///------Start Admin Routes------///
Route::group(['prefix' => 'admin'], function () {

  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('admin.loginform');
  Route::post('/login', 'AdminAuth\LoginController@login')->name('admin.login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('admin.logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('admin.registerform');
  Route::post('/register', 'AdminAuth\RegisterController@register')->name('admin.register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('admin.forgot');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('admin.reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('admin.resetlink');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('admin.resetform');

  Route::get('users', 'Admin\UsersController@index');
  Route::get('organisation', 'Admin\OrganisationController@index');
});
///------End Admin Routes------///



///------Frienships------///
Route::get('dashboard', 'HomeController@index');
Route::get('kruglist/{id}', 'HomeController@friendship');
Route::get('error', 'HomeController@error');
Route::get('profile', 'Friendship\friendController@profile');
Route::get('account_setting', 'Friendship\friendController@account_setting');
Route::get('kruglist', 'Friendship\friendController@kruglist');
Route::get('friend_kruglist/{id}', 'Friendship\friendController@friend_kruglist');
Route::get('outerkrug', 'Friendship\friendController@index');
Route::get('accept/{id}', 'Friendship\friendController@acceptrequest');
Route::get('deny/{id}', 'Friendship\friendController@denyrequest');
Route::get('remove/{id}', 'Friendship\friendController@unfriend');
Route::get('fprofile/{id}', 'Friendship\friendController@friendprofile');
Route::get('reject/{id}', 'Friendship\friendController@deleteRequest');
Route::get('block/{id}', 'HomeController@blockFriend');
Route::get('unblock/{id}', 'HomeController@unblockFriend');
Route::get('mutualfriend/{id}', 'Friendship\friendController@mutualFriend');
Route::get('messages', 'Friendship\friendController@messages');
Route::get('messages/{id}', 'Friendship\friendController@user_messages');

Route::post('messages/{id}', 'Friendship\friendController@send_message');

Route::get('fprofile/{id}/rating/{rating}', 'Friendship\friendController@rating');
Route::get('group_profile/{id}/group_rating/{rating}', 'Friendship\friendController@group_rating');

Route::get('allmember/{group_id}/member/{id}/group_rate_user/{rating}', 'Friendship\friendController@group_rate_user');

///------ End Frienships------///

///------Friendships Group------///
Route::get('group_register', 'Friendship\friendController@showgroupregistrationform');
Route::post('add_group', 'Friendship\friendController@groupregistration');
Route::get('krug_group', 'Friendship\friendController@group');
Route::get('add_member/{id}', 'Friendship\friendController@addmember');
Route::get('member/{id}/group/{group_id}', 'Friendship\friendController@addfriend');
Route::get('mutualmember/{id}', 'Friendship\friendController@mutualMember');
Route::get('ungroup_member/{id}/group/{group_id}', 'Friendship\friendController@ungroupmember');
Route::get('group_profile/{id}', 'Friendship\friendController@group_profile');
Route::get('group_request', 'Friendship\friendController@group_request');
Route::get('acceptgroup/{id}', 'Friendship\friendController@acceptgrouprequest');
Route::get('denygroup/{id}', 'Friendship\friendController@denygrouprequest');
Route::get('leaveGroup/{id}', 'Friendship\friendController@leaveGroup');
Route::get('allmember/{id}', 'Friendship\friendController@getAllGroupMember');
Route::get('getgroups', 'Friendship\friendController@getGroups');
Route::get('getfriendGroups/{id}', 'Friendship\friendController@getFriendGroups');
 

 
///------End Friendships Group------///
