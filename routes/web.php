<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'create']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/categorie', [AdminController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('add_categorie', [AdminController::class, 'add'])->middleware(['auth', 'admin']);
Route::get('delete_categorie/{id}', [AdminController::class, 'delete'])->middleware(['auth', 'admin']);
Route::get('edit_categorie/{id}', [AdminController::class, 'edit'])->middleware(['auth', 'admin']);
Route::post('update_categorie/{id}', [AdminController::class, 'update'])->middleware(['auth', 'admin']);

Route::get('/livre', [LivreController::class, 'create']);
Route::get('add_livre', [AdminController::class, 'add_livre'])->middleware(['auth', 'admin']);
Route::post('upload_livre', [AdminController::class, 'upload'])->middleware(['auth', 'admin']);
Route::get('livres', [AdminController::class, 'view_livre'])->middleware(['auth', 'admin']);
Route::get('delete_livre/{id}', [AdminController::class, 'delete_livre'])->middleware(['auth', 'admin']);
Route::post('edit_livre/{id}', [AdminController::class, 'edit_livre'])->middleware(['auth', 'admin']);
Route::get('update_livre/{id}', [AdminController::class, 'update_livre'])->middleware(['auth', 'admin']);

Route::get('/livre/{id}', [LivreController::class, 'index'])->name('livredynamique');


Route::get('/reservation', [ReservationController::class, 'index']);
Route::get('/reservation/{livre}', [ReservationController::class, 'create'])->name('reservation.create')->middleware('auth');
Route::post('/reservation/{livre}', [ReservationController::class, 'store'])->name('reservation.store')->middleware('auth');
Route::get('reservation_view',[AdminController::class, 'create_reservation'])->middleware(['auth', 'admin']);
Route::get('edit_reservation/{id}', [AdminController::class, 'edit_reservation'])->middleware(['auth', 'admin']);
Route::post('update_reservation/{id}', [AdminController::class, 'update_reservation'])->middleware(['auth', 'admin']);


Route::get('/user', [AdminController::class, 'create_user'])->middleware(['auth', 'admin']);
Route::get('delete_user/{id}', [AdminController::class, 'destory'])->middleware(['auth', 'admin']);

Route::post('/contact' , [HomeController::class, 'store']) -> name('contact.store')-> middleware('auth');
Route::get('contact_view',[AdminController::class, 'create_contact'])->middleware(['auth', 'admin']);
Route::get('delete_contact/{id}', [AdminController::class, 'destory_contact'])->middleware(['auth', 'admin']);


