<?php

use App\Http\Controllers\ProfileController;
use App\Models\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormContactController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\CandidateController;
Route::get('/',[HomeController::class, 'show_home'])->name('show_home');
//admin home 

Route::get('/read_home',[HomeController::class, 'read_home'])->name('read_home');

Route::get('/edit_home/{id}',[HomeController::class, 'edit_home'])->name('edit_home');

Route::post('/update_home/{id}',[HomeController::class, 'update_home'])->name('update_home');




//admin about

Route::get('/read_about',[HomeController::class, 'read_about'])->name('read_about');

Route::get('/edit_about/{id}',[HomeController::class, 'edit_about'])->name('edit_about');

Route::post('/update_about/{id}',[HomeController::class, 'update_about'])->name('update_about');
 
//admin service
Route::get('/read_services', [ServiceController::class, 'read_services'])->name('read_services');
Route::get('/service', [ServiceController::class, 'show_service'])->name('service'); // <-- FIXED

Route::get('/read_service', [ServiceController::class, 'read_service'])->name('read_service');

Route::get('/show_service',[ServiceController::class, 'show_service'])->name('show_service');

Route::get('/add_service',[ServiceController::class, 'add_service'])->name('add_service');

Route::post('/create_service',[ServiceController::class, 'create_service'])->name('create_service');

Route::get('/edit_service/{id}',[ServiceController::class, 'edit_service'])->name('edit_service');

Route::post('/update_service/{id}',[ServiceController::class, 'update_service'])->name('update_service');

Route::get('/delete_service/{id}',[ServiceController::class, 'delete_service'])->name('delete_service');


//admin portfolio
Route::get('/read_portfolio', [PortfolioController::class, 'read_portfolio'])->name('read_portfolio');
Route::get('/portfolio', [PortfolioController::class, 'show_portfolio'])->name('portfolio'); // <-- FIXED

Route::get('/read_portfolio', [PortfolioController::class, 'read_portfolio'])->name('read_portfolio');

Route::get('/show_portfolio',[PortfolioController::class, 'show_portfolio'])->name('show_portfolio');

Route::get('/add_portfolio',[PortfolioController::class, 'add_portfolio'])->name('add_portfolio');

Route::post('/create_portfolio',[PortfolioController::class, 'create_portfolio'])->name('create_portfolio');

Route::get('/edit_portfolio/{id}',[PortfolioController::class, 'edit_portfolio'])->name('edit_portfolio');

Route::post('/update_portfolio/{id}',[PortfolioController::class, 'update_portfolio'])->name('update_portfolio');

Route::get('/delete_portfolio/{id}',[PortfolioController::class, 'delete_portfolio'])->name('delete_portfolio');


//admin team
Route::get('/team', [TeamController::class, 'show_team'])->name('team');
Route::get('/read_team', [TeamController::class, 'read_team'])->name('read_team');
Route::get('/show_team',[TeamController::class, 'show_team'])->name('show_team');
Route::get('/add_team',[TeamController::class, 'add_team'])->name('add_team');
Route::post('/create_team',[TeamController::class, 'create_team'])->name('create_team');
Route::get('/edit_team/{id}',[TeamController::class, 'edit_team'])->name('edit_team');
Route::post('/update_team/{id}',[TeamController::class, 'update_team'])->name('update_team');
Route::get('/delete_team/{id}',[TeamController::class, 'delete_team'])->name('delete_team');


//admin contact

Route::get('/read_contact',[ContactController::class, 'read_contact'])->name('read_contact');

Route::get('/edit_contact/{id}',[ContactController::class, 'edit_contact'])->name('edit_contact');

Route::post('/update_contact/{id}',[ContactController::class, 'update_contact'])->name('update_contact');

 //admin FORMcontact

 Route::post('/create_formcontact',[FormContactController::class, 'create_formcontact'])->name('create_formcontact');

 Route::get('/read_formcontact',[FormContactController::class, 'read_formcontact'])->name('read_formcontact');

 Route::get('/detail_formcontact/{id}',[FormContactController::class, 'detail_formcontact'])->name('detail_formcontact');


 Route::get('/delete_formcontact/{id}',[FormContactController::class, 'delete_formcontact'])->name('delete_formcontact');


//admin subscriber

Route::post('/create_subscriber', [SubscriberController::class, 'create_subscriber'])->name('create_subscriber');

Route::get('/read_subscriber', [SubscriberController::class, 'read_subscriber'])->name('read_subscriber');

Route::get('/detail_subscriber/{id}', [SubscriberController::class, 'detail_subscriber'])->name('detail_subscriber');

Route::get('/delete_subscriber/{id}', [SubscriberController::class, 'delete_subscriber'])->name('delete_subscriber');

Route::get('/write_to_one_subscriber/{id}', [SubscriberController::class,'write_to_one_subscriber'])->name('write_to_one_subscriber');

Route::post('/send_mail_to_one_subscriber', [SubscriberController::class,'send_mail_to_one_subscriber'])->name('send_mail_to_one_subscriber');

Route::get('/write_to_all_subscriber', [SubscriberController::class,'write_to_all_subscriber'])->name('write_to_all_subscriber');

Route::post('/send_mail_to_all_subscriber', [SubscriberController::class,'send_mail_to_all_subscriber'])->name('send_mail_to_all_subscriber');

//Admin Candidates


Route::get('/add_candidate', [CandidateController::class,'add_candidate'])->name('add_candidate');
Route::get('/read_candidate', [CandidateController::class,'read_candidate'])->name('read_candidate');

Route::post('/create_candidate', [CandidateController::class,'create_candidate'])->name('create_candidate');

Route::get('/delete_candidate/{id}', [CandidateController::class,'delete_candidate'])->name('delete_candidate');

Route::get('/edit_candidate{id}', [CandidateController::class,'edit_candidate'])->name('edit_candidate');

Route::post('/update_candidate/{id}', [CandidateController::class,'update_candidate'])->name('update_candidate');
    
Route::post('/search_candidate', [CandidateController::class,'search_candidate'])->name('search_candidate');

Route::get('/pdfdownload_candidate/{id}', [CandidateController::class,'pdfdownload_candidate'])->name('pdfdownload_candidate');

Route::get('/videocandidate_candidate/{id}', [CandidateController::class,'videocandidate_candidate'])->name('videocandidate_candidate');

Route::get('/write_to_one/{id}', [CandidateController::class,'write_to_one'])->name('write_to_one');

Route::post('/send_mail_to_one', [CandidateController::class,'send_mail_to_one'])->name('send_mail_to_one');

Route::get('/write_to_all', [CandidateController::class,'write_to_all'])->name('write_to_all');

Route::post('/send_mail_to_all', [CandidateController::class,'send_mail_to_all'])->name('send_mail_to_all');



Route::get('/dashboard', function () {
 
 
 
 
 
 
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
