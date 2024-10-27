<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PDFController;
use App\Models\Invoice;
use Dompdf\Adapter\PDFLib;
use Illuminate\Support\Facades\Route;

Route::get('/pdf',[PDFController::class,'generatePDF']);
Route::get('/',[InvoiceController::class,'index']);
Route::get('/admin',[InvoiceController::class,'edit']);
Route::put('/admin/{invoice}',[InvoiceController::class,'update'])->name('admin.update');
