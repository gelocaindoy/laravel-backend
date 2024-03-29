<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PlansController;
use App\Http\Controllers\Admin\FooterController;

use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\HomePageEtcController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Chart Route 
Route::get('/chartdata',[ChartController::class, 'onAllSelect']);
Route::put('/chartdata',[ChartController::class, 'EditChartContent']);
// Client Review Route 
Route::get('/clientreview',[ClientReviewController::class, 'onAllSelect']);
// Contact Form Route 
Route::post('/contactsend',[ContactController::class, 'onContactSend']);

// Plans All Routes 
Route::get('/planshome',[PlansController::class, 'onSelectFour']);
Route::get('/plansall',[PlansController::class, 'onSelectAll']);
Route::get('/plansdetails/{plansId}',[PlansController::class, 'OnSelectDetails']);

// Footer Route 
Route::get('/footerdata',[FooterController::class, 'onSelectAll']);

// Information Route 
Route::get('/information',[InformationController::class, 'onSelectAll']);

// Services Route 
Route::get('/services',[ServiceController::class, 'ServiceView']);

// Project All Routes 
Route::get('/projecthome',[ProjectController::class, 'onSelectThree']);
Route::get('/projectall',[ProjectController::class, 'onSelectAll']);
Route::get('/projectdetails/{projectId}',[ProjectController::class, 'ProjectDetails']);

// Home Etc All Routes 
Route::get('/home/video',[HomePageEtcController::class, 'SelectVideo']);
Route::get('/totalhome',[HomePageEtcController::class, 'SelectTotalHome']);
Route::get('/techhome',[HomePageEtcController::class, 'SelectTechHome']);
Route::get('/homepage/title',[HomePageEtcController::class, 'SelectHomeTitle']);