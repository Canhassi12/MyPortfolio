<?php

use App\Http\Controllers\PortifolioController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use Illuminate\Support\Facades\Http;


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

Route::get('/', function() {
   return redirect(to:'/Canhassi');
});
Route::middleware('throttle:manyRequests')->get('/Canhassi', [PortifolioController::class, 'index'])->name('site.index');