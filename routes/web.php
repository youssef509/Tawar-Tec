<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\ServicesController;

Route::get('/test', [\App\Http\Controllers\TestApicontroller::class, 'fetchAccounts'])->name(name: 'api');
Route::get('/Hosting', [HostingController::class, 'index'])->name(name:'Hosting');
Route::get('/', [HomeController::class, 'index'])->name(name: 'home');
Route::get('/domain', [GeneralController::class, 'index'])->name('domain');
Route::post('/domain-check', [DomainController::class, 'checkDomain'])->name('domain.check');
Route::get('/Services', [ServicesController::class, 'index'])->name(name: 'Services');
Route::get('/Company', [CompanyController::class, 'index'])->name(name: 'Company');
Route::get('/Contact-us', [ContactController::class, 'index'])->name(name: 'Contact-us');
Route::get('/getCatalog', [GeneralController::class, 'getCatalog'])->name(name: 'getCatalog');



