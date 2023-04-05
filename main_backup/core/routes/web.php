<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/home', function () {
    return view('welcome');
});

//mesh
Route::get('/how-to-pass-english-teas-test',[FrontController::class,'passEnglishTeasTest']);
Route::get('/how-many-english-questions-are-on-teas-test',[FrontController::class,'noOfQuestionsOnTeasTest']);

// start mesh routes

Route::get('/breaking-down-the-teas-test',[FrontController::class,'breaking_down_the_teas_test']);
Route::get('/free-teas-test-resources',[FrontController::class,'free_teas_test_resources']);
Route::get('/what-is-the-teas-test',[FrontController::class,'what_is_the_teas_test']);
Route::get('/how-many-practise-teast-test-should-you-take',[FrontController::class,'how_many_practise_teast_test_should_you_take']);
Route::get('/comprehensive-TEAS-7-practice-test',[FrontController::class,'comprehensive_teas_7_practise_test']);

//end mesh routes
//start jack route files
Route::get('/how-to-pass-english-teas-test',[FrontController::class,'passEnglishTeasTest']);
Route::get('/how-many-english-questions-are-on-teas-test',[FrontController::class,'noOfQuestionsOnTeasTest']);
Route::get('/what-is-the-hardest-part-of-teas-test',[FrontController::class,'hardestPartOfTeasTest']);


//end jack route files

//sheibi route
Route::get('/teas-test-score-for-nursing',[FrontController::class,'nursingScoreTeasTest']);
Route::get('/teas-english-test',[FrontController::class,'englishTeasTest']);
Route::get('/teas-science-practice-questions',[FrontController::class,'teasScienceQuiz']);
Route::get('/teas-reading-practice-test',[FrontController::class,'teasReadingPracticeTest']);
Route::get('/ati-teas-practice-test-2023',[FrontController::class,'atiTeasPracticeTest']);

//end sheibi

//Carilus Begin
Route::get('/tips-for-passing-teas',[FrontController::class,'tipsForPassingTeas']);
Route::get('/teas-english-practice-test',[FrontController::class,'teasEnglishPracticeTest']);
Route::get('/teas-science-test-and-preparation-tips',[FrontController::class,'teasScienceTest']);
Route::get('/teas-test-scores-for-nursing-programs',[FrontController::class,'teasScoresForNursingPrograms']);

Route::get('/similarities-between-teas-practice-and-actual-tests',[FrontController::class,'similaritiesBetweenTeasAndActualTest']);

//Carilus End

Route::get('/teas-reading-practice-test',[FrontController::class,'teasReadingPracticeTest']);
Route::get('/teas-math-practice-test',[FrontController::class,'teasMathPracticeTest']);
Route::get('/is-the-teas-test-hard',[FrontController::class,'isTeasTestHard']);
Route::get('/teas-english-practice-test-free',[FrontController::class,'englishTeasTestFree']);
Route::get('/mastering-teas-reading-test',[FrontController::class,'teasReadingTest']);