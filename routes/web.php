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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Questions
Route::get('/questions', 'QuestionsController@index')->name('questions.index');
Route::post('/questions', 'QuestionsController@store')->name('questions.store');
Route::get('/questions/create', 'QuestionsController@create')->name('questions.create');
Route::get('/questions/{question}', 'QuestionsController@show')->name('questions.show');
Route::patch('/questions/{question}', 'QuestionsController@update')->name('questions.update');
Route::delete('/questions/{question}', 'QuestionsController@destroy')->name('questions.destroy');

// Answers
Route::get('/questions/{question}/answers', 'AnswersController@index');
Route::post('/questions/{question}/answers', 'AnswersController@store');
Route::delete('/answers/{answer}', 'AnswersController@destroy');
Route::patch('/answers/{answer}', 'AnswersController@update');
Route::post('/answers/{answer}/best', 'AnswersController@best');

// Comments
Route::post('/questions/{question}/comments', 'QuestionCommentsController@store')->middleware('auth');
Route::post('/answers/{answer}/comments', 'AnswerCommentsController@store')->middleware('auth');

// Users
Route::get('/{user}', 'UsersController@show')->name('users.show');

// Users Avatar
Route::post('api/users/{user}/avatar', 'Api\UserAvatarController@store')->middleware('auth')->name('avatar');

// Notifications
Route::get('/{user}/notifications', 'UserNotificationsController@index');
Route::delete('/{user}/notifications/{notification}', 'UserNotificationsController@destroy');

// Favorites
Route::post('/questions/{question}/favorites', 'FavoritesController@store');
Route::delete('/questions/{question}/favorites', 'FavoritesController@destroy');

// Question Votes
Route::post('/questions/{question}/{type}', 'QuestionVotesController@store')->name('questions.votes.store');

// Answer Votes
Route::post('/answers/{answer}/{type}', 'AnswerVotesController@store')->name('answers.votes.store');
