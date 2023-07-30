<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamDetailController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionDetailController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('lessons', LessonController::class);
Route::resource('questions', QuestionController::class);
Route::resource('subjects', SubjectController::class);
Route::get('/questionDetails/getQuestionDetails', [QuestionDetailController::class, 'getQuestionDetails']);
Route::get('/questionDetails/getExamSubjectQuestions', [QuestionDetailController::class, 'getExamSubjectQuestions']);
Route::resource('questionDetails', QuestionDetailController::class);
Route::post('/subjects/addToExam', [ExamDetailController::class, 'addToExam']);
Route::get('/exams/getSubjects', [ExamDetailController::class, 'getSubjects']);
Route::post('/admins/authenticate', [AdminController::class, 'auth']);
