<?php

use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicoController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return Inertia::render('Home');
});
Route::get('/servico', [ServicoController::class, 'index'])->name('servico.index');
Route::post('/servico/store', [ServicoController::class, 'store'])->name('servico.store');

Route::get('/especialidade', [EspecialidadeController::class, 'index'])->name('especialidade.index');
Route::post('/especialidade/store', [EspecialidadeController::class, 'store'])->name('especialidade.store');
Route::delete('/especialidade/{id}', [EspecialidadeController::class, 'destroy'])->name('especialidade.delete');


require __DIR__ . '/auth.php';
