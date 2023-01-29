<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;


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


/* [' result' => 'bon travail ', 'min_score' => 2, ' max_score' => 4]
 */




Route::get('/', function () {
    return view('welcome');
});


Route::get('/initialize', function () {
    session()->flush();
    Session::push('ques', [  'question' =>  'Combient 1 + 5', 'answer1' =>   '1', 'answer2' =>   '2', 'answer3' =>   '6', 'answer4' =>   '10', 'correct_answer' => '6' ]);
    Session::push('ques', [  'question' =>  'Combient 5 + 5', 'answer1' =>   '1', 'answer2' =>   '2', 'answer3' =>   '4', 'answer4' =>   '10', 'correct_answer' => '10']);
    Session::push('result',['result' => 'bon travail ', 'min_score' => 1, 'max_score' => 2]);
    Session::push('result',['result' => 'vous serez mieux la prochaine fois ', 'min_score' => 0, 'max_score' => 1]);

    return view('question.index');
});

Route::prefix('question')->group(function () {
    Route::get('/', [QuestionController::class, 'index'])->name('question.index');
    Route::post('/create', [QuestionController::class, 'create'])->name('question.create');
    Route::get('/{qestion}', [QuestionController::class, 'store'])->name('question.store');
    Route::put('/{question}/edit', [QuestionController::class, 'update'])->name('question.update');
    Route::delete('/{question}', [QuestionController::class, 'delete'])->name('question.delete');
});

Route::resource('result', ResultController::class)->except(['show']);


Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz', [QuizController::class, 'store']);
Route::resource('quiz', QuizController::class)->only(['index','store']);

Route::get('/quiz/result', function(){
    $answers = [];
    $score = 0;
    foreach(Session::get('answer') as $answer){
        array_push($answers,$answer['answer']);
    }

    foreach(Session::get('ques') as $q){
        if(in_array($q['correct_answer'], $answers)){
            $score += 1;
        }
    }

    foreach(Session::get('result') as $r){
        if($score >= $r['min_score'] and $score <= $r['max_score']){
            $message = $r['result'];
        }
    }

    return view('quiz.result',['message' => $message]);
})->name('quiz.result');


