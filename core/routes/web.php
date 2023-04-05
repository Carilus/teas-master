<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
Route::get('/test', 'FrontController@index');



Route::get('/home', function () {
    return view('welcome');
});

//mesh
Route::get('/how-to-pass-english-teas-test','FrontController@passEnglishTeasTest');
Route::get('/how-many-english-questions-are-on-teas-test','FrontController@noOfQuestionsOnTeasTest');

// start mesh routes

Route::get('/breaking-down-the-teas-test','FrontController@breaking_down_the_teas_test');
Route::get('/free-teas-test-resources','FrontController@free_teas_test_resources');
Route::get('/what-is-the-teas-test','FrontController@what_is_the_teas_test');
Route::get('/how-many-practise-teast-test-should-you-take','FrontController@how_many_practise_teast_test_should_you_take');
Route::get('/comprehensive-TEAS-7-practice-test','FrontController@comprehensive_teas_7_practise_test');

//end mesh routes
//start jack route files
Route::get('/how-to-pass-english-teas-test','FrontController@passEnglishTeasTest');
Route::get('/how-many-english-questions-are-on-teas-test','FrontController@noOfQuestionsOnTeasTest');
Route::get('/what-is-the-hardest-part-of-teas-test','FrontController@hardestPartOfTeasTest');


//end jack route files

//sheibi route
Route::get('/teas-test-score-for-nursing','FrontController@nursingScoreTeasTest');
Route::get('/teas-english-test','FrontController@englishTeasTest');
Route::get('/teas-science-practice-questions','FrontController@teasScienceQuiz');
Route::get('/teas-reading-practice-test','FrontController@teasReadingPracticeTest');
Route::get('/ati-teas-practice-test-2023','FrontController@atiTeasPracticeTest');

//end sheibi

//Carilus Begin
Route::get('/tips-for-passing-teas','FrontController@tipsForPassingTeas');
Route::get('/teas-english-practice-test','FrontController@teasEnglishPracticeTest');
Route::get('/teas-science-test-and-preparation-tips','FrontController@teasScienceTest');
Route::get('/teas-test-scores-for-nursing-programs','FrontController@teasScoresForNursingPrograms');

Route::get('/similarities-between-teas-practice-and-actual-tests','FrontController@similaritiesBetweenTeasAndActualTest');

//Carilus End

Route::get('/teas-reading-practice-test','FrontController@teasReadingPracticeTest');
Route::get('/teas-math-practice-test','FrontController@teasMathPracticeTest');
Route::get('/is-the-teas-test-hard','FrontController@isTeasTestHard');
Route::get('/teas-english-practice-test-free','FrontController@englishTeasTestFree');
Route::get('/mastering-teas-reading-test','FrontController@teasReadingTest');




