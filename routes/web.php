<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VendaController;
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

Route::get('/', function () {

    // reference the Dompdf namespace

    // instantiate and use the dompdf class
    // $dompdf = new Dompdf();
    // $dompdf->loadHtml('hello world');

    // // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'landscape');

    // // Render the HTML as PDF
    // $dompdf->render();

    // // Output the generated PDF to Browser
    // $dompdf->stream();
    return view('login');
});

Auth::routes();


Route::get("/login", [LoginController::class, 'showLoginForm']);
Route::get("/", [LoginController::class, 'showLoginForm']);
Route::post("/login", [LoginController::class, 'login'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/venda', [VendaController::class, 'create'])->name('vendas.create');
Route::get('/venda/{id}/imprimir', [VendaController::class, 'print'])->name('vendas.print');
