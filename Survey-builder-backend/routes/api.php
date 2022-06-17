<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\AuthController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('/register', [AuthController::class, 'register'])->name("register");
Route::post('/login', [AuthController::class, 'login'])->name("login");

Route::group(['prefix' => 'user'], function(){

    Route::get('/all_surveys', [SurveyController::class, 'getAllSurveys'])->name('getAllSurveys');
    Route::get('/questions', [QuestionController::class, 'getQuestions'])->name('getQuestions');
    Route::post('/submit_survey', [SurveyController::class, 'submitSurvey'])->name('submitSurvey');
    
});

Route::group(['prefix' => 'admin'], function(){

    Route::post('/create_survey', [SurveyController::class, 'createSurvey'])->name('createSurvey');
    Route::post('/add_questions', [QuestionController::class, 'addQuestion'])->name('addQuestion');
    Route::post('/add_choices', [ChoiceController::class, 'addChoices'])->name('addChoices');

    Route::get('/all_surveys', [SurveyController::class, 'getAllSurveys'])->name('getAllSurveys');
    Route::get('/show_results', [AnswerController::class, 'showResults'])->name('results');

});
