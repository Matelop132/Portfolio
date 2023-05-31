<?php

use App\Http\Controllers\PortFolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider witIhin a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PortFolioController::class, 'Index']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/formation', function () {
    return view('formation');
});

// -- Projet -- //
Route::get('/projet', function () {
    return view('projet');
});
Route::get('/avis', function () {
    return view('project/avis');
});
Route::get('/raw_event', function () {
    return view('project/raw_event');
});
Route::get('/lolitatika', function () {
    return view('project/lolitatika');
});
Route::get('/sudoku', function () {
    return view('project/sudoku');
});
Route::get('/bedrock', function () {
    return view('project/bedrock');
});
Route::get('/bdsql', function () {
    return view('project/bdsql');
});
Route::get('/django', function () {
    return view('project/django');
});
Route::get('/rib_appli', function () {
    return view('project/rib_appli');
});
Route::get('/derive', function () {
    return view('project/derive');
});
Route::get('/infra_env', function () {
    return view('project/infra_env');
});
Route::get('/infra_reseau', function () {
    return view('project/infra_reseau');
});
Route::get('/proj_velo', function () {
    return view('project/proj_velo');
});

