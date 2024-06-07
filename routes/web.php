<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;


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
    return view('acceuil');
});





Route::get('/invoices-detail', function () {
    return view('invoices_detail');
});

Route::get('/invoices-grid', function () {
    return view('invoices_grid');
});



Route::get('/invoices-setting', function () {
    return view('invoices_setting');
});


Route::get('/invoices-list', [InvoiceController::class, 'invoices_list']);
Route::get('/add-invoices', [InvoiceController::class, 'add_invoices']);
Route::get('/edit-invoices/{id}', [InvoiceController::class, 'edit_invoices']);
Route::post('/edit-invoices/traitement', [InvoiceController::class, 'edit_invoices_traitement']);
Route::post('/add-invoices/traitement', [InvoiceController::class, 'add_invoices_traitement']);