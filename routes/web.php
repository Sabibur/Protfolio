<?php


Route::get('/', 'PageController@index');
Route::post('/message/post', 'PageController@messagepost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Controller

//header section
Route::get('/header', 'HomeController@header');
Route::get('/header/edit', 'HomeController@headerEdit');
Route::post('/header/edit/insert', 'HomeController@headerEditInsert');

//about Section
Route::get('/about', 'HomeController@about');
Route::get('/about/edit', 'HomeController@aboutEdit');
Route::post('/about/edit/insert', 'HomeController@aboutEditInsert');

//resume section
//Education
Route::get('/education', 'HomeController@education');
Route::get('/education/add', 'HomeController@educationAdd');
Route::post('/education/add/post', 'HomeController@educationAddPost');
Route::get('/education/edit/{edu_id}', 'HomeController@educationEdit');
Route::post('/education/edit/post', 'HomeController@educationEditPost');
Route::get('/education/delete/{edu_id}', 'HomeController@educationDelete');

//Employment
Route::get('/employment', 'HomeController@employment');
Route::get('/employment/add', 'HomeController@employmentAdd');
Route::post('/employment/add/post', 'HomeController@employmentAddPost');
Route::get('/employment/edit/{emp_id}', 'HomeController@employmentEdit');
Route::post('/employment/edit/post', 'HomeController@employmentEditPost');
Route::get('/employment/delete/{emp_id}', 'HomeController@employmentDelete');

Route::get('/skill', 'HomeController@skill');
Route::get('add/skill', 'HomeController@addskill');
Route::post('add/skill/post', 'HomeController@addskillpost');
Route::get('/skill/delete/{skill_id}', 'HomeController@skillDelete');
Route::get('/skill/edit/{skill_id}', 'HomeController@skillEdit');
Route::post('/skill/edit/post', 'HomeController@skillEditPost');

//Protfolio
Route::get('/protfolio/view', 'HomeController@protfolioview');
Route::get('/add/protfolio', 'HomeController@addprotfolio');
Route::post('/protfolio/add/post', 'HomeController@addprotfoliopost');
Route::get('/protfolio/delete/{protfolio_id}', 'HomeController@protfolioDelete');
Route::get('/protfolio/edit/{protfolio_id}', 'HomeController@protfolioEdit');
Route::post('/protfolio/edit/post', 'HomeController@protfolioEditPost');


//Social Link
Route::get('/social/view', 'HomeController@socialview');
Route::get('/add/social', 'HomeController@addsocial');
Route::post('/social/add/post', 'HomeController@addsocialpost');
Route::get('/social/delete/{social_id}', 'HomeController@socialDelete');
Route::get('/social/edit/{social_id}', 'HomeController@socialEdit');
Route::post('/social/edit/post', 'HomeController@socialEditPost');

//messeges
Route::get('/message', 'HomeController@message');
Route::get('/message/delete/{msg_id}', 'HomeController@messagedelete');


