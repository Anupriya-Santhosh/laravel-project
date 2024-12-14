<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth','prevent-back-history'])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';



Route::get('/travel', [DestinationController::class, 'travel'])->name('travel');
Route::get('/about', [DestinationController::class, 'about'])->name('about');
Route::get('/tour', [DestinationController::class, 'tour'])->name('tour');
Route::get('/gallery', [DestinationController::class, 'gallery'])->name('gallery');
Route::get('/services', [DestinationController::class, 'services'])->name('services');
Route::get('/contact', [DestinationController::class, 'contact'])->name('contact');
Route::post('/contacts', [DestinationController::class, 'store'])->name('contacts.store');
Route::get('/book', [DestinationController::class, 'book'])->name('book');
Route::post('/contact', [DestinationController::class, 'submitContact'])->name('contact.submit');

Route::get('/list_destination', [DestinationController::class, 'index'])->name('destinations.list');
Route::get('/add_destination', [DestinationController::class, 'create'])->name('add_destination_form');
Route::post('/add_destination', [DestinationController::class, 'store'])->name('store_destination');
Route::get('/dashboard', [DestinationController::class, 'dashboard'])->name('dashboard');
Route::get('/dash', [DestinationController::class, 'dash'])->name('dash');
Route::get('/edit-destination/{id}', [DestinationController::class, 'edit'])->name('edit_destination');
Route::delete('/delete-destination/{id}', [DestinationController::class, 'destroy'])->name('delete_destination');
Route::put('/update-destination/{id}', [DestinationController::class, 'update'])->name('update_destination');
// Display booking form
Route::get('/book-now', [DestinationController::class, 'showBookingForm'])->name('book.show');

// Handle booking form submission
Route::post('/book-now', [DestinationController::class, 'storeBooking'])->name('book.store');
Route::get('/book_db', [DestinationController::class, 'showBookings'])->name('book.view');
Route::get('/booking', [DestinationController::class, 'showBookingsPage'])->name('bookings');










