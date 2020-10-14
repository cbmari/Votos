<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Models\Teste;

use function GuzzleHttp\Promise\all;

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
Route::resource('testes', 'TesteController');
Route::get('/admin/statistic',function(){
    $montly = Teste::table('testes')
    ->select(Teste::raw('apoio(total) as total'))
    ->groupBy(Teste::raw('DAY(created_at) DESC'));
    return view('admin.statistika.index',compact('montly'));
});