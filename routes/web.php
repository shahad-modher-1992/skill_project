<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('web.index');
// });

// Route::get('/', [CatController::class, 'index']);

Route::middleware('lang')->group(function(){
    // Route::get('/cat/show/{id}', [CatController::class, 'catindex']);
    Route::get('/skill/show/{id}' , [SkillController::class, 'skillindex']);
    Route::get('/exam/show/{id}', [ExamController::class, 'examindex']);
    Route::get('/exam/show/question/{id}', [ExamController::class, 'questionindex']);
    Route::get('/cat/{id}', [CatController::class, 'show'])->middleware('verified');
    Route::get('/', function () {
        return view('web.index');
    });

});

Route::post('/exam/show/start/{id}', [ExamController::class, 'start']);


Route::get('/lang/set/{lang}', [LangController::class, 'set']);

